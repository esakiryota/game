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
    '今日はわりあいについて考えていこう',
    'まず、割合について覚えておきたいものがあるね',
    '割合、歩合、百分率があるね！',
    'たとえば割合が1の時、歩合が10割',
    '百分率が100%だね。じゃあ問題行ってみよう！',
    '●の▲割は■ という問題の時、',
    '●×▲=■ になるね！',
    'これを使って次の問題行ってみよう！',
    '次は今まで学んできたことの複合問題をといてみよう！',
    '最後の問題に行ってみよう！',
    '今日は終わり！頑張ったね！',
  ];

  var question = [
    {q: '割合が0.5 百分率は？', a:['50%', '5%', '0.5%']},
    {q: '百分率が10% 割合は？', a:['0.1', '1', '10']},
    {q: '歩合が7割 百分率は？', a:['70%', '7%', '0.7%']},
    {q: '10人のクラスで女子の割合が0.4 女子の人数', a:['4人', '40人', '8人']},
    {q: 'クラスの女子は4人 割合は0.2 クラスの人数', a:['20人', '40人', '10人']},
    {q: '10人のクラスで3人が女子 女子の割合', a:['0,3', '0,03', '3']},
    {q: '10人のクラスの40%が男子 男子の人数', a:['4人', '2人', '40人']},
    {q: '100mlのジュースの5mlが果汁 果汁何パーセント？', a:['5%', '50%', '0.5%']},
    {q: '30人もクラスの10%が女子 男子は？', a:['27人', '3人', '30人']},
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
      if (nowserif === 13) {
        display.submit();
      };
      if(nowserif === serif.length-1){
        return;
      }
      if (hukidasi.textContent !== serif[nowserif] ) {
        return;
      }
      if (nowserif === 7) {
        box.classList.remove('hidden');
        set();
        return;
      }
      if (nowserif === 10) {
        box.classList.remove('hidden');
        set();
        return;
      };
      if (nowserif === 11) {
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
