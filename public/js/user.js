// 'use strict'
// // Your web app's Firebase configuration
// var firebaseConfig = {
//   apiKey: "AIzaSyB84YJHi1zN7NONyZXv1cR23N57a-pYQkM",
//   authDomain: "mytextproject-a29c0.firebaseapp.com",
//   databaseURL: "https://mytextproject-a29c0.firebaseio.com",
//   projectId: "mytextproject-a29c0",
//   storageBucket: "mytextproject-a29c0.appspot.com",
//   messagingSenderId: "690640792640",
//   appId: "1:690640792640:web:49aadbb60574ca31"
// };
// // Initialize Firebase
// firebase.initializeApp(firebaseConfig);
//
//
//
// // var auth = firebase.auth();
// var english = document.getElementById('english');
// var db = firebase.firestore();
// var level = document.getElementById('level');
// var enlevel = document.getElementById('enlevel');
// var mathlevel = document.getElementById('mathlevel');
// var nameid = document.getElementById('nameid');
// var experi = document.getElementById('experi');
// var tmp = document.getElementById('tmp');
// var majician = document.getElementById('majician');
// var damager = document.getElementById('damager');
// var doortmp = document.getElementById('doortmp');
// var doortmp1 = document.getElementById('doortmp1');
// var doortmp2 = document.getElementById('doortmp2');
// var doortmp3 = document.getElementById('doortmp3');
// var doortmp4 = document.getElementById('doortmp4');
// var doortmp5 = document.getElementById('doortmp5');
// var doortmp6 = document.getElementById('doortmp6');
// var doortmp7 = document.getElementById('doortmp7');
// var doortmp8 = document.getElementById('doortmp8');
// var searchLink = document.getElementById('searchLink');
// var searchLink1 = document.getElementById('searchLink1');
// var searchLink2 = document.getElementById('searchLink2');
// var searchLink3 = document.getElementById('searchLink3');
// var searchLink4 = document.getElementById('searchLink4');
// var searchLink5 = document.getElementById('searchLink5');
// var searchLink = document.getElementById('searchLink');
// var searchLink = document.getElementById('searchLink');
// var door1 = document.getElementById('door1');
// var doors = document.getElementsByClassName('doors');
// // var hukidasi = document.getElementById('hukidasi');
// // var char = document.getElementById('char');
// var levels;
// var prename;
// var email;
// var nowserif = 0;
// var len;

// var serif = [
//   'こんにちは！次に進むためにはここをたっちしてね！',
//   '俺はアーサー！',
//   'よろしくな！',
//   '早速このゲームの説明をしていくよ！',
//   '準備はいいかな？',
//   'このゲームは算数を使って敵を倒すゲームだよ！',
//   '敵を倒すたびに経験値がもらえるよ！',
//   'この経験値がたまると、主人公のレベルが上がるよ！',
//   'レベルが上がると進化するよ',
//   '進化すると、使える技が強くなるよ！',
//   'わざと頭を使って敵を倒そう！',
//   '敵を倒すと、上のこんなのが敵から取れるよ！',
//   'これをとってこうげき、ぼうぎょををあげよう！',
//   '進めていくうちにどんどん敵が強くなっていくよ！',
//   '敵が倒せないときは、訓練所で訓練しよう！',
//   '訓練してからいくと敵が倒しやすくなってるよ！',
//   'ラストのボスはとても強いから頑張って倒そう！',
//   'ラストのボスを倒せたら、君はけんじゃだ！',
//   '次にがめんの操作のせつめいをするね！',
//   'がめんはこのようになっているよ！',
//   'このもんだいだと、１をおして、２をおすと１２になるね！',
//   'こたえをつくったらOKボタンをおそう！',
//   'こたえがあっていれば、てきにこうげきだ！',
//   'てきのたいりょくを０にしたら勝ちだ！',
//   'わざは一回しかつかえないから気をつけてね！',
//   '君はこれでたびにでれるようになった！',
//   'さあ、冒険に出発だ！'
// ];


