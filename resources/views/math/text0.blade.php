@extends('layouts.math')
@section('js')
<script src="https://www.gstatic.com/firebasejs/6.5.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-firestore.js"></script>
<!-- <script src="/js/text0.js"> -->
</script>
<script>
(function(){
  console.log(1);
  'use strict'
  var okbtn = document.getElementById('okbtn');
  var result = document.getElementById('result');
  var answer = document.getElementById('answer');
  var judge = document.getElementById('judge');
  var vanish = document.getElementById('vanish');
  var lastScore = document.getElementById('lastScore');
  var timer = document.getElementById('timer');
  var input = document.getElementById('input');
  var display = document.getElementById('display');
  var image = document.getElementById('image');
  var afuro = document.getElementById('afuro');
  var meter = document.getElementById('meter');
  var bone = document.getElementById('bone');
  var question = document.getElementById('question');
  var majic_icon = document.getElementById('majic_icon');
  var majic_image = document.getElementById('majic_image');
  var answers = document.getElementsByClassName('answers');
  var correct = document.getElementsByClassName('correct');
  var wrong = document.getElementsByClassName('wrong');
  var solves = document.getElementsByClassName('solves');
  var kill = document.getElementsByClassName('kill');
  var input_atack = document.getElementById('input_atack');
  var input_damage = document.getElementById('input_damage');
  var input_defense = document.getElementById('input_defense');
  var input_experiense = document.getElementById('input_experiense');
  var input_character = document.getElementById('input_character');
  var input_image = document.getElementById('input_image');
  var stage_image = document.getElementById('stage_image');
  var stage_atack = document.getElementById('stage_atack');
  var stage_defense = document.getElementById('stage_defense');
  var stage_experiment = document.getElementById('stage_experiment');
  var stage_life = document.getElementById('stage_life');

  var nowQuestion = 0;
  var score = 0;
  var level = input_experiense.value
  var level1 = Number(input_atack.value)
  var en = Number(input_defense.value)
  var life = Number(stage_life.value);
  // var life = 300;
  var damager = input_damage.value
  var url = input_image.value
  var kou = stage_atack.value
  var bou = stage_defense.value

  var questions = @json($question_array)

  console.log(questions);
  var charactor = input_character.value;

  var percentage = 30/life;

  console.log(charactor);
  console.log(damager);

  var blue = 255;
  var red = 0;
  var color_per = 255/life;
  $('#meter2').css('background-color', `rgba(${red}, ${blue}, 0, 1)`);
  $('#meter2').width('30%');

  var meter = function meterfunc (dar){
    var timerId2 = setInterval(function(){
      dar--;
      if (dar === 0) {
        clearInterval(timerId2);
      };
      life = life - 1;
      blue = blue - color_per;
      red = red + color_per;
      var wid = life*percentage;

      $('#meter2').css('background-color', `rgba(${red}, ${blue}, 0, 1)`);
      $('#meter2').width(`${wid}%`);
    }, 10)
  }

  afuro.src = stage_image.value;


  function shuffle(arr){
    var i;
    var j;
    var tmp;
    for (i = arr.length - 1; i >= 0; i--){
      j = Math.floor(Math.random() * (i + 1));
      tmp = arr[i];
      arr[i] = arr[j];
      arr[j] = tmp;
    }
    return arr;
  }

  function set(number){
  var shufflequestions;
  shufflequestions = questions;
  question.innerHTML = shufflequestions[number].q;
  }

  var hidden = function() {
    image.classList.add('hidden');
    afuro.classList.remove('buruburu');
    set(nowQuestion);
  }

  function vanishAction() {
    vanish.addEventListener('click', function() {
      var str = answer.textContent;
      var a = str.slice(0, -1);
      answer.textContent = a;
    })
  }

  function btnAction() {
    okbtn.addEventListener('click', function() {
      if (answer.textContent === questions[nowQuestion].a) {
        setTimeout(meter, 500, level1);
        image.classList.remove('hidden');
        afuro.classList.add('buruburu');
        if (nowQuestion === 18) {
          nowQuestion = 0;
        }
      } else {
        if (nowQuestion === 18) {
          nowQuestion = 0;
        }
      }
      nowQuestion += 1;
      answer.textContent = "";
      setTimeout(hidden, 500);
    })
  }

  function Answer(){
    if (life < 1) {
      return;
    }
    var i;
    for ( i = 0; i <= 9; i++){
      answers[i].addEventListener('click', function(){
      answer.textContent += this.textContent;
      })
    }
  }

  var timer_ber = 90;
  var timer_per = 90/en;
  var timer_red = 0;
  var timer_blue = 255;
  var timer_color_per = 255/(en*10);
  $('#timer').css('background-color', `rgba(${timer_red}, 0, ${timer_blue}, 1)`);

  var modal_1 = document.getElementById('modal_1');
  var modal_2 = document.getElementById('modal_2');

  function Timer2() {
    var i = 0;
    var timerId2 = setInterval(function(){
      i+=0.1;
      // timer.textContent = en - i;
      timer_red = timer_red + timer_color_per;
      timer_blue = timer_blue +-timer_color_per;
      timer_ber = timer_ber - timer_per/10;
      $('#timer').width(`${timer_ber}%`);
      $('#timer').css('background-color', `rgba(${timer_red}, 0, ${timer_blue}, 1)`);
      if (i > en){
        clearInterval(timerId2);
        modal_1.classList.add('hidden0');
        bone.click();
        afuro.classList.add('hidden')
        answer.textContent = "";
        score = 0;
        i = 0;
      };
      if (life < 1) {
        bone.classList.remove('hidden');
        afuro.classList.add('hidden');
        clearInterval(timerId2);
        timer.innerHTML = "";
        answer.innerHTML = "";
        majic_icon.classList.add('hidden');
        input.setAttribute('value', score);
      };
    }, 100)
  };

  function Replay() {
    timer.addEventListener('click', function() {
      if (life < 1) {
        location.reload();
        scrollTo(0, 0);
      } else {
        return;
      };
    })
  }

  var ko_spa = document.getElementById('ko_spa');
  var bo_spa = document.getElementById('bo_spa');
  var ex_spa = document.getElementById('ex_spa');
  var next_btn = document.getElementById('next_btn');

  function register() {
    bone.addEventListener('click', function() {
      if (life < 1) {
        modal_2.classList.add('hidden0');
        ko_spa.textContent = kou;
        bo_spa.textContent = bou;
        ex_spa.textContent = stage_experiment.value;
      } else {
        return;
      }
    })
    next_btn.addEventListener('click', function() {
      display.submit();
    })
  };

  function majicDamage() {
    majic_icon.addEventListener('click', function() {
      if (majic_icon.classList.contains('hidden')) {
        return;
      };
      setTimeout(meter, 1000, damager)
      majic_icon.classList.add('hidden');
      afuro.classList.add('buruburu');
      majic_image.innerHTML = `<img src=${url} class='w-50'>`;
      setTimeout(function() {
        majic_image.classList.add('hidden');
        afuro.classList.remove('buruburu');
      }, 1000);
    })
  }

  btnAction();
  set(0);
  Answer();
  vanishAction();
  Timer2();
  Replay();
  register();
  majicDamage();
  })();
