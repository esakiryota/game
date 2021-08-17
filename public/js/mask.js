(function(){
  'use strict'
  var mask = document.getElementById('mask');
  var message_id = document.getElementById('message_id');
  var masks = document.getElementsByClassName('mask');

  mask.innerHTML = `
  <img id="explain_tmp" width="50%" style="position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  max-height: 300px;
  max-width: 400px;">
  <div class="container" style="position: fixed; bottom: 0; left: 0;">
    <div class="row">
      <div class="col-12">
        <!-- <div class="card" style="height: 6rem;">
          <div class="card-body" id="hukidasi" style="font-family: 'Myfont'; color: black;"></div>
        </div> -->
        <img src="/img/parts/text_box.png" style="width: 90vw; height: 20vh;" id="card">
        <p style="
        color: white;
        position: absolute;
        top: 10%;
        left: 10%;
        right: 10%"
        >
        アーサー
        </p>
        <p id="hukidasi" style="
        color: white;
        position: absolute;
        top: 40%;
        left: 10%;
        right: 10%"
        ></p>
            <img src="/img/face2.png" style="position: absolute; top: -10vh; right: 10%; height: 15vh">
      </div>
      <!-- <div class="col-2"><img src="/img/face2.png" class="" width="80px" height="80px"></div> -->
    </div>
  </div>
  `

  var hukidasi = document.getElementById('hukidasi');
  var explain_tmp = document.getElementById('explain_tmp');
  var display = document.getElementById('display');
  var card = document.getElementById('card');
  var audio = document.getElementById('audio');
  var message_sound = new Audio("/sound/system_sounds/messages.mp3");
  var click_sound = new Audio("/sound/system_sounds/click2.mp3");
  message_sound.preload = "auto";
  message_sound.load();
  message_sound.loop = true;

  var click_audio = document.getElementsByClassName('click_audio');

  for (var i = 0; i < click_audio.length; i++) {
    click_audio[i].addEventListener('click', function() {
      click_sound.play();
    })
  }




  var serif = null;

  $(function(){
  $.ajax({
    type: "get", //HTTP通信の種類
    url:`/messageData/${message_id.value}`, //通信したいURL
    dataType: 'json'
  })
  .done((data)=>{
    console.log(data)
    console.log(data.length)
    serif = data;
  })
  .then((serif)=>{
    setserif();
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
        message_sound.pause();
        message_sound.currentTime = 0;
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
    card.addEventListener('click', function() {
      if (nowserif === serif.length-1) {
        for (var i = 0; i < masks.length; i++) {
          message_sound.pause();
          message_sound.currentTime = 0;
          masks[i].remove();
        }
        return;
      };
      if(nowserif === serif[nowserif].message.length-1){
        return;
      }
      if (hukidasi.textContent !== serif[nowserif].message ) {
        return;
      }
      message_sound.play();
      nowserif += 1;
      hukidasi.textContent = '';
      setserif();
    });
  }
  btn()
})();
