(function(){
  'use strict'
  var mask = document.getElementById('mask');

  mask.innerHTML = `
  <div style="width: 100vw; height: 100vh; background-color: rgba(0, 0, 0, 0.7); position: absolute; top: 0;"></div> 
  <div class="container my-5">
    <div class="row">
      <div class="col text-center"><img id="explain_tmp"></div>
    </div>
  </div>
  <div class="container  fixed-bottom my-2">
    <div class="row mr-2">
      <div class="col-10">
        <div class="card" style="height: 6rem;">
          <div class="card-body" id="hukidasi" style="font-family: 'Fira Sans'; color: black;"></div>
        </div>
      </div>
      <div class="col-2"><img src="/img/face2.png" class="" width="80px" height="80px"></div>
    </div>
  </div>
  `
  
  var hukidasi = document.getElementById('hukidasi');
  var explain_tmp = document.getElementById('explain_tmp');
  var display = document.getElementById('display');

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
      explain_tmp.src = serif[nowserif].image;
      explain_tmp.classList.add('w-50');
      explain_tmp.classList.add('border');
    } else {
      explain_tmp.src = "";
    }
  }

  function btn() {
    hukidasi.addEventListener('click', function() {
      if (nowserif === serif.length-1) {
        mask.remove();
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