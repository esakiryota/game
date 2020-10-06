<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_info;
use Auth;

class DataController extends Controller
{
    public function index() {
      return view('hello.account');
    }

    public function store(Request $request) {
      $user_info = new User_info;
      $user = Auth::user();
      $email = $user->email;
      $user_info->name = $request->name;
      $user_info->level = 1;
      $user_info->atack = 50;
      $user_info->defense = 50;
      $user_info->character = $request->character;
      $user_info->experience = 0;
      $user_info->email = $email;
      $user_info->save();
      app('db')->table('user_stage')->insert(['email'=>$email, 'math'=>'1', 'english'=>'1']);
      return redirect('/math');
    }
}