</script>
@endsection
@section('form')
  <form action="/math/1-1" method="post" id="display">
    {{ csrf_field() }}
  <input id="input" type="hidden" name="score">
  <input id="input_damage" type="hidden" name="damage" value="{{$damage}}">
  <input id="input_atack" type="hidden" name="atack" value="{{$sql[0]->atack}}">
  <input id="input_defense" type="hidden" name="defense" value="{{$sql[0]->defense}}">
  <input id="input_experiense" type="hidden" name="experience" value="{{$sql[0]->experience}}">
  <input id="input_character" type="hidden" name="chara" value="{{$sql[0]->character}}">
  <input id="input_image" type="hidden" name="url" value="{{$image}}">
  <input id="stage_atack" type="hidden" name="stage_atack" value="{{$stage_lv[0]->atack}}">
  <input id="stage_defense" type="hidden" name="stage_defense" value="{{$stage_lv[0]->defense}}">
  <input id="stage_image" type="hidden" name="stage_image" value="{{$stage_lv[0]->image}}">
  <input id="stage_experiment" type="hidden" name="stage_experiment" value="{{$stage_lv[0]->experiment}}">
  <input id="stage_life" type="hidden" name="stage_life" value="{{$stage_lv[0]->life}}">
  <input id="stage_id" type="hidden" name="stage_id" value="{{$stage_lv[0]->stage_id}}">
</form>
@endsection
