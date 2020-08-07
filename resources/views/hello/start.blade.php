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
<!-- @if (Auth::check()) -->
<nav class="navbar navbar-expand-sm navbar-light">
<a href="" class="navbar-brand pl-2">@yield('title')</a>
<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>
<div id="menu" class="collapse navbar-collapse">
<ul class="navbar-nav">
  <li class="nav-item pl-2"><a href="student/haruto" class="nav-link">生徒1</a></li>
  <li class="nav-item pl-2"><a href="#" class="nav-link">生徒2</a></li>
  <li class="nav-item pl-2"><a href="#" class="nav-link">生徒3</a></li>
  <li class="nav-item pl-2"><a href="#" class="nav-link">生徒4</a></li>
</ul>
</div>
</nav>
<!-- @else -->
<!-- <button class="btn btn-primary" id="register">register</button> -->
<!-- @endif -->
@endsection
@section('content')
<!-- @if (Auth::check()) -->
  <!-- <p>USER: {{ $user->name . $user->email }}</p> -->
  <!-- <div class="conteiner py-5">
    <div class="row">
      <button class="btn text-info col-4 font-weight-bold ">
        高校生
      </button>
      <button class="btn text-info col-4 font-weight-bold ">
       中学生
      </button>
      <button class="btn text-info col-4 font-weight-bold ">
        小学生
      </button>
    </div>
    <div class="row">
      <div class="col-4">
        <a href="highschool/index.html"><img src="/img/door-open-1.png" class="w-100"></a>
      </div>
      <div class="col-4">
        <a href="juniorhighschool/index.html"><img src="/img/door-open-1.png" class="w-100"></a>
      </div>
      <div class="col-4">
        <a href="/elementary"><img src="/img/door-open-1.png" class="w-100"></a>
      </div>
    </div>
  </div> -->
<!-- @else -->
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
    <div class="col font-weight-bold" style="font-size: 40px"><a href="/explain" class="text-light"><img src="/img/icon-book.png"> せつめいしょ</a></div>
  </div>
</div>
<div class="conteiner">
  <div class="row mx-2">
    <div class="col font-weight-bold" style="font-size: 40px"><a href="/parents" class="text-light"><img src="/img/icon-mail.png"> おやごさまへ</a></div>
  </div>
</div>
<div class="conteiner">
  <div class="row mx-2">
    <div class="col font-weight-bold" style="font-size: 40px"><a href="/create" class="text-light"><img src="/img/icon-hat.png"> ぼうけんにでる</a></div>
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
<!-- @endif -->
@endsection
