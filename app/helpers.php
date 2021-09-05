<?php

namespace App\Http\Controllers;

use App\User_info;
use App\User_tech;
use App\User_chara;
use App\Stage;
use Auth;

if (!function_exists('user_info')) {
    function user_info()
    {
        $db = app('db');
        $user_info = new User_info;
        $user = Auth::user();
        $email = $user->email;
        $sql = $db->table('user_info')
                ->where('email', $email)->get();
        return $sql;
    }
}

if (!function_exists('user_tech')) {
    function user_tech()
    {
        $db = app('db');
        $user_tech = new User_tech;
        $user = Auth::user();
        $email = $user->email;
        $chara = user_info()[0]->character;
        $level = user_info()[0]->level;
        $tech_sql = $db->table('user_technique')
                ->where('user_feature', $chara)->where('level', $level)->get();
        return $tech_sql;
    }
}

if (!function_exists('user_chara')) {
    function user_chara()
    {
        $db = app('db');
        $user_tech = new User_chara;
        $user = Auth::user();
        $email = $user->email;
        $chara = user_info()[0]->character;
        $level = user_info()[0]->level;
        $chara_sql = $db->table('user_chara')
                ->where('chara', $chara)->where('level', $level)->get();
        return $chara_sql;
    }
}

if (!function_exists('user_stage')) {
    function user_stage()
    {
        $db = app('db');
        $user_tech = new User_chara;
        $user = Auth::user();
        $email = $user->email;
        $stage_sql = $db->table('user_stage')
                ->where('email', $email)->get();
        $stage_sql = json_decode(json_encode($stage_sql), true);
        return $stage_sql;
    }
}

if (!function_exists('user_update')) {
    function user_update(int $atack, int $stage_atack, int $defense, int $stage_defense)
    {
        $db = app('db');
        $user_info = new User_info;
        $user = Auth::user();
        $email = $user->email;
        $atack = $atack + $stage_atack;
        $defense = $defense + $stage_defense;
        if ($atack > 100) {
          $atack = 100;
        }
        if ($defense > 100) {
          $defense = 100;
        }
        $db->table('user_info')->where('email', $email)->update(['atack' => $atack, 'defense' => $defense]);
    }
}

if (!function_exists('level_ex')) {
    function level_ex(int $level)
    {
        $db = app('db');
        $sql = $db->table('user_level')->where('lv', $level)->get();
        $ex = $sql[0]->experience;
        return $ex;
    }
}

if (!function_exists('updateEx')) {
    function updateEx(int $update_ex)
    {
        $user_ex = user_info()[0]->experience;
        $user_lv = user_info()[0]->level;
        $email = user_info()[0]->email;
        $all_ex = $user_ex + $update_ex;
        $lv_ex = level_ex($user_lv);
        $db = app('db');
        if ($user_lv == 20) {
          return;
        }
        if ($all_ex >= $lv_ex) {
          $user_lv += 1;
          $ex = $all_ex - $lv_ex;
          if ($user_lv == 20) {
            $ex = 0;
          }
          $db->table('user_info')->where('email', $email)->update(['level' => $user_lv, 'experience' => $ex]);
        } else {
          $db->table('user_info')->where('email', $email)->update(['experience' => $all_ex]);
        };
    }
}

if (!function_exists('updateStage')) {
    function updateStage(int $user_stage, int $stage_id, string $stage_name)
    {
        $email = user_info()[0]->email;
        $db = app('db');
        $upstage = $user_stage + 1;
        if ($user_stage <= $stage_id) {
          $db->table('user_stage')->where('email', $email)->update([$stage_name => $upstage]);
        }
    }
}

if (!function_exists('stage_info')) {
    function stage_info(string $level)
    {
        $db = app('db');
        $model = new Stage;
        $sql = $db->table('stage')
                ->where('level', $level)->get();
        return $sql;
    }
}

if (!function_exists('english_stage_info')) {
    function english_stage_info(string $level)
    {
        $db = app('db');
        $model = new Stage;
        $sql = $db->table('english_stage')
                  ->where('level', $level)->get();
        return $sql;
    }
}

