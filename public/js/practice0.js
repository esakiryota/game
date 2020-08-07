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
    '2で割れる数が奇数、',
    '2で割れない数が偶数だったね',
    'じゃあ復習問題いいくよ',
    'ある整数を整数倍して得られる数は',
    '倍数って言うんだったね',
    'いくつかの整数に共通してる数を',
    '公倍数って言うんだったね',
    'じゃあ問題いくよ！',
    '公倍数で一番小さい数を',
    '最小公倍数って言うんだね！',
    'じゃあ問題いくよ！',
    'いいね！じゃあ復習は終わりだ！',
    '頑張ったね！'
  ];

  var question = [
    {q: '2', a:['偶数', '奇数', 'どちらでもない']},
    {q: '13', a:['奇数', '偶数', 'どちらでもない']},
    {q: '137', a:['奇数', '偶数', 'どちらでもない']},
    {q: '3と5の公倍数として正しいもの', a:['15', '12', '25']},
    {q: '4と11の公倍数として正しいもの', a:['44', '16', '33']},
    {q: '8と16の公倍数として正しいもの', a:['16', '24', '32']},
    {q: '4と5の最小公倍数は？', a:['20', '40', '60']},
    {q: '3と7の最小公倍数は？', a:['21', '42', '63']},
    {q: '5と12の最小公倍数は？', a:['60', '120', '180']},
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
      if (nowserif === 15) {
        display.submit();
      };
      if(nowserif === serif.length-1){
        return;
      }
      if (hukidasi.textContent !== serif[nowserif] ) {
        return;
      }
      if (nowserif === 5) {
        box.classList.remove('hidden');
        set();
        return;
      }
      if (nowserif === 10) {
        box.classList.remove('hidden');
        set();
        return;
      };
      if (nowserif === 13) {
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
