@extends('layouts.last')
@section('js')
<script>
(function(){
  'use strict'

  var question = document.getElementById('question')
  var answer1 = document.getElementById('answer1');
  var answer2 = document.getElementById('answer2');
  var answer3 = document.getElementById('answer3');
  var timer = document.getElementById('timer');
  var afuro = document.getElementById('afuro');
  var meter = document.getElementById('meter');
  var image = document.getElementById('image');
  var majic_image = document.getElementById('majic_image');
  var bone = document.getElementById('bone');
  var judge = document.getElementById('judge');
  var display = document.getElementById('display');
  var answers = document.getElementsByClassName('answers');
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
    }, 3)
  }

  afuro.src = stage_image.value;

  var questions = @json($question_array);
  var questions_count = questions.length;

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

  var correctQuestion = shuffle(questions);

  var hidden = function() {
    image.classList.add('hidden');
    afuro.classList.remove('buruburu');
    set();
  };

  function set(){
  question.textContent = correctQuestion[nowQuestion].q;
  var shufflequestions;
  shufflequestions = shuffle(correctQuestion[nowQuestion].a.slice());
  answer1.textContent = shufflequestions[0];
  answer2.textContent = shufflequestions[1];
  answer3.textContent = shufflequestions[2];
  }

  function Answer(){
    var i;
    for ( i = 0; i <= 2; i++){
      answers[i].addEventListener('click', function(){
        check(this);
      })
    }
  }

  function check(node){
    if (life < 1) {
      return;
    }
    if (node.textContent === correctQuestion[nowQuestion].a[0]){
      score += 10
      setTimeout(meter, 500, level1);
      image.classList.remove('hidden');
      judge.classList.remove('hidden');
      afuro.classList.add('buruburu');
      nowQuestion += 1;
    } else {
      enemyAtack();
      nowQuestion += 1;
    };
    if (life > 1) {
      setTimeout(hidden, 500);
      if (nowQuestion === questions_count-1) {
        nowQuestion = 0;
      };
    } else {
      setTimeout(function() {
        timer.textContent = "";
        image.classList.add('hidden0');
        afuro.classList.remove('buruburu');
        bone.classList.remove('hidden');
        meter.classList.add('hidden0');
        afuro.classList.add('hidden0');
        majic_image.classList.add('hidden0');
        majic_icon.classList.add('hidden0');
      }, 1000);
    }
  }
  var timer_ber = 100;
  var timer_per = 100/en;
  var timer_red = 0;
  var timer_blue = 255;
  var timer_color_per = 255/(en*10);
  $('#timer').css('background-color', `rgba(${timer_red}, 0, ${timer_blue}, 1)`);

  var modal_1 = document.getElementById('modal_1');
  var modal_2 = document.getElementById('modal_2');

  var i = 0;

  function Timer2() {
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
  var atack_image_list = @json($atack_image_list);
  function majicDamage() {
    majic_icon.addEventListener('click', function() {
      if (majic_icon.classList.contains('hidden')) {
        return;
      };
      setTimeout(meter, 50*atack_image_list.length, damager)
      majic_icon.classList.add('hidden');
      afuro.classList.add('buruburu');

      var long = atack_image_list.length;
      var l = 1;

      var animation_timer = setInterval(function(){
        var pre_id = atack_image_list[l-1]
        var id = atack_image_list[l]
        if (l >= atack_image_list.length-1) {
          $(`#atack_${l}`).removeClass('hidden');
          clearInterval(animation_timer);
        }
        $(`#atack_${l-1}`).addClass('hidden');
        $(`#atack_${l}`).removeClass('hidden');
        l++;
      }, 50)

      setTimeout(function() {
        majic_image.classList.add('hidden');
        afuro.classList.remove('buruburu');
      }, 50*atack_image_list.length);
    })
  }

  var image_list = @json($image_list);

  function enemyAtack() {
    $('#enemy_atack').removeClass('hidden0');
    var l = 1;
    var long = image_list.length;

    var animation_timer = setInterval(function(){
      var pre_id = image_list[l-1]
      var id = image_list[l]
      if (l >= image_list.length-1) {
        $(`#${l}`).removeClass('hidden');
        clearInterval(animation_timer);
      }
      $(`#${l-1}`).addClass('hidden');
      $(`#${l}`).removeClass('hidden');
      l++;
    }, 50)
    var j = 0;
    var timerId = setInterval(function(){
      j++;
      var opa = 0.9 - j/long;
      $('#enemy_atack').css('background-color', `rgba(255, 0, 0, ${opa})`);
      if(j > long) {
        clearInterval(timerId);
        $('#enemy_atack').addClass('hidden0');
        timer_ber = timer_ber - 18;
        i += en/5
        $('#timer').width(`${timer_ber}%`);
      }
    }, 100)
  }

  set();
  Answer();
  majicDamage();
  register();
  window.onload = Timer2;
  // Timer2();
})();
</script>
@endsection
@section('form')
  <form action="/last/1-1" method="post" id="display">
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
