(function(){
  'use strict'
  var hukidasi = document.getElementById('hukidasi');
  var tmp = document.getElementById('tmp');
  var display = document.getElementById('display');

  var serif = [
    'こんにちは！次に進むためにはここをたっちしてね！',
    '俺はアーサー！',
    'よろしくな！',
    '早速このゲームの説明をしていくよ！',
    '準備はいいかな？',
    'このゲームは算数を使って敵を倒すゲームだよ！',
    '敵を倒すたびに経験値がもらえるよ！',
    'この経験値がたまると、主人公のレベルが上がるよ！',
    'レベルが上がると進化するよ',
    '進化すると、使える技が強くなるよ！',
    'わざと頭を使って敵を倒そう！',
    '敵を倒すと、上のこんなのが敵から取れるよ！',
    'これをとってこうげき、ぼうぎょををあげよう！',
    '進めていくうちにどんどん敵が強くなっていくよ！',
    '敵が倒せないときは、訓練所で訓練しよう！',
    '訓練してからいくと敵が倒しやすくなってるよ！',
    'ラストのボスはとても強いから頑張って倒そう！',
    'ラストのボスを倒せたら、君はけんじゃだ！',
    '次にがめんの操作のせつめいをするね！',
    'がめんはこのようになっているよ！',
    'このもんだいだと、１をおして、２をおすと１２になるね！',
    'こたえをつくったらOKボタンをおそう！',
    'こたえがあっていれば、てきにこうげきだ！',
    'てきのたいりょくを０にしたら勝ちだ！',
    'わざは一回しかつかえないから気をつけてね！',
    '君はこれでたびにでれるようになった！',
    'さあ、冒険に出発だ！'
  ];

  var moji = [];
  var nowserif = 0;
  var len;

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
      if (nowserif === 26) {
        display.submit();
      };
      if(nowserif === serif.length-1){
        return;
      }
      if (hukidasi.textContent !== serif[nowserif] ) {
        return;
      }
      if (nowserif === 5) {
        tmp.src = "/img/gamen0.jpg";
        tmp.classList.add('w-50');
        tmp.classList.add('border');
      }
      if (nowserif === 10) {
        tmp.src = "/img/rotate-sord.gif";
        tmp.classList.add('w-50');
        tmp.classList.add('border');
      };
      if (nowserif === 17) {
        tmp.src = "/img/gamen2.jpg";
        tmp.classList.add('w-50');
        tmp.classList.add('border');
      };
        nowserif += 1;
        hukidasi.textContent = '';
        setserif();
    });
  }

  setserif();
  btn();
})();
