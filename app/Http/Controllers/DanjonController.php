<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Stage\Repositories\StageRepositoryInterface;
use Stage\Repositories\EnglishWordsRepositoryInterface;
use User\Repositories\UserRepositoryInterface;
use User\Repositories\SkillsRepositoryInterface;

class DanjonController extends Controller
{

  public function __construct(
    StageRepositoryInterface $stageRepository,
    UserRepositoryInterface $userRepository,
    EnglishWordsRepositoryInterface $englishWordsRepository,
    SkillsRepositoryInterface $skillsRepository
    )
   {
      $this->stageRepository = $stageRepository;
      $this->userRepository = $userRepository;
      $this->englishWordsRepository = $englishWordsRepository;
      $this->skillsRepository = $skillsRepository;
   }

  public function danjon1(Request $request) {

    // $url = $this->userRepository->getUserInfomation();
    // var_dump($url);
    // exit();
    // $url = user_chara()[0]->image
    $url = $this->userRepository->getUserCharacter()[0]->image;
    $tech = $this->userRepository->getUserTechnique()[0]->technique;
    $damage = $this->userRepository->getUserTechnique()[0]->damage;
    $sql = $this->userRepository->getUserInfomation();
    $s_id = $this->userRepository->getUserInfomation()[0]->s_id;
    $skill = $this->skillsRepository->getSkillById($s_id);
    $page = $_SERVER['REQUEST_URI'];
    $name = explode("/", $page);
    $stage_max = $this->userRepository->getUserStage()[0][$name[1]];
    $stage = $this->stageRepository->getStageArray($stage_max);
    $main = $this->stageRepository->getMain($name[1]);
    $user_ex = $sql[0]->experience;
    $user_lv = $sql[0]->level;
    $lv_ex = $this->userRepository->getLevelEx($user_lv);
    $ex_value = ($user_ex/$lv_ex)*200;
    $flag = "english";


    return view('hello.danjon1', compact("sql", "url", "tech", "damage", "stage", "main", "ex_value", "stage_max", "flag", "skill"));
  }

  public function danjon2(Request $request) {
    $url = $this->userRepository->getUserCharacter()[0]->image;
    $tech = $this->userRepository->getUserTechnique()[0]->technique;
    $damage = $this->userRepository->getUserTechnique()[0]->damage;
    $sql = $this->userRepository->getUserInfomation();
    $s_id = $this->userRepository->getUserInfomation()[0]->s_id;
    $skill = $this->skillsRepository->getSkillById($s_id);
    $page = $_SERVER['REQUEST_URI'];
    $name = explode("/", $page);
    $stage_max = $this->userRepository->getUserStage()[0][$name[1]];
    $stage = $this->stageRepository->getEnglishStageArray($stage_max);
    $main = $this->stageRepository->getMain($name[1]);
    $user_ex = $sql[0]->experience;
    $user_lv = $sql[0]->level;
    $lv_ex = $this->userRepository->getLevelEx($user_lv);
    $ex_value = ($user_ex/$lv_ex)*200;
    $flag = "english";


    return view('hello.danjon1', compact("sql", "url", "tech", "damage", "stage", "main", "ex_value", "stage_max", "flag", "skill"));
  }

  public function danjon3(Request $request) {
    $url = $this->userRepository->getUserCharacter()[0]->image;
    $tech = $this->userRepository->getUserTechnique()[0]->technique;
    $damage = $this->userRepository->getUserTechnique()[0]->damage;
    $sql = $this->userRepository->getUserInfomation();
    $s_id = $this->userRepository->getUserInfomation()[0]->s_id;
    $skill = $this->skillsRepository->getSkillById($s_id);
    // $page = $_SERVER['REQUEST_URI'];
    // $name = explode("/", $page);
    $en_stage_max = $this->userRepository->getUserStage()[0]["english"];
    $en_stage = $this->stageRepository->getEnglishStageArray($en_stage_max);
    $en_main = $this->stageRepository->getMain("english");
    $stage_max = $this->userRepository->getUserStage()[0]["math"];
    $stage = $this->stageRepository->getStageArray($stage_max);
    $main = $this->stageRepository->getMain("math");
    $user_ex = $sql[0]->experience;
    $user_lv = $sql[0]->level;
    $lv_ex = $this->userRepository->getLevelEx($user_lv);
    $ex_value = ($user_ex/$lv_ex)*200;
    $flag = "experience";


    return view('hello.danjon2', compact("sql", "url", "tech", "damage", "stage","en_stage", "main", "en_main", "ex_value", "stage_max", "en_stage_max", "flag", "skill"));
  }

