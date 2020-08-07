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
    '今日は単位量あたりの大きさについて勉強していこう！',
    '単位量あたりの大きさについて説明するよ。',
    '単位量＝１と考えることができるんだよ',
    'だから、例えば2Lで4m塗れるペンキは、単位量あたり、',
    '2m塗ることができるね！この時の式は、',
    '4m ÷ 2L = 2mとなるよ！じゃあ問題をといていこう！',
    '次は単位量あたりからの計算をしていくよ！',
    '例えば,1Lで3km走る車は2Lで6km走るね！',
    'この式は2L×3kmだね！',
    'じゃあ問題をといてみよう！',
    '最後に人口密度についての計算だ！',
    '人口密度＝面積 ÷ 人口 で求められるよ！',
    '最後に人口密度を求めよう！',
    '頑張ったね！',
  ];

  var question = [
    {q: '3Lで6km走る車 単位量あたり何km?', a:['2km', '1km', '0.5km']},
    {q: '4mが240円のリボン 単位量あたり何円？', a:['60円', '40円', '30円']},
    {q: '5本が100円のペン 単位量あたり何円?', a:['20円', '30円', '40円']},
    {q: '1Lあたり10km進む 3Lは何km? ', a:['30km', '3km', '50km']},
    {q: '1mが20円のリボン 4mは何円?', a:['80円', '5円', '24円']},
    {q: '1本30円の鉛筆 90円は何本?', a:['3本', '10本', '4本']},
    {q: '20平方m 5人 ', a:['4', '100', '25']},
    {q: '30平方m 6人', a:['5', '36', '180']},
    {q: '10平方m 5人', a:['2', '15', '50']},
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
      if (nowserif === 8) {
        box.classList.remove('hidden');
        set();
        return;
      }
      if (nowserif === 12) {
        box.classList.remove('hidden');
        set();
        return;
      };
      if (nowserif === 15) {
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
