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

  var q1 = document.getElementById('q1');
  var q2 = document.getElementById('q2');
  var q3 = document.getElementById('q3');
  var q4 = document.getElementById('q4');
  var q5 = document.getElementById('q5');
  var q6 = document.getElementById('q6');
  var q7 = document.getElementById('q7');
  var q8 = document.getElementById('q8');
  var q9 = document.getElementById('q9');
  var q10 = document.getElementById('q10');
  var q11 = document.getElementById('q11');
  var q12 = document.getElementById('q12');
  var q13 = document.getElementById('q13');
  var q14 = document.getElementById('q14');
  var q15 = document.getElementById('q15');
  var q16 = document.getElementById('q16');
  var q17 = document.getElementById('q17');
  var q18 = document.getElementById('q18');
  var q19 = document.getElementById('q19');
  var q20 = document.getElementById('q20');
  var okbtn = document.getElementById('okbtn');
  var result = document.getElementById('result');
  var answer = document.getElementById('answer');
  var judge = document.getElementById('judge');
  var vanish = document.getElementById('vanish');
  var lastScore = document.getElementById('lastScore');
  var timer = document.getElementById('timer');
  var input = document.getElementById('input');
  var display = document.getElementById('display');
  var image = document.getElementById('image');
  var afuro = document.getElementById('afuro');
  var meter = document.getElementById('meter');
  var bone = document.getElementById('bone');
  // var kill = document.getElementById('kill');
  var majic_icon = document.getElementById('majic_icon');
  var majic_image = document.getElementById('majic_image');
  var answers = document.getElementsByClassName('answers');
  var correct = document.getElementsByClassName('correct');
  var wrong = document.getElementsByClassName('wrong');
  var solves = document.getElementsByClassName('solves');
  var kill = document.getElementsByClassName('kill');

  var nowQuestion = 0;
  var score = 0;
  var level;
  var level1;
  var en;
  var life = 100;
  var damager;

  var questions = [
    {q: '1 + 1 =', a:'2'},
    {q: '1 + 2 =', a:'3'},
    {q: '1 + 3 =', a:'4'},
    {q: '1 + 4 =', a:'5'},
    {q: '1 + 5 =', a:'6'},
    {q: '1 + 6 =', a:'7'},
    {q: '1 + 7 =', a:'8'},
    {q: '1 + 8 =', a:'9'},
    {q: '1 + 9 =', a:'10'},
    {q: '2 + 1 =', a:'3'},
    {q: '2 + 2 =', a:'4'},
    {q: '2 + 3 =', a:'5'},
    {q: '2 + 4 =', a:'6'},
    {q: '2 + 5 =', a:'7'},
    {q: '2 + 6 =', a:'8'},
    {q: '2 + 7 =', a:'9'},
    {q: '2 + 8 =', a:'10'},
    {q: '2 + 9 =', a:'11'},
    {q: '3 + 1 =', a:'4'},
    {q: '3 + 2 =', a:'5'},
    {q: '3 + 3 =', a:'6'},
    {q: '3 + 4 =', a:'7'},
    {q: '3 + 5 =', a:'8'},
    {q: '3 + 6 =', a:'9'},
    {q: '3 + 7 =', a:'10'},
    {q: '3 + 8 =', a:'11'},
    {q: '3 + 9 =', a:'12'},
    {q: '4 + 1 =', a:'5'},
    {q: '4 + 2 =', a:'6'},
    {q: '4 + 3 =', a:'7'},
    {q: '4 + 4 =', a:'8'},
    {q: '4 + 5 =', a:'9'},
    {q: '4 + 6 =', a:'10'},
    {q: '4 + 7 =', a:'11'},
    {q: '4 + 8 =', a:'12'},
    {q: '4 + 9 =', a:'13'},
    {q: '5 + 1 =', a:'6'},
    {q: '5 + 2 =', a:'7'},
    {q: '5 + 3 =', a:'8'},
    {q: '5 + 4 =', a:'9'},
    {q: '5 + 5 =', a:'10'},
    {q: '5 + 6 =', a:'11'},
    {q: '5 + 7 =', a:'12'},
    {q: '5 + 8 =', a:'13'},
    {q: '5 + 9 =', a:'14'},
    {q: '6 + 1 =', a:'7'},
    {q: '6 + 2 =', a:'8'},
    {q: '6 + 3 =', a:'9'},
    {q: '6 + 4 =', a:'10'},
    {q: '6 + 5 =', a:'11'},
    {q: '6 + 6 =', a:'12'},
    {q: '6 + 7 =', a:'13'},
    {q: '6 + 8 =', a:'14'},
    {q: '6 + 9 =', a:'15'},
    {q: '7 + 1 =', a:'8'},
    {q: '7 + 2 =', a:'9'},
    {q: '7 + 3 =', a:'10'},
    {q: '7 + 4 =', a:'11'},
    {q: '7 + 5 =', a:'12'},
    {q: '7 + 6 =', a:'13'},
    {q: '7 + 7 =', a:'14'},
    {q: '7 + 8 =', a:'15'},
    {q: '7 + 9 =', a:'16'},
    {q: '8 + 1 =', a:'9'},
    {q: '8 + 2 =', a:'10'},
    {q: '8 + 3 =', a:'11'},
    {q: '8 + 4 =', a:'12'},
    {q: '8 + 5 =', a:'13'},
    {q: '8 + 6 =', a:'14'},
    {q: '8 + 7 =', a:'15'},
    {q: '8 + 8 =', a:'16'},
    {q: '8 + 9 =', a:'17'},
    {q: '9 + 1 =', a:'10'},
    {q: '9 + 2 =', a:'11'},
    {q: '9 + 3 =', a:'12'},
    {q: '9 + 4 =', a:'13'},
    {q: '9 + 5 =', a:'14'},
    {q: '9 + 6 =', a:'15'},
    {q: '9 + 7 =', a:'16'},
    {q: '9 + 8 =', a:'17'},
    {q: '9 + 9 =', a:'18'}
  ];
  var db = firebase.firestore();
  var email;
  var charactor;

  afuro.src = "/img/enemy0.png";

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

  function set(){
  var shufflequestions;
  shufflequestions = shuffle(questions);
  q1.innerHTML = shufflequestions[0].q;
  q2.innerHTML = shufflequestions[1].q;
  q3.innerHTML = shufflequestions[2].q;
  q4.innerHTML = shufflequestions[3].q;
  q5.innerHTML = shufflequestions[4].q;
  q6.innerHTML = shufflequestions[5].q;
  q7.innerHTML = shufflequestions[6].q;
  q8.innerHTML = shufflequestions[7].q;
  q9.innerHTML = shufflequestions[8].q;
  q10.innerHTML = shufflequestions[9].q;
  q11.innerHTML = shufflequestions[10].q;
  q12.innerHTML = shufflequestions[11].q;
  q13.innerHTML = shufflequestions[12].q;
  q14.innerHTML = shufflequestions[13].q;
  q15.innerHTML = shufflequestions[14].q;
  q16.innerHTML = shufflequestions[15].q;
  q17.innerHTML = shufflequestions[16].q;
  q18.innerHTML = shufflequestions[17].q;
  q19.innerHTML = shufflequestions[18].q;
  q20.innerHTML = shufflequestions[19].q;
  }

  var hidden = function() {
    scrollBy(0,92);
    image.classList.add('hidden');
    afuro.classList.remove('buruburu');
    // judge.classList.add('hidden');
    kill[nowQuestion-1].classList.add('hidden');
  }

  function vanishAction() {
    vanish.addEventListener('click', function() {
      var str = answer.textContent;
      var a = str.slice(0, -1);
      answer.textContent = a;
    })
  }

  function btnAction() {
    okbtn.addEventListener('click', function() {
      // alert('ok');
      if (answer.textContent === questions[nowQuestion].a) {
        correct[nowQuestion].classList.remove('hidden');
        score += 10
        life -= level1;
        // judge.classList.remove('hidden');
        image.classList.remove('hidden');
        afuro.classList.add('buruburu');
        // judge.textContent = '○'
        if (nowQuestion === 9) {
          // result.classList.remove('hidden')
        }
      } else {
        wrong[nowQuestion].classList.remove('hidden');
        // judge.classList.remove('hidden');
        // judge.textContent = 'X'
        if (nowQuestion === 9) {
          // result.classList.remove('hidden');
          lastScore.innerHTML = score ;
        }
      }
      meter.value = life/100;
      solves[nowQuestion].textContent = answer.textContent;
      nowQuestion += 1;
      answer.textContent = "";
      setTimeout(hidden, 500);
    })
  }

  function Answer(){
    if (life < 1) {
      return;
    }
    var i;
    for ( i = 0; i <= 9; i++){
      answers[i].addEventListener('click', function(){
        // alert('ok')
      answer.textContent += this.textContent;
      })
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
        timer.textContent = "Replay";
        answer.textContent = "";
        score = 0;
        i = 0;
      };
      if (life < 1) {
        bone.classList.remove('hidden');
        afuro.classList.add('hidden');
        clearInterval(timerId2);
        timer.innerHTML = "";
        answer.innerHTML = "";
        meter.classList.add('hidden');
        majic_icon.classList.add('hidden');
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
        alert('こうげき +1');
        var userRef = db.collection("users").doc(email);
        // var level;
        // Set the "capital" field of the city 'DC'
        userRef.update({
            exper : level + 150,
            mathLv : level1 + 1
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

  btnAction();
  set();
  Answer();
  vanishAction();
  Timer2();
  Replay();
  register();
  majicDamage();
  })();