  public function last(Request $request) {
    $url = $this->userRepository->getUserCharacter()[0]->image;
    $tech = $this->userRepository->getUserTechnique()[0]->technique;
    $damage = $this->userRepository->getUserTechnique()[0]->damage;
    $sql = $this->userRepository->getUserInfomation();
    $s_id = $this->userRepository->getUserInfomation()[0]->s_id;
    $skill = $this->skillsRepository->getSkillById($s_id);

    $stage_max = $this->userRepository->getUserStage()[0]["last"];
    $stage = $this->stageRepository->getLastStageArray($stage_max);
    $main = $this->stageRepository->getMain("last");
    $user_ex = $sql[0]->experience;
    $user_lv = $sql[0]->level;
    $lv_ex = $this->userRepository->getLevelEx($user_lv);
    $ex_value = ($user_ex/$lv_ex)*200;
    $flag = "english";

    return view('hello.danjon1', compact("sql", "url", "tech", "damage", "stage", "main", "ex_value", "stage_max", "flag", "skill"));
  }

  public function wordsIndex(Request $request) {
    $url = $this->userRepository->getUserCharacter()[0]->image;
    $tech = $this->userRepository->getUserTechnique()[0]->technique;
    $damage = $this->userRepository->getUserTechnique()[0]->damage;
    $sql = $this->userRepository->getUserInfomation();
    $s_id = $this->userRepository->getUserInfomation()[0]->s_id;
    $skill = $this->skillsRepository->getSkillById($s_id);
    $en_stage_max = $this->userRepository->getUserStage()[0]["english"];
    $en_stage = $this->stageRepository->getEnglishStageArray($en_stage_max);
    $en_main = $this->stageRepository->getMain("english");
    $stage_max = $this->userRepository->getUserStage()[0]["math"];
    $stage = $this->stageRepository->getStageArray($stage_max);
    $main = $this->stageRepository->getMain("math");
    $user_ex = $sql[0]->experience;
    $user_lv = $sql[0]->level;
    $lv_ex = $this->userRepository->getLevelEx($user_lv);
    $ex_value = ($user_ex/$lv_ex)*200;
    $englishWords = $this->englishWordsRepository->getWords();
    $flag = "wordsIndex";

    return view('words.word', compact("sql", "url", "tech", "damage", "stage","en_stage", "main", "en_main", "ex_value", "stage_max", "en_stage_max", "englishWords", "flag", "skill"));
  }

  public function experience(Request $request) {
    if (Auth::check()) {
      return redirect('/english');
    }
    \Slack::send('体験ページが表示されました!');
    return view('hello.experience');
  }

  public function skillLists(Request $request) {
    $url = $this->userRepository->getUserCharacter()[0]->image;
    $tech = $this->userRepository->getUserTechnique()[0]->technique;
    $damage = $this->userRepository->getUserTechnique()[0]->damage;
    $sql = $this->userRepository->getUserInfomation();
    $s_id = $this->userRepository->getUserInfomation()[0]->s_id;
    $skill = $this->skillsRepository->getSkillById($s_id);
    $en_stage_max = $this->userRepository->getUserStage()[0]["english"];
    $en_stage = $this->stageRepository->getEnglishStageArray($en_stage_max);
    $en_main = $this->stageRepository->getMain("english");
    $stage_max = $this->userRepository->getUserStage()[0]["math"];
    $stage = $this->stageRepository->getStageArray($stage_max);
    $main = $this->stageRepository->getMain("math");
    $user_ex = $sql[0]->experience;
    $user_lv = $sql[0]->level;
    $lv_ex = $this->userRepository->getLevelEx($user_lv);
    $ex_value = ($user_ex/$lv_ex)*200;
    $englishWords = $this->englishWordsRepository->getWords();
    $flag = "wordsIndex";
    $uid = Auth::user()->id;
    [$user_skills, $skill_images] = $this->skillsRepository->getUserSkills($uid);

    return view('skill_list.skill_list', compact("sql", "url", "tech", "damage", "stage","en_stage", "main", "en_main", "ex_value", "stage_max", "en_stage_max", "englishWords", "flag", "user_skills", "skill", "skill_images"));
  }

  public function csvImport(Request $request) {
    // アップロードファイルのファイルパスを取得
    $file_path = $request->file('csv')->path();
    // CSV取得
    $file = new \SplFileObject($file_path);
    $file->setFlags(
        \SplFileObject::READ_CSV |           // CSV 列として行を読み込む
        \SplFileObject::READ_AHEAD |       // 先読み/巻き戻しで読み出す。
        \SplFileObject::SKIP_EMPTY |         // 空行は読み飛ばす
        \SplFileObject::DROP_NEW_LINE    // 行末の改行を読み飛ばす
      );
    // 一行ずつ処理
    $words = [];
    $i = 0;
    foreach($file as $line)
    {
        $data = [
            "en"     => $line[0],
            "jp"   => $line[1],
            "level" => $line[2]
        ];
        $words[$i] = $data;
        $i++;
    }

    $this->englishWordsRepository->importWords($words);
    return redirect('/');
  }
}
