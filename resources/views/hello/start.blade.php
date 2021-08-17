@extends('layouts.default')

@section('title', '生徒')
@section('person')
<div class="container">
  <div class="row mx-2">
    <div style="font-size: 40px;">始まりのまち</div>
  </div>
</div>
@endsection
@section('header')
<link href="https://fonts.googleapis.com/css?family=Kosugi+Maru|Press+Start+2P|Sawarabi+Gothic&display=swap" rel="stylesheet">
<div class="container">
  <div class="row mx-2 mb-3">
    <div class="col font-weight-bold" style="font-size: 25px"><a href="/experience" class="text-light"><img src="/img/icon-yumi.png"> たいけん</a></div>
  </div>
</div>
<div class="container">
  <div class="row mx-2 mb-3">
    <div class="col font-weight-bold" style="font-size: 25px"><a class="text-light" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"><img src="/img/icon-book.png"> まちにかえる</a></div>
  </div>
</div>
<div class="container">
  <div class="row mx-2 mb-3">
    <div class="col font-weight-bold" style="font-size: 25px"><a href="/register" class="text-light"><img src="/img/icon-hat.png"> ぼうけんにでる</a></div>
  </div>
</div>
<div class="container">
  <div class="row mx-2 mb-3">
    <div class="col font-weight-bold" style="font-size: 25px"><a href="/explain_web" class="text-light" ><img src="/img/icon-mail.png"> サイトせつめい</a></div>
  </div>
</div>
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.5.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-firestore.js"></script>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<!-- <script src="/js/firebaseapp.js">
</script> -->

@endsection
