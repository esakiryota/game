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
    '今日は速さについて考えていこう！',
    '速さ＝距離÷時間 だったね！',
    'この時注意しなければいけないことが、単位だね！',
    '例えば、3kmを3分で入る車の速さは、',
    '3÷3で分速1kmだね！',
    'さあ、問題をといていこう！',
    '次は速さ以外を求めるよ！',
    '距離＝速さ×時間、時間＝距離÷速さ だったね！',
    'じゃあ問題をといていこう！',
    '最後は単位の変換について教えるよ！',
    '例えば、時速180kmの新幹線の分速は、',
    '1時間＝60分だから60分で180km走るので',
    '1分だと180÷60=3km走るよ！',
    '最後の問題に行ってみよう！',
    '今日は終わり！頑張ったね！',
  ];

  var question = [
    {q: '4kmを2分で走る 速さは？', a:['分速2km', '分速6km', '分速8km']},
    {q: '50mを10秒で走る 速さは？ ', a:['秒速5m', '秒速40m', '分速5m']},
    {q: '10kmを1時間で走る 速さは？', a:['時速10km', '分速10km', '分速10m']},
    {q: '分速40mで2分走る 距離は？', a:['80m', '20m', '38m']},
    {q: '時速20kmで1時間走る', a:['20km', '10km', '40km']},
    {q: '距離50km を時速10km 時間は？', a:['5時間', '500時間', '5分']},
    {q: '分速20m 秒速何m？', a:['1200', '200', '400']},
    {q: '時速20km 分速何km？', a:['1200', '300', '400']},
    {q: '時速100km 分速何km？', a:['6000', '2000', '500']},
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
