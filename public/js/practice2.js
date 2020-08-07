(function(){
  'use strict'
  var hukidasi = document.getElementById('hukidasi');
  var tmp = document.getElementById('tmp');
  var display = document.getElementById('display');
  var answer1 = document.getElementById('answer1');
  var answer2 = document.getElementById('answer2');
  var answer3 = document.getElementById('answer3');
  var box = document.getElementById('box');
  var questions = document.getElementsByClassName('questions');
  var answers = document.getElementsByClassName('answers');
  var hidden = document.getElementsByClassName('hidden');

  var serif = [
    'こんにちは！次に進むためにはここをたっちしてね！',
    '私はローザ！よろしくね！',
    '今日は前の授業の復習からやっていくよ！',
    '約数というのは整数を作れる数だったね！',
    '例えば、８だったら1,2,4,8で',
    '全部の数が、何かをかけると8になるね！',
    'じゃあ復習問題いいくよ',
    '２つの整数の約数に共通している数を',
    '公約数と言ったね',
    'そして公約数の中で１番大きい物を',
    '最大公約数というんだよ',
    'じゃあ復習問題いってみよう',
    '約数がその数と１しかない場合、その数は',
    '素数って言うんだね！',
    'じゃあ問題いくよ！',
    'いいね！じゃあ復習は終わりだ！',
    '頑張ったね！'
  ];

  var question = [
    {q: '6の約数', a:['1,2,3,6', '1,2,3,4,6', '1,6']},
    {q: '12の約数', a:['1,2,3,4,6,12', '1,3,4,8,12', '1,2,6,7,12']},
    {q: '35の約数', a:['1,5,7,35', '1,35', '1,2,7,35']},
    {q: '6と3の最大公約数', a:['3', '1', '6']},
    {q: '14と21の最大公約数', a:['7', '2', '3']},
    {q: '12と18の最大公約数', a:['6', '3', '9']},
    {q: '素数は？', a:['2', '4', '6']},
    {q: '素数は？', a:['7', '6', '12']},
    {q: '素数は？', a:['11', '12', '18']},
  ];

  var moji = [];
  var nowserif = 0;
  var nowQuestion = 0;
  var len;
  var number = 3;


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

  function setserif() {
    len = serif[nowserif].length;
    var i = 0;
    var str = serif[nowserif];
    setInterval(function() {
      var hitomoji = str.substr(i, 1);
      hukidasi.textContent += hitomoji;
      i += 1;
      if (i === len-1) {
        clearInterval();
      };
    }, 50);
  }

  function btn() {
    hukidasi.addEventListener('click', function() {
      if (nowserif === 16) {
        display.submit();
      };
      if(nowserif === serif.length-1){
        return;
      }
      if (hukidasi.textContent !== serif[nowserif] ) {
        return;
      }
      if (nowserif === 6) {
        box.classList.remove('hidden');
        set();
        return;
      }
      if (nowserif === 11) {
        box.classList.remove('hidden');
        set();
        return;
      };
      if (nowserif === 14) {
        box.classList.remove('hidden');
        set();
        return;
      };
        nowserif += 1;
        hukidasi.textContent = '';
        setserif();
    });
  }

  function set() {
      questions[0].textContent = question[nowQuestion].q;
      var shufflequestions;
      shufflequestions = shuffle(question[nowQuestion].a.slice());
      answer1.textContent = shufflequestions[0];
      answer2.textContent = shufflequestions[1];
      answer3.textContent = shufflequestions[2];
  }

  var next = function() {
    set();
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
    if (node.textContent === question[nowQuestion].a[0]){
      hukidasi.textContent = 'いいね！次！';
      nowQuestion += 1;
    } else {
      hukidasi.textContent = '違うよもう一度！';
      setTimeout(next, 500);
      return;
    };
    if (nowQuestion%3 === 0) {
      setTimeout(function() {
        box.classList.add('hidden');
        nowserif += 1;
        hukidasi.textContent = '';
        setserif();
      }, 1000)
    };
    setTimeout(next, 500);
  }

  setserif();
  btn();
  Answer();
})();
