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

var nameid = document.getElementById('nameid');
var charaA = document.getElementById('charaA');
var charaB = document.getElementById('charaB');
var charaC = document.getElementById('charaC');
var form_control = document.getElementById('form_control');

var db = firebase.firestore();
var auth = firebase.auth();
var email;

auth.onAuthStateChanged(function(user) {
  if (user) {
    email = user.email;
  } else {
    // User is signed out.
    // ...
  }
});

charaA.addEventListener('click', function() {
  if (nameid.value == "") {
    alert('なまえをかいてください');
    return;
  };
  if (confirm('むらびとAでよろしいですか？')) {
      db.collection("users").doc(email).set({
          name: nameid.value,
          email: email,
          Lv: 1,
          mathLv: 10,
          englishLv: 50,
          exper: 100,
          damage: 20,
          majic: "ファイアー",
          chara: "A"
      })
      .then(function(docRef) {
          // console.log("Document written with ID: ", docRef.id);
          form_control.submit();
      })
      .catch(function(error) {
          console.error("Error adding document: ", error);
      });
  }
});

charaB.addEventListener('click', function() {
  if (nameid.value == "") {
    alert('なまえをかいてください');
    return;
  };
  if (confirm('むらびとBでよろしいですか？')) {
      db.collection("users").doc(email).set({
          name: nameid.value,
          email: email,
          Lv: 1,
          mathLv: 10,
          englishLv: 50,
          exper: 100,
          damage: 20,
          majic: "きあいなぐり",
          chara: "B"
      })
      .then(function(docRef) {
          form_control.submit();
      })
      .catch(function(error) {
          console.error("Error adding document: ", error);
      });
  }
});

charaC.addEventListener('click', function() {
  if (nameid.value == "") {
    alert('なまえをかいてください');
    return;
  };
  if (confirm('むらびとCでよろしいですか？')) {
      db.collection("users").doc(email).set({
          name: nameid.value,
          email: email,
          Lv: 1,
          mathLv: 10,
          englishLv: 50,
          exper: 100,
          damage: 20,
          majic: "いあいぎり",
          chara: "C"
      })
      .then(function(docRef) {
          form_control.submit();
      })
      .catch(function(error) {
          console.error("Error adding document: ", error);
      });
  }
});
