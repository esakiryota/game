(function(){
  'use strict'
  var box = document.getElementById('box');
  var modal_message = document.getElementById('modal_message');
  var skill_cards = document.getElementsByClassName('skill_cards');

  box.addEventListener('click', function() {
    getGacha();
  })

  function setSkill() {
    var i;
    for ( i = 0; i < skill_cards.length; i++){
      skill_cards[i].addEventListener('click', function(){
        mask.innerHTML = `
        <div class="mask" style="width: 100vw; height: 100vh; background-color: rgba(0, 0, 0, 0.9); position: absolute; top: 0;"></div>
        <img id="explain_tmp" width="50%" src="${this.dataset.image}" style="position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        max-height: 300px;
        max-width: 400px;">
        <button id="back" style="position: fixed;
        top: 70%;
        left: 40%;
        transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        max-height: 300px;
        max-width: 400px;"
        >戻る</button>
        <button id="set" style="position: fixed;
        top: 70%;
        left: 60%;
        transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        max-height: 300px;
        max-width: 400px;"
        >セットする</button>
        `
        var skill_id = this.dataset.id;
        document.getElementById('back').addEventListener('click', function(){
          mask.innerHTML = "";
        });
        document.getElementById('set').addEventListener('click', function(){
          console.log(skill_id);
          setSkillAjax(skill_id);
        })
        console.log(this.dataset.image);

      })
    }
  }

  setSkill()

  function setSkillAjax(skill_id) {
    $(function(){
      console.log(skill_id);
    $.ajax({
      type: "get", //HTTP通信の種類
      url:`/set_skill`, //通信したいURL
      data: {'skill_id': skill_id, 'text': 'Ajax成功'},
      dataType: 'json'
    })
    .done((data)=>{
      console.log("成功");
      console.log(data);
      mask.innerHTML = "";
      location.reload();
    })
    .fail((error)=>{
      mask.innerHTML = "";
    })
  });
  }



  function getGacha() {
    mask.innerHTML = `
    <div class="mask" style="width: 100vw; height: 100vh; background-color: rgba(0, 0, 0, 0.9); position: absolute; top: 0;"></div>
    <img id="explain_tmp" width="50%" style="position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    max-height: 300px;
    max-width: 400px;">
    `
    var message_id = document.getElementById('explain_tmp');
    $(function(){
    $.ajax({
      type: "get", //HTTP通信の種類
      url:`/skill_gacha`, //通信したいURL
      dataType: 'json'
    })
    .done((data)=>{
      if (data["lack"]) {
        console.log("lack");
        no_majic_stone()
        setTimeout(hidden, 1000);
        return 0;
      }
      console.log(data)
      console.log(data.length)
      var data2 = data[0];
      boxAnimation(data[1], data[0], data[2]);
    })
    .fail((error)=>{
    })
  });
  }

  function no_majic_stone() {
    mask.innerHTML = "";
    mask.innerHTML = `
    <div class="mask" style="width: 100vw; height: 100vh; background-color: rgba(0, 0, 0, 0.9); position: absolute; top: 0;"></div>
    <p style="position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    max-height: 300px;
    max-width: 400px;
    color: white;"
    >魔物石が足りません!
    </p>
    `
  }

  var hidden = function() {
    mask.innerHTML = ""
  }



function showSkill(skill, skill_list) {
  mask.innerHTML = `
  <div class="mask" style="width: 100vw; height: 100vh; background-color: rgba(0, 0, 0, 0.9); position: absolute; top: 0;"></div>
  <div class="container" style="position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  max-height: 300px;
  max-width: 400px;">
    <div class="row">
    <div class="col-12">
      <div class="card mb-3" style="max-width: 540px;" id="charaA">
      <div class="row no-gutters">
      <div class="col-5">
        <img src="${skill["image"]}/${skill_list[4]}" style="position: relative; bottom: 0; left: 0; max-height: 200px; width: 100%; max-width: 200px;">
      </div>
      <div class="col-7">
        <div class="card-body">
          <h5 class="card-title">${skill["name"]}</h5>
          <p class="card-text">${skill["damage"]}のダメージ</p>
        </div>
      </div>
      </div>
      </div>
    </div>
    </div>
    <div class="row text-center">
      <div class="col-4"></div>
      <button class="col-4" id="back">戻る</button>
      <div class="col-4"></div>
    </div>
  </div>
  `
  backEvent()
}

function  backEvent(){
  var back = document.getElementById('back');
  back.addEventListener('click', function() {
    mask.innerHTML = ""
    location.reload();
  })
}

function boxAnimation(box_images, skill, skill_list) {
  var i = 0;
  var animation = setInterval(function() {
    explain_tmp.src = `/img/parts/box/${box_images[i]}`
    i++;
    if (i === 13) {
      clearInterval(animation);
      explain_tmp.remove();
      showSkill(skill, skill_list);
    }
  }, 100);
  return true;
}

  })();
