@extends('layouts.person')
@section('title', '生徒')
@section('background', '/img/start-bg4.png')
@section('main-color', 'black')
@section('color', 'black')
@section('content')
<div class="container">
  <div class="row">
    <div class="col" style="font-size: 30px;">
      しゅくだいのまち
    </div>
  </div>
</div>
<div class="container">
  <div class="row my-3">
   <div class="col-4 text-center font-weight-bold" id="english">Lv1-1</div>
   <div class="col-4 text-center font-weight-bold" id="math">Lv1-2</div>
   <div class="col-4 text-center font-weight-bold" id="eitan">Lv1-3</div>
  </div>
  <div class="row my-3">
   <div class="doors col-4 text-center" id="english"><a href="/user/practice0" id="searchLink"><img src="/img/pointer.png" class="w-50" id="doortmp"></a></div>
   <div class="doors col-4 text-center" id="math"><a href="/user/practice1" id="searchLink1"><img src="/img/pointer.png" class="w-50" id="doortmp1"></a></div>
   <div class="doors col-4 text-center" id="eitan"><a href="/user/practice2" id="searchLink2"><img src="/img/pointer.png" class="w-50" id="doortmp2"></a></div>
  </div>
</div>
<div class="container">
  <div class="row my-3">
   <div class="col-4 text-center font-weight-bold" id="english">Lv2-1</div>
   <div class="col-4 text-center font-weight-bold" id="math">Lv2-2</div>
   <div class="col-4 text-center font-weight-bold" id="eitan">Lv2-3</div>
  </div>
  <div class="row my-3">
   <div class="doors col-4 text-center" id="english"><a href="/user/practice3" id="searchLink"><img src="/img/pointer.png" class="w-50" id="doortmp"></a></div>
   <div class="doors col-4 text-center" id="math"><a href="/user/practice4" id="searchLink1"><img src="/img/pointer.png" class="w-50" id="doortmp1"></a></div>
   <div class="doors col-4 text-center" id="eitan"><a href="/user/practice5" id="searchLink2"><img src="/img/pointer.png" class="w-50" id="doortmp2"></a></div>
  </div>
</div>
<div class="container">
  <div class="row my-3">
   <div class="col-4 text-center font-weight-bold" id="english">Lv3-1</div>
   <div class="col-4 text-center font-weight-bold" id="math">Lv3-2</div>
   <div class="col-4 text-center font-weight-bold" id="eitan">Lv3-3</div>
  </div>
  <div class="row my-3">
   <div class="doors col-4 text-center" id="english"><a href="/user/practice6" id="searchLink"><img src="/img/pointer.png" class="w-50" id="doortmp"></a></div>
   <div class="doors col-4 text-center" id="math"><a href="/user/practice7" id="searchLink1"><img src="/img/pointer.png" class="w-50" id="doortmp1"></a></div>
   <div class="doors col-4 text-center" id="eitan"><a href="" id="searchLink2"><img src="/img/pointer.png" class="w-50" id="doortmp2"></a></div>
  </div>
</div>
@endsection
