<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User_info;
use App\User_tech;
use App\User_chara;
use Auth;

class DanjonController extends Controller
{

  public function danjon1(Request $request) {
    $url = user_chara()[0]->image;
    $tech = user_tech()[0]->technique;
    $damage = user_tech()[0]->damage;
    $sql = user_info();
    $page = $_SERVER['REQUEST_URI'];
    $name = explode("/", $page);
    $stage_max = user_stage()[0][$name[1]];
    $stage = stage_array($stage_max);
    $main = main_info($name[1]);
    $user_ex = user_info()[0]->experience;
    $user_lv = user_info()[0]->level;
    $lv_ex = level_ex($user_lv);
    $ex_value = $user_ex/$lv_ex;


    return view('hello.danjon1', compact("sql", "url", "tech", "damage", "stage", "main", "ex_value", "stage_max"));
  }

  public function danjon2(Request $request) {
    $url = user_chara()[0]->image;
    $tech = user_tech()[0]->technique;
    $damage = user_tech()[0]->damage;
    $sql = user_info();
    $page = $_SERVER['REQUEST_URI'];
    $name = explode("/", $page);
    $stage_max = user_stage()[0][$name[1]];
    $stage = english_stage_array($stage_max);
    $main = main_info($name[1]);
    $user_ex = user_info()[0]->experience;
    $user_lv = user_info()[0]->level;
    $lv_ex = level_ex($user_lv);
    $ex_value = $user_ex/$lv_ex;


    return view('hello.danjon1', compact("sql", "url", "tech", "damage", "stage", "main", "ex_value", "stage_max"));
  }
}
