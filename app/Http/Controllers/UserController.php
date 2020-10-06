<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User_info;
use App\User_tech;
use App\User_chara;
use Auth;

class UserController extends Controller
{

  protected $db;



  public function index(Request $request) {
    $this->db = app('db');
    $user_info = new User_info;
    $user_tech = new User_tech;
    $user_chara = new User_chara;
    $user = Auth::user();
    $email = $user->email;
    $sql = $this->db->table('user_info')
            ->where('email', $email)->get();
    $chara = $sql[0]->character;
    $level = $sql[0]->level;
    $experience = $sql[0]->experience;
    $url_sql = $this->db->table('user_chara')
            ->where('chara', $chara)->where('level', $level)->get();
    $tech_sql = $this->db->table('user_technique')
            ->where('user_feature', $chara)->where('level', $level)->get();

    $url = $url_sql[0]->image;
    $tech = $tech_sql[0]->technique;
    $damage = $tech_sql[0]->damage;
    return view('hello.user', compact("sql", "url", "tech", "damage"));
  }
}
