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

var auth = firebase.auth()

var email = document.getElementById('email');
var pass = document.getElementById('pass');
var button = document.getElementById('button');
var form_control = document.getElementById('form_control');
var error_code = document.getElementById('error_code');



auth.onAuthStateChanged(function(user) {
  if (user) {
    var email = user.email;
    error_code.textContent = email;
  } else {
    // User is signed out.
    // ...
  }
});
button.addEventListener('click', function() {
  auth.signInWithEmailAndPassword(email.value, pass.value)
  .then(function() {
    form_control.submit();
  })
  .catch(function(error) {
  var errorCode = error.code;
  var errorMessage = error.message;
  error_code.textContent = errorCode;
  error_code.textContent = errorMessage;
});
});
