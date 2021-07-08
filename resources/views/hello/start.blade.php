@extends('layouts.default')

@section('title', '生徒')
@section('person')
<div class="conteiner">
  <div class="row ">
    <div class="col-2"><img src="/img/icon-map.png" class="w-100"></div>
    <div class="col-8">ダンジョン</div>
    <div class="col-2"><img src="/img/icon-map.png" class="w-100"></div>
  </div>
</div>
@endsection
@section('header')
<link href="https://fonts.googleapis.com/css?family=Kosugi+Maru|Press+Start+2P|Sawarabi+Gothic&display=swap" rel="stylesheet">
<div class="conteiner">
  <div class="row mx-2">
    <div class="col font-weight-bold navbar-toggler" style="font-size: 40px" data-toggle="collapse" data-target="#exper">
      <img src="/img/icon-yumi.png"> たいけん
    </div>
  </div>
</div>
<div class="conteiner pb-2 collapse navbar-collapse" id="exper">
  <div class="row mx-2">
    <button class="btn text-light col " style="font-size: 30px">
      さんすう
    </button>
    <button class="btn text-light col" style="font-size: 30px">
      えいご
    </button>
    <button class="btn text-light col" style="font-size: 30px">
      くんれん
    </button>
  </div>
<div class="row mx-2">
  <div class="col">
    <a href="/start/math"><img src="/img/door-open-1.png" class="w-100"></a>
  </div>
  <div class="col">
    <a href="/start/english"><img src="/img/door-open-1.png" class="w-100"></a>
  </div>
  <div class="col">
    <a href="/start/practice"><img src="/img/door-open-1.png" class="w-100"></a>
  </div>
</div>
</div>
<div class="conteiner">
  <div class="row mx-2">
    <div class="col font-weight-bold" style="font-size: 40px"><a href="/explain" class="text-light"><img src="/img/icon-book.png"> ぼうけんのしょ</a></div>
  </div>
</div>
<div class="conteiner">
  <div class="row mx-2">
    <div class="col font-weight-bold" style="font-size: 40px"><a href="/register" class="text-light"><img src="/img/icon-hat.png"> ぼうけんにでる</a></div>
  </div>
</div>
<div class="conteiner">
  <div class="row mx-2">
    <div class="col font-weight-bold" style="font-size: 40px"><a href="/explain_web" class="text-light"><img src="/img/icon-mail.png"> サイトせつめい</a></div>
  </div>
</div>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.5.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-firestore.js"></script>

<!-- <script src="/js/firebaseapp.js">
</script> -->
@endsection
