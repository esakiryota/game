@extends('layouts.english_pra')
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

  // afuro.src = stage_image.value;

  var questions = @json($question_array);

  console.log(questions);

  var ex = questions.length

  $('#stage_experiment').val(ex);

  console.log($('#stage_experiment').val());

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
    // image.classList.add('hidden');
    // afuro.classList.remove('buruburu');
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
    for ( i = 0; i <= 3; i++){
      if(navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/i)){
        answers[i].addEventListener('touchstart', function(){
          console.log("start");
          $("#correct_answer").fadeIn();
          check(this);
        })
        answers[i].addEventListener('touchend', function(){
          console.log("end");
          $("#correct_answer").fadeOut();
          nextQ()
        })
         } else {
           answers[i].addEventListener('mousedown', function(){
             console.log("start");
             $("#correct_answer").fadeIn();
             check(this);
           })
           answers[i].addEventListener('mouseup', function(){
             console.log("end");
             $("#correct_answer").fadeOut();
             nextQ()
           })
        }
    }
  }

  var correct_answer = document.getElementById('correct_answer');
  var modal = document.getElementById('modal');
  var correct_questions = [];

  var returnhome = function() {
    display.submit();
  }

  var blue = 255;
  var red = 0;
  var color_per = 255/life;
  $('#meter2').css('background-color', `rgba(${red}, ${blue}, 0, 1)`);
  $('#meter2').width('30%');
  var timer_bar = 0;

  var meter = function meterfunc (dar){
    var timerId2 = setInterval(function(){
      dar--;
      if (dar < 0) {
        clearInterval(timerId2);
      }
      timer_bar += 1;
      $('#timer').width(`${timer_bar}%`);
      $('#timer').css('background-color', `rgba(255, 0, 255, 1)`);
    }, 3)
  }

  var dar = 100/ex;

  console.log("dar");

  function check(node){
    if (life < 1) {
      return;
    }
    if (node.textContent === correctQuestion[nowQuestion].a[0]){
      $('#correct_answer').text(correctQuestion[nowQuestion].a[0])
      correct_questions.push(nowQuestion);
      console.log(correct_questions);
      setTimeout(meter, 500, dar);
      nowQuestion += 1;
    } else {
      $('#correct_answer').text(correctQuestion[nowQuestion].a[0])
      nowQuestion += 1;
    };
    // setTimeout(hidden, 500);
  }

  function nextQ() {
    var questions_count = questions.length;
    console.log(questions_count);
    if (nowQuestion === questions_count) {
      nowQuestion = 0;
      modal.click()
      wrongQuestions()
    };
    var questions_count_judge = questions.length;
    if (questions_count_judge === 0) {
      modal.click()
      $('#clear_modal').append(`終了`);
      setTimeout(returnhome, 1000);
    }
    hidden();
  }





  function wrongQuestions() {
    var i = 0;
    correct_questions.forEach(function( value ) {
     value -= i;
     questions.splice(value, 1);
     i += 1;
   });
   correct_questions.length = 0;
   questions.forEach(function( value ) {
    $('#clear_modal').append(`<p>${value.q}: ${value.a[0]}</p>`);
  });
  }

  function reset() {
    $("#rem_btn").on("click", function(){
      $("#clear_modal").empty();
    });
  }

  reset();

  var modal_1 = document.getElementById('modal_1');
  var modal_2 = document.getElementById('modal_2');



  var ko_spa = document.getElementById('ko_spa');
  var bo_spa = document.getElementById('bo_spa');
  var ex_spa = document.getElementById('ex_spa');
  var next_btn = document.getElementById('next_btn');

  set();
  Answer();
})();
</script>
@endsection
@section('form')
  <form action="/english/practice" method="post" id="display">
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
