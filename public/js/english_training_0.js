(function(){
  'use strict'

  var answers = document.getElementsByClassName('answers');
  var question = document.getElementsByClassName('question');
  var solves = document.getElementsByClassName('solves');
  var displayq = document.getElementsByClassName('displayq');
  var conteiner = document.getElementById('conteiner');
  var judge = document.getElementById('judge');
  var btn = document.getElementById('btn');
  var start = document.getElementById('start');
  var main = document.getElementById('main');
  var bigin = document.getElementById('bigin');

  var quiz = [
  {q:'thank you1', a:['ありがとう', 'さようなら', 'こんばんわ'], s:'ありがとう', st:1},
  {q:'thank you2', a:['ありがとう', 'さようなら', 'こんばんわ'], s:'ありがとう', st:1},
  {q:'thank you3', a:['ありがとう', 'さようなら', 'こんばんわ'], s:'ありがとう', st:1},
  {q:'thank you4', a:['ありがとう', 'さようなら', 'こんばんわ'], s:'ありがとう', st:1},
  {q:'thank you5', a:['ありがとう', 'さようなら', 'こんばんわ'], s:'ありがとう', st:1},
  {q:'thank you6', a:['ありがとう', 'さようなら', 'こんばんわ'], s:'ありがとう', st:1},
  {q:'thank you7', a:['ありがとう', 'さようなら', 'こんばんわ'], s:'ありがとう', st:1},
  {q:'thank you8', a:['ありがとう', 'さようなら', 'こんばんわ'], s:'ありがとう', st:1},
  {q:'thank you9', a:['ありがとう', 'さようなら', 'こんばんわ'], s:'ありがとう', st:1},
  {q:'thank you10', a:['ありがとう', 'さようなら', 'こんばんわ'], s:'ありがとう', st:1}
];

var nowQuestion = 0;
var remembercount = 0;
var audioElem;

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
};


  var quizes = quiz;


  function set(arr) {
    if (nowQuestion === quizes.length) {
      nowQuestion = 0;
      start.classList.toggle('hidden');
      main.classList.toggle('hidden');
      set(arr);
    }
    if (remembercount === 10) {
      alert('終了')
      location.reload();
      return;
    }
    if (arr[nowQuestion].st === 0) {
      nowQuestion += 1;
      set(arr);
    } else {
      question[0].textContent = arr[nowQuestion].q;
      var shufflequestions;
      shufflequestions = shuffle(arr[nowQuestion].a);
      answers[0].textContent = shufflequestions[0];
      answers[1].textContent = shufflequestions[1];
      answers[2].textContent = shufflequestions[2];
    }
  }

  function check() {
    var i;
    for ( i = 0; i <= 2; i++){
      answers[i].addEventListener('click', function(){
        judge.classList.remove('hidden');
        if (this.textContent === quizes[nowQuestion].s) {
          new Audio('correctsound.mp3').play();
          judge.textContent = '○';
          remembercount += 1;
          quizes[nowQuestion].st = 0;
          del();
          display();
        } else {
          new Audio('wrongsound.mp3').play();
          judge.textContent = 'X';
        }
        setTimeout(function() {
        judge.classList.add('hidden');
        nowQuestion += 1;
        set(quizes);
        },250);
      })
    }
  }

  function display() {
    var i;
    for ( i = 0; i <= quizes.length-1; i++){
      if (quizes[i].st === 0) {
        continue;
      }
      var div = document.createElement('div');
      div.innerHTML = '<div class="row my-2"><div class="displayq col text-center">' + quizes[i].q + '</div><div class="displaya col text-center">' + quizes[i].s + '</div></div>';
      conteiner.insertBefore(div, conteiner.firstChild);
    }
  }

  function del() {
    while (conteiner.firstChild) {conteiner.removeChild(conteiner.firstChild)};
  }

  function action() {
    btn.addEventListener('click', function() {
      conteiner.classList.toggle('hidden');
    })
  }
  function biginaction() {
    bigin.addEventListener('click', function() {
      main.classList.toggle('hidden');
      start.classList.toggle('hidden');
    })
  }

  function hidden() {
    check.classList.add('hidden');
  };




  action()
  set(quizes);
  check();
  display();
  biginaction();

})();
