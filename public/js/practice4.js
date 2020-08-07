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
    '今日は面積の復習をやっていくよ',
    '三角形の面積は底辺x高さ÷2',
    '台形の面積は(上底+下底)x高さ÷2',
    '平行四辺形の面積は底辺x高さ',
    'ひし形の面積は対角線x対角線だったね！',
    '復習問題いくよ',
    'じゃあ実際に求めてみよう',
    'いいね',
    'いいね！じゃあ復習は終わりだ！',
    '頑張ったね！',
  ];

  var question = [
    {q: '三角形の面積', a:['面積は底辺x高さ÷2', '2/6', '1/3']},
    {q: '6/15を約分', a:['2/5', '3/10', '1/3']},
    {q: '12/18を約分', a:['2/3', '4/6', '6/9']},
    {q: '1/2と1/3を通分', a:['5/6', '2/3', '4/5']},
    {q: '1/3と1/4を通分', a:['7/12', '3/7', '2/5']},
    {q: '1/5と1/10を通分', a:['3/10', '5/10', '3/5']},
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
      if (nowserif === 9) {
        box.classList.remove('hidden');
        set();
        return;
      }
      if (nowserif === 14) {
        box.classList.remove('hidden');
        set();
        return;
      };
      // if (nowserif === 16) {
      //   box.classList.remove('hidden');
      //   set();
      //   return;
      // };
        nowserif += 1;
        hukidasi.textContent = '';
        setserif();
    });
  }

  function set() {
      questions[0].innerHTML = question[nowQuestion].q;
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