if (!function_exists('last_stage_info')) {
    function last_stage_info(string $level)
    {
        $db = app('db');
        $model = new Stage;
        $sql = $db->table('last_stages')
                  ->where('level', $level)->get();
        return $sql;
    }
}

if (!function_exists('main_info')) {
    function main_info(string $stagename)
    {
        $db = app('db');
        $model = new Stage;
        $sql = $db->table('main')
                ->where('stagename', $stagename)->get();
        return $sql;
    }
}

if (!function_exists('stage_array')) {
    function stage_array(int $stage_max)
    {
        $db = app('db');
        $model = new Stage;
        $sql = $db->table('stage')
                ->where('stage_id', '<=' , $stage_max)->get();
        $sql = json_decode(json_encode($sql), true);
        $sql = array_reverse($sql);
        return $sql;
    }
}

if (!function_exists('english_stage_array')) {
    function english_stage_array(int $stage_max)
    {
        $db = app('db');
        $model = new Stage;
        $sql = $db->table('english_stage')
                ->where('stage_id', '<=' , $stage_max)->get();
        $sql = json_decode(json_encode($sql), true);
        $sql = array_reverse($sql);
        return $sql;
    }
}

if (!function_exists('math_question')) {
    function math_question(string $level)
    {
        $db = app('db');
        $model = new Stage;
        $sql = $db->table('math_question')
                ->where('level', $level)->get();
        $array = [];
        for ($i=0; $i < 20; $i++) {
          $num = rand(0, 49);
          $dict_array = ["q"=> $sql[$num]->q, "a"=> $sql[$num]->a];
          array_push($array, $dict_array);
        }
        return $array;
    }
}

if (!function_exists('engQuestion')) {
    function engQuestion(string $stage)
    {
        $array = [];
        $db = app('db');
        $sql = $db->table('englishword')
                ->where('level', $stage)->get();
        $max = count($sql) - 1;
        for ($i=0; $i < $max+1; $i++) {
          $rand_array = randArray($i, 0, $max);
          $question = $sql[$rand_array[0]]->english;
          $answer = $sql[$rand_array[0]]->japanese;
          $dummy1 = $sql[$rand_array[1]]->japanese;
          $dummy2 = $sql[$rand_array[2]]->japanese;
          $dict_array = ["q"=> $question, "a"=> [$answer, $dummy1, $dummy2]];
          array_push($array, $dict_array);
        }
        return $array;
    }
}

if (!function_exists('lastQuestion')) {
    function lastQuestion()
    {
        $array = [];
        $db = app('db');
        $sql = $db->table('englishword')->get();
        $sql = json_decode(json_encode($sql), true);
        $sql_num = array_rand($sql, 50);

        $base_array = [];

        foreach ($sql_num as $key => $value) {
          array_push($base_array, $sql[$value]);
        }
        $max = count($base_array) - 1;
        for ($i=0; $i < $max+1; $i++) {
          $rand_array = randArray($i, 0, $max);
          $question = $base_array[$rand_array[0]]["english"];
          $answer = $base_array[$rand_array[0]]["japanese"];
          $dummy1 = $base_array[$rand_array[1]]["japanese"];
          $dummy2 = $base_array[$rand_array[2]]["japanese"];
          $dict_array = ["q"=> $question, "a"=> [$answer, $dummy1, $dummy2]];
          array_push($array, $dict_array);
        }
        return $array;
    }
}

if (!function_exists('randArray')) {
  function randArray(int $i, int $min, int $max) {
    $rand_array = [];
    array_push($rand_array, $i);
    while (count($rand_array) <= 2) {
      $dummy = rand($min, $max);
      if (in_array($dummy, $rand_array)) {
        continue;
      } else {
        array_push($rand_array, $dummy);
      }
    };
    return $rand_array;
  }
}

if (!function_exists('makeImageList')) {
  function makeImageList($path) {
    $atack_files = \File::files($path);
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

   return $atack_image_list;
  }
}

//["1-1"=>additionArray()]のような辞書を作成するhelper関数を定義する。








 ?>