// function setserif() {
  // len = serif[nowserif].length;
  // var i = 0;
  // var str = serif[nowserif];
  // setInterval(function() {
  //   var hitomoji = str.substr(i, 1);
    // hukidasi.textContent += hitomoji;
    // hukidasi.textContent = "aaaaa";
//     i += 1;
//     if (i === len-1) {
//       clearInterval();
//     };
//   }, 50);
// }

// function btn() {
//   hukidasi.addEventListener('click', function() {
//     // if(nowserif === serif.length-1){
//     //   return;
//     // }
//     // if (hukidasi.textContent !== serif[nowserif] ) {
//     //   return;
//     // };
//     var random = Math.floor( Math.random() * 11 );
//       console.log( random );
//       nowserif = random;
//       hukidasi.textContent = '';
//       setserif();
//   });
// };

// setserif();
// btn();

// hukidasi.textContent = "aaaaa";
//
// firebase.auth().onAuthStateChanged(function(user) {
//   if (user) {
//     // User is signed in.
//     email = user.email
//     var docRef = db.collection("users").doc(email);
//     docRef.get().then(function(doc) {
//         if (doc.exists) {
//             console.log("Document data:", doc.data().Lv);
//             prename = doc.data().name;
//             levels = doc.data().Lv;
//                nameid.textContent = doc.data().name;
//                level.textContent = 'Lv' + doc.data().Lv;
//                enlevel.textContent = changeCode(String(doc.data().englishLv));
//                mathlevel.textContent = changeCode(String(doc.data().mathLv));
//                experi.value = doc.data().exper / ( doc.data().Lv*500) ;
//                majician.textContent = doc.data().majic;
//                damager.textContent = doc.data().damage;
//                if( doc.data().Lv >= 1 ) {
//                  doortmp.src = "/img/door-open-1.png"
//                  searchLink.href = "user/text0"
//                }
//                if( doc.data().Lv >= 2 ) {
//                  doortmp1.src = "/img/door-open-1.png"
//                  searchLink1.href = "user/text1"
//                }
//                if( doc.data().Lv >= 3 ) {
//                  doortmp2.src = "/img/door-open-1.png"
//                  searchLink2.href = "user/text2"
//                }
//                if( doc.data().Lv >= 4 ) {
//                  doortmp3.src = "/img/door-open-1.png"
//                  searchLink3.href = "user/text3"
//                }
//                if( doc.data().Lv >= 5 ) {
//                  doortmp4.src = "/img/door-open-1.png"
//                  searchLink4.href = "user/text4"
//                }
//                if( doc.data().Lv >= 6 ) {
//                  doortmp5.src = "/img/door-open-1.png"
//                  searchLink5.href = "user/text5"
//                }
//                if( doc.data().Lv >= 7 ) {
//                  doortmp6.src = "/img/door-open-1.png"
//                  doortmp6.classList.add("w-100")
//                }
//
//                if( doc.data().Lv >= 8 ) {
//                  doortmp7.src = "/img/door-open-1.png"
//                  doortmp7.classList.add("w-100")
//                }
//                if( doc.data().Lv >= 9 ) {
//                  doortmp8.src = "/img/door-open-1.png"
//                  doortmp8.classList.add("w-100")
//                }
//                if (doc.data().chara === 'A') {
//                  if( doc.data().Lv >= 1 ) {
//                    tmp.src = "/img/chara1.gif"
//                    tmp.classList.add('w-50');
//                    docRef.update({
//                        majic: "ファイヤー",
//                        damage: 20
//                    })
//                    .then(function() {
//                        console.log("Document successfully updated!");
//                        majician.textContent = "ファイヤー";
//                        damager.textContent = 20;
//                    })
//                    .catch(function(error) {
//                        console.error("Error updating document: ", error);
//                    });
//                  }
//                  if( doc.data().Lv > 5) {
//                    tmp.src = "/img/chara1-1.gif"
//                    tmp.classList.add('w-50');
//                    docRef.update({
//                        majic: "サンダー",
//                        damage: 40
//                    })
//                    .then(function() {
//                        console.log("Document successfully updated!");
//                        majician.textContent = "サンダー";
//                        damager.textContent = 40;
//                    })
//                    .catch(function(error) {
//                        console.error("Error updating document: ", error);
//                    });
//                  }
//                  if( doc.data().Lv > 10) {
//                    tmp.src = "/img/chara1-2.gif"
//                    tmp.classList.add('w-50');
//                    docRef.update({
//                        majic: "フリーズ",
//                        damage: 60
//                    })
//                    .then(function() {
//                        console.log("Document successfully updated!");
//                        majician.textContent = "フリーズ";
//                        damager.textContent = 60;
//                    })
//                    .catch(function(error) {
//                        console.error("Error updating document: ", error);
//                    });
//                  }
//                  if( doc.data().Lv > 20) {
//                    tmp.src = "/img/chara1-3.gif"
//                    tmp.classList.add('w-50');
//                    docRef.update({
//                        majic: "エンドタイム",
//                        damage: 80
//                    })
//                    .then(function() {
//                        console.log("Document successfully updated!");
//                        majician.textContent = "エンドタイム";
//                        damager.textContent = 80;
//                    })
//                    .catch(function(error) {
//                        console.error("Error updating document: ", error);
//                    });
//                  }
//                  if( doc.data().Lv > 30) {
//                    tmp.src = "/img/chara1-4.gif"
//                    tmp.classList.add('w-50');
//                    docRef.update({
//                        majic: "ジ・エンド",
//                        damage: 100
//                    })
//                    .then(function() {
//                        console.log("Document successfully updated!");
//                        majician.textContent = "ジ・エンド";
//                        damager.textContent = 100;
//                    })
//                    .catch(function(error) {
//                        console.error("Error updating document: ", error);
//                    });
//                  }
//                }
//                if (doc.data().chara === 'B') {
//                  if( doc.data().Lv >= 1) {
//                    tmp.src = "/img/chara2.gif"
//                    tmp.classList.add('w-50');
//                    docRef.update({
//                        majic: "きあいなぐり",
//                        damage: 20
//                    })
//                    .then(function() {
//                        console.log("Document successfully updated!");
//                        majician.textContent = "きあいなぐり";
//                        damager.textContent = 20;
//                    })
//                    .catch(function(error) {
//                        console.error("Error updating document: ", error);
//                    });
//                  }
//                  if( doc.data().Lv > 5) {
//                    tmp.src = "/img/chara2-1.gif"
//                    tmp.classList.add('w-50');
//                    docRef.update({
//                        majic: "はさみなぐり",
//                        damage: 40
//                    })
//                    .then(function() {
//                        console.log("Document successfully updated!");
//                        majician.textContent = "はさみなぐり";
//                        damager.textContent = 40;
//                    })
//                    .catch(function(error) {
//                        console.error("Error updating document: ", error);
//                    });
//                  }
//                  if( doc.data().Lv > 10) {
//                    tmp.src = "/img/chara2-2.gif"
//                    tmp.classList.add('w-50');
//                    docRef.update({
//                        majic: "よんれんなぐり",
//                        damage: 60
//                    })
//                    .then(function() {
//                        console.log("Document successfully updated!");
//                        majician.textContent = "よんれんなぐり";
//                        damager.textContent = 60;
//                    })
//                    .catch(function(error) {
//                        console.error("Error updating document: ", error);
//                    });
//                  }
//                  if( doc.data().Lv > 20) {
//                    tmp.src = "/img/chara2-3.gif"
//                    tmp.classList.add('w-50');
//                    docRef.update({
//                        majic: "ななめなぐり",
//                        damage: 80
//                    })
//                    .then(function() {
//                        console.log("Document successfully updated!");
//                        majician.textContent = "ななめなぐり";
//                        damager.textContent = 80;
//                    })
//                    .catch(function(error) {
//                        console.error("Error updating document: ", error);
//                    });
//                  }
//                  if( doc.data().Lv > 30) {
//                    tmp.src = "/img/chara2-4.gif"
//                    tmp.classList.add('w-50');
//                    docRef.update({
//                        majic: "たこなぐり",
//                        damage: 100
//                    })
//                    .then(function() {
//                        console.log("Document successfully updated!");
//                        majician.textContent = "たこなぐり";
//                        damager.textContent = 100;
//                    })
//                    .catch(function(error) {
//                        console.error("Error updating document: ", error);
//                    });
//                  }
//                }
//                if (doc.data().chara === 'C') {
//                  if( doc.data().Lv >= 1) {
//                    tmp.src = "/img/chara0.gif"
//                    tmp.classList.add('w-50');
//                    docRef.update({
//                        majic: "いあいぎり",
//                        damage: 20
//                    })
//                    .then(function() {
//                        console.log("Document successfully updated!");
//                        majician.textContent = "いあいぎり";
//                        damager.textContent = 20;
//                    })
//                    .catch(function(error) {
//                        console.error("Error updating document: ", error);
//                    });
//                  }
//                  if( doc.data().Lv > 5) {
//                    tmp.src = "/img/chara3-1.gif"
//                    tmp.classList.add('w-50');
//                    docRef.update({
//                        majic: "こうそくぎり",
//                        damage: 40
//                    })
//                    .then(function() {
//                        console.log("Document successfully updated!");
//                        majician.textContent = "こうそくぎり";
//                        damager.textContent = 40;
//                    })
//                    .catch(function(error) {
//                        console.error("Error updating document: ", error);
//                    });
//                  }
//                  if( doc.data().Lv > 10) {
//                    tmp.src = "/img/chara3-2.gif"
//                    tmp.classList.add('w-50');
//                    docRef.update({
//                        majic: "しっぷうぎり",
//                        damage: 60
//                    })
//                    .then(function() {
//                        console.log("Document successfully updated!");
//                        majician.textContent = "しっぷうぎり";
//                        damager.textContent = 60;
//                    })
//                    .catch(function(error) {
//                        console.error("Error updating document: ", error);
//                    });
//                  }
//                  if( doc.data().Lv > 20) {
//                    tmp.src = "/img/chara3-3.gif"
//                    tmp.classList.add('w-50');
//                    docRef.update({
//                        majic: "だいなみっくぎり",
//                        damage: 80
//                    })
//                    .then(function() {
//                        console.log("Document successfully updated!");
//                        majician.textContent = "だいなみっくぎり";
//                        damager.textContent = 80;
//                    })
//                    .catch(function(error) {
//                        console.error("Error updating document: ", error);
//                    });
//                  }
//                  if( doc.data().Lv > 30) {
//                    tmp.src = "/img/chara3-4.gif"
//                    tmp.classList.add('w-50');
//                    docRef.update({
//                        majic: "ハイパーだいなみっくぎり",
//                        damage: 100
//                    })
//                    .then(function() {
//                        console.log("Document successfully updated!");
//                        majician.textContent = "ハイパーだいなみっくぎり";
//                        damager.textContent = 100;
//                    })
//                    .catch(function(error) {
//                        console.error("Error updating document: ", error);
//                    });
//                  }
//                }
//
//                if (doc.data().Lv*500 === doc.data().exper || doc.data().Lv*500 < doc.data().exper) {
//                 docRef.update({
//                     Lv : levels + 1,
//                     exper: doc.data().exper - doc.data().Lv*500
//                 })
//                 .then(function() {
//                     console.log("Document successfully updated!");
//                 })
//                 .catch(function(error) {
//                     console.error("Error updating document: ", error);
//                 });
//                };
//         } else {
//             console.log("No such document!");
//         }
//       }).catch(function(error) {
//           console.log("Error getting document:", error);
//       });
//   } else {
//     // No user is signed in.
//   }
// });
// function changeCode(str) {
//   var halfstr = str.replace(/[A-Za-z0-9]/g, function(s) {
//     return String.fromCharCode(s.charCodeAt(0) + 65248);
// });
//
// return halfstr;
//
// };



// add();
