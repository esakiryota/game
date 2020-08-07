<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    //
    public function index() {
      return view('hello.index');
    }

    public function start() {
      return view('hello.start');
    }

    public function startmath() {
      return view('math.starttext');
    }

    public function startmathpost() {
      return redirect('/start');
    }

    public function startpractice() {
      return view('math.practice');
    }

    public function startpracticepost() {
      return redirect('/start');
    }

    public function startenglish() {
      return view('english.startenglish');
    }

    public function startenglishpost() {
      return redirect('/start');
    }

    public function parents() {
      return view('hello.parents');
    }

    public function explain() {
      return view('hello.explain');
    }

    public function explainpost() {
      return redirect('/start');
    }

    public function login() {
      return view('hello.login');
    }

    public function loginpost() {
      return redirect('/user');
    }

    public function create() {
      return view('hello.create');
    }

    public function createpost() {
      return redirect('/account');
   }

    public function account() {
      return view('hello.account');
    }

    public function accountpost() {
      return redirect('/user');
    }


    public function user() {
      return view('hello.user');
    }

    public function text0() {
      return view('math.text0');
    }

    public function entext0() {
      return view('english.text0');
    }

    public function text0post() {
      return redirect('/user/danjon1');
    }

    public function text1() {
      return view('math.text1');
    }

    public function text1post() {
      return redirect('/user');
    }
    public function text2() {
      return view('math.text2');
    }

    public function text2post() {
      return redirect('/user');
    }

    public function text3() {
      return view('math.text3');
    }

    public function text3post() {
      return redirect('/user');
    }

    public function text4() {
      return view('math.text4');
    }

    public function text4post() {
      return redirect('/user');
    }

    public function text5() {
      return view('math.text5');
    }

    public function text5post() {
      return redirect('/user');
    }

    public function practice0() {
      return view('practice.practice0');
    }

    public function practice0post() {
      return redirect('/user');
    }

    public function practice1() {
      return view('practice.practice1');
    }

    public function practice1post() {
      return redirect('/user');
    }

    public function practice2() {
      return view('practice.practice2');
    }

    public function practice2post() {
      return redirect('/user');
    }

    public function practice3() {
      return view('practice.practice3');
    }

    public function practice3post() {
      return redirect('/user');
    }
    public function practice4() {
      return view('practice.practice4');
    }

    public function practice4post() {
      return redirect('/user');
    }
    public function practice5() {
      return view('practice.practice5');
    }

    public function practice5post() {
      return redirect('/user');
    }
    public function practice6() {
      return view('practice.practice6');
    }

    public function practice6post() {
      return redirect('/user');
    }
    public function practice7() {
      return view('practice.practice7');
    }

    public function practice7post() {
      return redirect('/user');
    }
    public function practice8() {
      return view('practice.practice8');
    }

    public function practice8post() {
      return redirect('/user');
    }

    public function entext0post() {
      return redirect('/user/danjon2');
    }

    public function danjon1() {
      return view('hello.danjon1');
    }

    public function danjon2() {
      return view('hello.danjon2');
    }

    public function danjon3() {
      return view('hello.danjon3');
    }

    public function danjon4() {
      return view('hello.danjon4');
    }

    public function english_training_0() {
      return view('training.english_training_0');
    }

    public function move() {
      return view('hello.move');
    }
}
