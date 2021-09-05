<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User\Repositories\UserRepositoryInterface;
use Stage\Repositories\EnemiesRepositoryInterface;
use User\Repositories\SkillsRepositoryInterface;

class TextController extends Controller
{

  public function __construct(
    UserRepositoryInterface $userRepository,
    EnemiesRepositoryInterface $enemyRepository,
    SkillsRepositoryInterface $skillsRepository
    )
   {
      $this->userRepository = $userRepository;
      $this->enemyRepository = $enemyRepository;
      $this->skillsRepository = $skillsRepository;
   }

    public function index($level){

      $url = user_chara()[0]->image;
      $sql = $this->userRepository->getUserInfomation();
      $s_id = $this->userRepository->getUserInfomation()[0]->s_id;
      $skill = $this->skillsRepository->getSkillById($s_id);
      $tech = $skill->name;
      $damage = $skill->damage;
      $image = $skill->image;
      $sql = user_info();
      $stage_lv = stage_info($level);
      $question_array = math_question($level);

      return view('math.text0', compact("sql", "url", "tech", "damage", "image", "stage_lv", "question_array"));
    }

    public function englishindex($level){

      $url = user_chara()[0]->image;
      $sql = $this->userRepository->getUserInfomation();
      $s_id = $this->userRepository->getUserInfomation()[0]->s_id;
      $skill = $this->skillsRepository->getSkillById($s_id);
      $tech = $skill->name;
      $damage = $skill->damage;
      $image = $skill->image;
      $sql = user_info();
      $stage_lv = english_stage_info($level);
      $question_array = engQuestion($level);

      $enemy = $this->enemyRepository->getEnemyAtack($stage_lv[0]->image);

      $enemy_atacks = $enemy[0]->action;
      $enemy_sound = $enemy[0]->sound;

      $path= public_path($enemy_atacks);
      $files = \File::files($path);
      $image_list = [];
      $i = 0;
      foreach ($files as $v) {
        $image_list[$i] = $v->getfileName();
        $i++;
     }

     // var_dump($image_list);
     // exit();

      $user_atacks = $image;
      $atack_path= public_path($user_atacks);
      $atack_files = \File::files($atack_path);
      $atack_image_list_sub = [];
      $i = 0;
      foreach ($atack_files as $v) {
        $atack_image_list_sub[$i] = $v->getfileName();
        $i++;
     }

      natsort($atack_image_list_sub);

      $atack_image_list = [];
      $i = 0;

      foreach ($atack_image_list_sub as $v) {
        $atack_image_list[$i] = $v;
        $i++;
     }

      return view('english.startenglish', compact("sql", "url", "tech", "damage", "image",
      "stage_lv", "question_array", "image_list", "atack_image_list", "enemy_atacks",
      "user_atacks", "enemy_sound"));
    }

    public function lastIndex($level){

      $url = user_chara()[0]->image;
      $sql = $this->userRepository->getUserInfomation();
      $s_id = $this->userRepository->getUserInfomation()[0]->s_id;
      $skill = $this->skillsRepository->getSkillById($s_id);
      $tech = $skill->name;
      $damage = $skill->damage;
      $image = $skill->image;
      $sql = user_info();
      $stage_lv = last_stage_info($level);
      $question_array = lastQuestion();

      $enemy = $this->enemyRepository->getEnemyAtack($stage_lv[0]->image);

      $enemy_atacks = $enemy[0]->action;
      $enemy_sound = $enemy[0]->sound;

      $path= public_path($enemy_atacks);
      $files = \File::files($path);
      $image_list = [];
      $i = 0;
      foreach ($files as $v) {
        $image_list[$i] = $v->getfileName();
        $i++;
     }

     $user_atacks = $image;
     $atack_path= public_path($user_atacks);
     $atack_files = \File::files($atack_path);
     $atack_image_list_sub = [];
     $i = 0;
     foreach ($atack_files as $v) {
       $atack_image_list_sub[$i] = $v->getfileName();
       $i++;
    }

     natsort($atack_image_list_sub);

     $atack_image_list = [];
     $i = 0;

     foreach ($atack_image_list_sub as $v) {
       $atack_image_list[$i] = $v;
       $i++;
    }

      return view('last.last_stage', compact("sql", "url", "tech", "damage", "image", "stage_lv", "question_array", "image_list", "atack_image_list", "enemy_atacks",
      "user_atacks", "enemy_sound"));
    }

    public function praEnglishIndex($level){

      $url = user_chara()[0]->image;
      $sql = $this->userRepository->getUserInfomation();
      $s_id = $this->userRepository->getUserInfomation()[0]->s_id;
      $skill = $this->skillsRepository->getSkillById($s_id);
      $tech = $skill->name;
      $damage = $skill->damage;
      $image = $skill->image;
      $sql = user_info();
      $stage_lv = english_stage_info($level);
      $question_array = engQuestion($level);

      return view('practice.en_practice', compact("sql", "url", "tech", "damage", "image", "stage_lv", "question_array"));
    }

    public function praceticeUpdate(Request $request) {
      $stage_experience = $request->stage_experiment;
      updateEx($stage_experience);
      return redirect("/hometown");
    }

    public function update(Request $request) {
      $user_pre_stage = $this->userRepository->getUserStage();
      $atack = user_info()[0]->atack;
      $defense = user_info()[0]->defense;
      $stage_atack = $request->stage_atack;
      $stage_defense = $request->stage_defense;
      $stage_experience = $request->stage_experiment;
      user_update($atack, $stage_atack, $defense, $stage_defense);
      updateEx($stage_experience);
      $page = $_SERVER['REQUEST_URI'];
      $stage_lv_str = explode("/", $page);
      $url = "/" . $stage_lv_str[1];
      $stage_max = user_stage()[0][$stage_lv_str[1]];
      $stage_id = $request->stage_id;
      $this->userRepository->updateUserStage($stage_max, $stage_id, $stage_lv_str[1]);
      $user_stage = $this->userRepository->getUserStage();

      if ($user_pre_stage[0]["english"] == 20 && $user_stage[0]["english"] == 21) {
        // var_dump($user_pre_stage[0]["english"], $user_stage[0]["english"]);
        // exit();
        return redirect(route('english'))->with(['message_id' => '2']);
      }
      if ($user_pre_stage[0]["last"] == 3 && $user_stage[0]["last"] == 4) {
        // var_dump($user_pre_stage[0]["english"], $user_stage[0]["english"]);
        // exit();
        return redirect(route('last'))->with(['message_id' => '3']);
      }
      return redirect($url);
    }

    public function experienceStage() {
      $question_array = engQuestion('1-1');
      $image_list =
      $user_atacks = "img/atack_animation/a_1";
      $atack_path= public_path($user_atacks);
      $atack_files = \File::files($atack_path);
      $atack_image_list_sub = [];
      $i = 0;
      foreach ($atack_files as $v) {
        $atack_image_list_sub[$i] = $v->getfileName();
        $i++;
     }

      natsort($atack_image_list_sub);

      $atack_image_list = [];
      $i = 0;

      foreach ($atack_image_list_sub as $v) {
        $atack_image_list[$i] = $v;
        $i++;
     }

     $enemy_atacks = "img/atack_animation/enemy_atack_1";
     $path= public_path($enemy_atacks);
     $files = \File::files($path);
     $image_list = [];
     $i = 0;
     foreach ($files as $v) {
       $image_list[$i] = $v->getfileName();
       $i++;
    }
      return view('experience.experience_stage', compact("question_array", "image_list", "atack_image_list", "enemy_atacks", "user_atacks"));
    }

    public function experienceBack() {
      return redirect('/experience');
    }
}
