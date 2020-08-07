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
    '今日は割り算と分数について考えていこう！',
    '割り算と分数の関係は次のような関係だね！',
    '△÷□ = △/□',
    'これを使って、問題をといてみよう！約分はしてね！',
    '次は分数と小数の関係についてやるよ！',
    '小数において、0.01が1/100、0.1が1/10だったね！',
    'じゃあ0.08はどうだろう?',
    '0.08は0.01×8なので1/100 × 8なので8/100だね！',
    'じゃあ問題をといていこう！約分はしてね！',
    '最後は今まで勉強してきたことを使って問題をとくよ！',
    '大小関係の問題や計算問題をとくから頑張って!',
    '最後の問題に行ってみよう！',
    '今日は終わり！頑張ったね！',
  ];

  var question = [
    {q: '10 ÷ 11 = ', a:['10/11', '5/11', '2/10']},
    {q: '2 ÷ 4 = ', a:['1/2', '2/4', '3/6']},
    {q: '3 ÷ 9 = ', a:['1/3', '3/6', '3/9']},
    {q: '7/100 = ', a:['0.07', '0.7', '0.007']},
    {q: '3/10 = ', a:['0.3', '0.03', '0.003']},
    {q: '0.23 =', a:['23/100', '23/10', '23/1000']},
    {q: '0.8 と 3/5 どっちがおおきい?', a:['3/5', '0.8', '同じ']},
    {q: '0.3 と 7/20  どっちがおおきい?', a:['7/20', '0.3', '同じ']},
    {q: '0.4 + 1/5 = ', a:['3/5', '2/5', '0.5']},
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
