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



// var auth = firebase.auth();
var english = document.getElementById('english');
var db = firebase.firestore();
var level = document.getElementById('level');
var enlevel = document.getElementById('enlevel');
var mathlevel = document.getElementById('mathlevel');
var nameid = document.getElementById('nameid');
var experi = document.getElementById('experi');
var tmp = document.getElementById('tmp');
var majician = document.getElementById('majician');
var damager = document.getElementById('damager');
var levels;
var prename;
var email;
var nowserif = 0;
var len;


firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User is signed in.
    email = user.email
    var docRef = db.collection("users").doc(email);
    docRef.get().then(function(doc) {
        if (doc.exists) {
            console.log("Document data:", doc.data().Lv);
            prename = doc.data().name;
            levels = doc.data().Lv;
               nameid.textContent = doc.data().name;
               level.textContent = 'Lv' + doc.data().Lv;
               enlevel.textContent = changeCode(String(doc.data().englishLv));
               mathlevel.textContent = changeCode(String(doc.data().mathLv));
               experi.value = doc.data().exper / ( doc.data().Lv*500) ;
               majician.textContent = doc.data().majic;
               damager.textContent = doc.data().damage;
               if (doc.data().chara === 'A') {
                 if( doc.data().Lv >= 1 ) {
                   tmp.src = "/img/chara1.gif"
                   tmp.classList.add('w-50');
                   docRef.update({
                       majic: "ファイヤー",
                       damage: 20
                   })
                   .then(function() {
                       console.log("Document successfully updated!");
                       majician.textContent = "ファイヤー";
                       damager.textContent = 20;
                   })
                   .catch(function(error) {
                       console.error("Error updating document: ", error);
                   });
                 }
                 if( doc.data().Lv > 5) {
                   tmp.src = "/img/chara1-1.gif"
                   tmp.classList.add('w-50');
                   docRef.update({
                       majic: "サンダー",
                       damage: 40
                   })
                   .then(function() {
                       console.log("Document successfully updated!");
                       majician.textContent = "サンダー";
                       damager.textContent = 40;
                   })
                   .catch(function(error) {
                       console.error("Error updating document: ", error);
                   });
                 }
                 if( doc.data().Lv > 10) {
                   tmp.src = "/img/chara1-2.gif"
                   tmp.classList.add('w-50');
                   docRef.update({
                       majic: "フリーズ",
                       damage: 60
                   })
                   .then(function() {
                       console.log("Document successfully updated!");
                       majician.textContent = "フリーズ";
                       damager.textContent = 60;
                   })
                   .catch(function(error) {
                       console.error("Error updating document: ", error);
                   });
                 }
                 if( doc.data().Lv > 20) {
                   tmp.src = "/img/chara1-3.gif"
                   tmp.classList.add('w-50');
                   docRef.update({
                       majic: "エンドタイム",
                       damage: 80
                   })
                   .then(function() {
                       console.log("Document successfully updated!");
                       majician.textContent = "エンドタイム";
                       damager.textContent = 80;
                   })
                   .catch(function(error) {
                       console.error("Error updating document: ", error);
                   });
                 }
                 if( doc.data().Lv > 30) {
                   tmp.src = "/img/chara1-4.gif"
                   tmp.classList.add('w-50');
                   docRef.update({
                       majic: "ジ・エンド",
                       damage: 100
                   })
                   .then(function() {
                       console.log("Document successfully updated!");
                       majician.textContent = "ジ・エンド";
                       damager.textContent = 100;
                   })
                   .catch(function(error) {
                       console.error("Error updating document: ", error);
                   });
                 }
               }
               if (doc.data().chara === 'B') {
                 if( doc.data().Lv >= 1) {
                   tmp.src = "/img/chara2.gif"
                   tmp.classList.add('w-50');
                   docRef.update({
                       majic: "きあいなぐり",
                       damage: 20
                   })
                   .then(function() {
                       console.log("Document successfully updated!");
                       majician.textContent = "きあいなぐり";
                       damager.textContent = 20;
                   })
                   .catch(function(error) {
                       console.error("Error updating document: ", error);
                   });
                 }
                 if( doc.data().Lv > 5) {
                   tmp.src = "/img/chara2-1.gif"
                   tmp.classList.add('w-50');
                   docRef.update({
                       majic: "はさみなぐり",
                       damage: 40
                   })
                   .then(function() {
                       console.log("Document successfully updated!");
                       majician.textContent = "はさみなぐり";
                       damager.textContent = 40;
                   })
                   .catch(function(error) {
                       console.error("Error updating document: ", error);
                   });
                 }
                 if( doc.data().Lv > 10) {
                   tmp.src = "/img/chara2-2.gif"
                   tmp.classList.add('w-50');
                   docRef.update({
                       majic: "よんれんなぐり",
                       damage: 60
                   })
                   .then(function() {
                       console.log("Document successfully updated!");
                       majician.textContent = "よんれんなぐり";
                       damager.textContent = 60;
                   })
                   .catch(function(error) {
                       console.error("Error updating document: ", error);
                   });
                 }
                 if( doc.data().Lv > 20) {
                   tmp.src = "/img/chara2-3.gif"
                   tmp.classList.add('w-50');
                   docRef.update({
                       majic: "ななめなぐり",
                       damage: 80
                   })
                   .then(function() {
                       console.log("Document successfully updated!");
                       majician.textContent = "ななめなぐり";
                       damager.textContent = 80;
                   })
                   .catch(function(error) {
                       console.error("Error updating document: ", error);
                   });
                 }
                 if( doc.data().Lv > 30) {
                   tmp.src = "/img/chara2-4.gif"
                   tmp.classList.add('w-50');
                   docRef.update({
                       majic: "たこなぐり",
                       damage: 100
                   })
                   .then(function() {
                       console.log("Document successfully updated!");
                       majician.textContent = "たこなぐり";
                       damager.textContent = 100;
                   })
                   .catch(function(error) {
                       console.error("Error updating document: ", error);
                   });
                 }
               }
               if (doc.data().chara === 'C') {
                 if( doc.data().Lv >= 1) {
                   tmp.src = "/img/chara0.gif"
                   tmp.classList.add('w-50');
                   docRef.update({
                       majic: "いあいぎり",
                       damage: 20
                   })
                   .then(function() {
                       console.log("Document successfully updated!");
                       majician.textContent = "いあいぎり";
                       damager.textContent = 20;
                   })
                   .catch(function(error) {
                       console.error("Error updating document: ", error);
                   });
                 }
                 if( doc.data().Lv > 5) {
                   tmp.src = "/img/chara3-1.gif"
                   tmp.classList.add('w-50');
                   docRef.update({
                       majic: "こうそくぎり",
                       damage: 40
                   })
                   .then(function() {
                       console.log("Document successfully updated!");
                       majician.textContent = "こうそくぎり";
                       damager.textContent = 40;
                   })
                   .catch(function(error) {
                       console.error("Error updating document: ", error);
                   });
                 }
                 if( doc.data().Lv > 10) {
                   tmp.src = "/img/chara3-2.gif"
                   tmp.classList.add('w-50');
                   docRef.update({
                       majic: "しっぷうぎり",
                       damage: 60
                   })
                   .then(function() {
                       console.log("Document successfully updated!");
                       majician.textContent = "しっぷうぎり";
                       damager.textContent = 60;
                   })
                   .catch(function(error) {
                       console.error("Error updating document: ", error);
                   });
                 }
                 if( doc.data().Lv > 20) {
                   tmp.src = "/img/chara3-3.gif"
                   tmp.classList.add('w-50');
                   docRef.update({
                       majic: "だいなみっくぎり",
                       damage: 80
                   })
                   .then(function() {
                       console.log("Document successfully updated!");
                       majician.textContent = "だいなみっくぎり";
                       damager.textContent = 80;
                   })
                   .catch(function(error) {
                       console.error("Error updating document: ", error);
                   });
                 }
                 if( doc.data().Lv > 30) {
                   tmp.src = "/img/chara3-4.gif"
                   tmp.classList.add('w-50');
                   docRef.update({
                       majic: "ハイパーだいなみっくぎり",
                       damage: 100
                   })
                   .then(function() {
                       console.log("Document successfully updated!");
                       majician.textContent = "ハイパーだいなみっくぎり";
                       damager.textContent = 100;
                   })
                   .catch(function(error) {
                       console.error("Error updating document: ", error);
                   });
                 }
               }

               if (doc.data().Lv*500 === doc.data().exper || doc.data().Lv*500 < doc.data().exper) {
                docRef.update({
                    Lv : levels + 1,
                    exper: doc.data().exper - doc.data().Lv*500
                })
                .then(function() {
                    console.log("Document successfully updated!");
                })
                .catch(function(error) {
                    console.error("Error updating document: ", error);
                });
               };
        } else {
            console.log("No such document!");
        }
      }).catch(function(error) {
          console.log("Error getting document:", error);
      });
  } else {
    // No user is signed in.
  }
});
function changeCode(str) {
  var halfstr = str.replace(/[A-Za-z0-9]/g, function(s) {
    return String.fromCharCode(s.charCodeAt(0) + 65248);
});

return halfstr;

};
