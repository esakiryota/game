(function(){
  'use strict'

  var hukidasi = document.getElementById('hukidasi');
  var tmp = document.getElementById('tmp');
  var display = document.getElementById('display');
  var mask = document.getElementById('mask');

  mask.textContent = "OK"

  var serif = null;

  $(function(){
  $.ajax({
    type: "get", //HTTP通信の種類
    url:'/messageData', //通信したいURL
    dataType: 'json'
  })
  .done((data)=>{
    console.log(data)
    console.log(data.length)
    serif = data;
  })
  .then((serif)=>{
    setserif()
  })
  .fail((error)=>{
    console.log(error.statusText)
  })
});




  var moji = [];
  var nowserif = 0;
  var len;

  function setserif() {
    len = serif[nowserif].message.length;
    var i = 0;
    var str = serif[nowserif].message;
    setInterval(function() {
      var hitomoji = str.substr(i, 1);
      hukidasi.textContent += hitomoji;
      i += 1;
      if (i === len-1) {
        clearInterval();
      };
    }, 50);
    if (serif[nowserif].image !== "") {
      tmp.src = serif[nowserif].image;
      tmp.classList.add('w-50');
      tmp.classList.add('border');
    } else {
      tmp.src = "";
    }
  }

  function btn() {
    hukidasi.addEventListener('click', function() {
      if (nowserif === serif.length-1) {
        display.submit();
      };
      if(nowserif === serif[nowserif].message.length-1){
        return;
      }
      if (hukidasi.textContent !== serif[nowserif].message ) {
        return;
      }
        nowserif += 1;
        hukidasi.textContent = '';
        setserif();
    });
  }
  btn()
})();
