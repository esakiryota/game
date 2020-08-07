(function(){
  'use strict'
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyB84YJHi1zN7NONyZXv1cR23N57a-pYQkM",
    authDomain: "mytextproject-a29c0.firebaseapp.com",
    databaseURL: "https://mytextproject-a29c0.firebaseio.com",
    projectId: "mytextproject-a29c0",
    storageBucket: "mytextproject-a29c0.appspot.com",
    messagingSenderId: "690640792640",
    appId: "1:690640792640:web:49aadbb60574ca31"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  var question = document.getElementById('question')
  var answer1 = document.getElementById('answer1');
  var answer2 = document.getElementById('answer2');
  var answer3 = document.getElementById('answer3');
  var timer = document.getElementById('timer');
  var afuro = document.getElementById('afuro');
  var meter = document.getElementById('meter');
  var image = document.getElementById('image');
  var majic_image = document.getElementById('majic_image');
  var bone = document.getElementById('bone');
  var judge = document.getElementById('judge');
  var display = document.getElementById('display');
  var answers = document.getElementsByClassName('answers');



  var nowQuestion = 0;
  var score = 0;
  var level;
  var level1;
  var en;
  var life = 100;
  var damager;
  var db = firebase.firestore();
  var email;
  var charactor;

  var questions = [
    {q: '5 × 3 =', a:['15', '20', '25'], s:'正解は 15 '},
    {q: '10 × 5 =', a:['50', '60', '15'], s:'正解は 50'},
    {q: '11 × 10 =', a:['110', '11', '1100'], s:'正解は 110'},
    {q: '13 × 9 =', a:['117', '137', '107'], s:'正解は 117'},
    {q: '10 ÷ 2 =', a:['5', '4', '3'], s:'正解は 5'},
    {q: '24 ÷ 6 =', a:['4', '5', '6'], s:'正解は 4'},
    {q: '100 ÷ 20 =', a:['5', '10', '15'], s:'正解は 5'},
    {q: '56 ÷ 7 =', a:['8', '4', '6'], s:'正解は 8'},
    {q: '1/4 + 1 =', a:['5/4', '5/3', '3/4'], s:'正解は 5/4'},
    {q: '1/4 + 1/4 =', a:['2/4', '3/4', '1/4'], s:'正解は 2/4'},
    {q: '1/2 + 3/2 =', a:['4/2', '3/2', '2/4'], s:'正解は 4/2 '},
    {q: '1/5 + 3/5', a:['4/5', '3/5', '2/5?'], s:'正解は 4/5'},
    {q: '4 × 4 =', a:['16', '25', '36'], s:'正解は 16'},
    {q: '8 × 8 =', a:['64', '81', '36'], s:'正解は 64'},
    {q: '10 × 10 =', a:['100', '1000', '10'], s:'正解は 100'},
    {q: '12 × 12 =', a:['144', '169', '196'], s:'144'},
    {q: '2 + 2 =', a:['4', '5', '6'], s:'正解は 4'},
    {q: '27 + 34 =', a:['61', '51', '63'], s:'正解は 61?'},
    {q: '56 -36 =', a:['20', '10', '25'], s:'正解は 20'},
    {q: '120 - 47 =', a:['73', '77', '63'], s:'正解は 73'},
  ];

  var correctQuestion = shuffle(questions);

  firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
      // User is signed in.
      email = user.email;
      var userRef = db.collection("users").doc(email);
      userRef.get().then(function(doc) {
          if (doc.exists) {
              console.log("Document data:", doc.data().Lv);
              level = doc.data().exper;
              level1 = doc.data().mathLv;
              en = doc.data().englishLv;
              damager = doc.data().damage;
              charactor = doc.data().chara;
              // timer.textContent = en;
          } else {
              // doc.data() will be undefined in this case
              console.log("No such document!");
          }
      }).catch(function(error) {
          console.log("Error getting document:", error);
      });
    } else {
      // No user is signed in.
    }
  });

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

  var hidden = function() {
    image.classList.add('hidden');
    afuro.classList.remove('buruburu');
    judge.classList.add('hidden');
    judge.textContent = '';
    set();
  };

  function set(){
  question.textContent = correctQuestion[nowQuestion].q;
  var shufflequestions;
  shufflequestions = shuffle(correctQuestion[nowQuestion].a.slice());
  answer1.textContent = shufflequestions[0];
  answer2.textContent = shufflequestions[1];
  answer3.textContent = shufflequestions[2];
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
    if (life < 1) {
      return;
    }
    if (node.textContent === correctQuestion[nowQuestion].a[0]){
      score += 10
      life -= level1;
      judge.textContent = '○';
      image.classList.remove('hidden');
      judge.classList.remove('hidden');
      afuro.classList.add('buruburu');
    } else {
      judge.textContent = 'X';
      judge.classList.remove('hidden');
    };
    meter.value = life/100;
    if (life > 1) {
      nowQuestion += 1;
      setTimeout(hidden, 500);
    } else {
      setTimeout(function() {
        timer.textContent = "";
        image.classList.add('hidden0');
        afuro.classList.remove('buruburu');
        judge.classList.add('hidden');
        judge.textContent = '';
        bone.classList.remove('hidden');
        meter.classList.add('hidden0');
        afuro.classList.add('hidden0');
        majic_image.classList.add('hidden0');
        majic_icon.classList.add('hidden0');
      }, 1000);
    }
  }

  function Timer2() {
    var i = 0;
    var timerId2 = setInterval(function(){
      i++;
      timer.textContent = en - i;
      if (i > en){
        clearInterval(timerId2);
        judge.classList.remove('hidden');
        judge.innerHTML = 'NO!';
        timer.textContent = "もう一回";
        score = 0;
        i = 0;
      };
      if (life < 1) {
        clearInterval(timerId2);
        input.setAttribute('value', score);
      };
    }, 1000)
  };


  function Replay() {
    timer.addEventListener('click', function() {
      if (life < 1) {
        location.reload();
        scrollTo(0, 0);
      } else {
        return;
      };
    })
  }

  function register() {
    bone.addEventListener('click', function() {
      if (life < 1) {
        alert('ぼうぎょ +1');
        var userRef = db.collection("users").doc(email);
        // var level;
        // Set the "capital" field of the city 'DC'
        userRef.update({
            exper : level + 150,
            englishLv : en + 1
        })
        .then(function() {
            console.log("Document successfully updated!");
            display.submit();
        })
        .catch(function(error) {
            // The document probably doesn't exist.
            console.error("Error updating document: ", error);
        });
      } else {
        return;
      }
    })
  };


  function majicDamage() {
    majic_icon.addEventListener('click', function() {
      if (majic_icon.classList.contains('hidden')) {
        return;
      };
      life -= damager;
      majic_icon.classList.add('hidden');
      afuro.classList.add('buruburu');
      if (charactor === 'A') {
        if (damager === 20) {
          majic_image.innerHTML = "<img src='/img/majic_effect2.gif' class='w-50'>";
        }
        if (damager === 40) {
          majic_image.innerHTML = "<img src='/img/majic_effect2-1.gif' class='w-50'>";
        }
        if (damager === 60) {
          majic_image.innerHTML = "<img src='/img/majic_effect2-2.gif' class='w-50'>";
        }
        if (damager === 80) {
          majic_image.innerHTML = "<img src='/img/majic_effect2-3.gif' class='w-50'>";
        }
        if (damager === 100) {
          majic_image.innerHTML = "<img src='/img/majic_effect2-4.gif' class='w-50'>";
        }
      }
      if (charactor === 'B') {
        if (damager === 20) {
          majic_image.innerHTML = "<img src='/img/majic_effect1.gif' class='w-50'>";
        }
        if (damager === 40) {
          majic_image.innerHTML = "<img src='/img/majic_effect1-1.gif' class='w-50'>";
        }
        if (damager === 60) {
          majic_image.innerHTML = "<img src='/img/majic_effect1-2.gif' class='w-50'>";
        }
        if (damager === 80) {
          majic_image.innerHTML = "<img src='/img/majic_effect1-3.gif' class='w-50'>";
        }
        if (damager === 100) {
          majic_image.innerHTML = "<img src='/img/majic_effect1-4.gif' class='w-50'>";
        }
      }
      if (charactor === 'C') {
        if (damager === 20) {
          majic_image.innerHTML = "<img src='/img/majic_effect0.gif' class='w-50'>";
        }
        if (damager === 40) {
          majic_image.innerHTML = "<img src='/img/majic_effect0-1.gif' class='w-50'>";
        }
        if (damager === 60) {
          majic_image.innerHTML = "<img src='/img/majic_effect0-2.gif' class='w-50'>";
        }
        if (damager === 80) {
          majic_image.innerHTML = "<img src='/img/majic_effect0-3.gif' class='w-50'>";
        }
        if (damager === 100) {
          majic_image.innerHTML = "<img src='/img/majic_effect0-4.gif' class='w-50'>";
        }
      }
      setTimeout(function() {
        majic_image.classList.add('hidden');
        afuro.classList.remove('buruburu');
        meter.value = life/100;
      }, 1000);
    })
  }

  set();
  Answer();
  majicDamage();
  register();
  Timer2();
  })();
