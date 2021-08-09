<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextController extends Controller
{
    public function index($level){

      $url = user_chara()[0]->image;
      $tech = user_tech()[0]->technique;
      $damage = user_tech()[0]->damage;
      $image = user_tech()[0]->image;
      $sql = user_info();
      $stage_lv = stage_info($level);
      $question_array = math_question($level);

      return view('math.text0', compact("sql", "url", "tech", "damage", "image", "stage_lv", "question_array"));
    }

    public function englishindex($level){

      $url = user_chara()[0]->image;
      $tech = user_tech()[0]->technique;
      $damage = user_tech()[0]->damage;
      $image = user_tech()[0]->image;
      $sql = user_info();
      $stage_lv = english_stage_info($level);
      $question_array = engQuestion($level);

      $enemy_atacks = "img/enemy_atack";
      $path= public_path($enemy_atacks);
      $files = \File::files($path);
      $image_list = [];
      $i = 0;
      foreach ($files as $v) {
        $image_list[$i] = $v->getfileName();
        $i++;
     }

      return view('english.startenglish', compact("sql", "url", "tech", "damage", "image", "stage_lv", "question_array", "image_list"));
    }

    public function lastIndex($level){

      $url = user_chara()[0]->image;
      $tech = user_tech()[0]->technique;
      $damage = user_tech()[0]->damage;
      $image = user_tech()[0]->image;
      $sql = user_info();
      $stage_lv = last_stage_info($level);
      $question_array = lastQuestion();

      return view('last.last_stage', compact("sql", "url", "tech", "damage", "image", "stage_lv", "question_array"));
    }

    public function praEnglishIndex($level){

      $url = user_chara()[0]->image;
      $tech = user_tech()[0]->technique;
      $damage = user_tech()[0]->damage;
      $image = user_tech()[0]->image;
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
      updateStage($stage_max, $stage_id, $stage_lv_str[1]);
      return redirect($url);
    }

    public function experienceStage() {
      $question_array = engQuestion('1-1');
      return view('experience.experience_stage', compact("question_array"));
    }

    public function experienceBack() {
      return redirect('/experience');
    }
}
