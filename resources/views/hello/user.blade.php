@extends('layouts.default')
@section('title', '生徒')
@section('person')
<style media="screen">
body:before{
  content:"";
  display:block;
  position:fixed;
  top:0;
  left:0;
  z-index:-1;
  width:100%;
  height:100vh;
  background:url(/img/start-bg5.png) center no-repeat;
  background-size:cover;
}
</style>
<div class="conteiner">
  <div class="row">
    <div class="col-2"><img src="/img/candle0.png" class="w-100"></div>
    <div class="col-8"><h1 id="nameid" class="mb-4 font-weight-bold" style="font-size: 80px; font-weight: bold;"></h1></div>
    <div class="col-2"><img src="/img/candle0.png" class="w-100"></div>
  </div>
</div>
@endsection
@section('header')
@endsection
@section('content')
<div class="conteiner my-3 mx-3 border-bottom">
  <div class="row my-2">
    <div id="level" class="col mt-5 text-light" style="font-size: 30px; font-weight: bold;">Lv {{$sql[0]->level}}</div>
    <div class="col mt-5 py-3"><meter id="experi" value="{{$sql[0]->experience/100}}"></meter></div>
    <div class="col mt-5" id="char"><img id="tmp" src="{{$url}}" class="w-50"></div>
  </div>
  <div class="row mt-2">
    <div class="col-6 text-light" style="font-size: 35px; font-weight: bold;">ぼうぎょ：</div>
    <div id="enlevel" class="col-3 text-light" style="font-size: 35px; font-weight: bold;">{{$sql[0]->defense}}</div>
    <div class="col-3 text-light"><img src="/img/wear0.png" class="w-100"></div>
  </div>
  <div class="row">
    <div class="col-6 text-light" style="font-size: 35px; font-weight: bold;">こうげき：</div>
    <div id="mathlevel" class="col-3 text-light" style="font-size: 35px; font-weight: bold;" >{{$sql[0]->atack}}</div>
    <div class="col-3"><img src="/img/sord0.png" class="w-100"></div>
  </div>
</div>
<div class="conteiner my-3 mx-3 border-bottom">
  <div class="row my-2">
    <div class="col text-light" style="font-size: 35px; font-weight: bold;">わざ：</div>
    <div id="majician" class="col text-light" style="font-size: 35px; font-weight: bold;">{{$tech}}</div>
  </div>
  <div class="row my-2">
    <div class="col text-light" style="font-size: 35px; font-weight: bold;">せつめい：</div>
    <div class="majic col text-light" style="font-size: 35px; font-weight: bold;">てきに<span id="damager">{{$damage}}</span>のダメージ</div>
  </div>
</div>
<div class="container">
  <div class="row">
    <a href="/user/move">
    <div class="col " style="font-size: 50px; font-weight: bold;">
      いどう
    </div>
  </a>
  </div>
</div>
<div class="conteiner py-5">
  <div class="row mx-2">
    <div class="col">
      <h3 style="font-size: 50px; font-weight: bold;">さんすう</h3>
    </div>
  </div>
<div class="row my-3 mx-2">
 <div class="col-4 text-center font-weight-bold" id="english">Lv1-1</div>
 <div class="col-4 text-center font-weight-bold" id="math">Lv1-2</div>
 <div class="col-4 text-center font-weight-bold" id="eitan">Lv1-3</div>
</div>
<div class="row my-3 mx-2">
 <div class="doors col-4" id="english"><a id="searchLink"><img src="/img/door-close-1.png" class="w-100" id="doortmp"></a></div>
 <div class="doors col-4" id="math"><a id="searchLink1"><img src="/img/door-close-1.png" class="w-100" id="doortmp1"></a></div>
 <div class="doors col-4" id="eitan"><a id="searchLink2"><img src="/img/door-close-1.png" class="w-100" id="doortmp2"></a></div>
</div>
<div class="row my-3 mx-2">
 <div class="col-4 text-center font-weight-bold" id="english">Lv2-1</div>
 <div class="col-4 text-center font-weight-bold" id="math">Lv2-2</div>
 <div class="col-4 text-center font-weight-bold" id="eitan">Lv2-3</div>
</div>
<div class="row my-3 mx-2">
 <div class="doors col-4" id="english"><a id="searchLink3"><img src="/img/door-close-1.png" class="w-100" id="doortmp3"></a></div>
 <div class="doors col-4" id="math"><a id="searchLink4"><img src="/img/door-close-1.png" class="w-100" id="doortmp4"></a></div>
 <div class="doors col-4" id="eitan"><a id="searchLink5"><img src="/img/door-close-1.png" class="w-100" id="doortmp5"></a></div>
</div>
<div class="row my-3 mx-2">
 <div class="col-4 text-center font-weight-bold" id="english">Lv3-1</div>
 <div class="col-4 text-center font-weight-bold" id="math">Lv3-2</div>
 <div class="col-4 text-center font-weight-bold" id="eitan">Lv3-3</div>
</div>
<div class="row my-3 mx-2">
 <div class="col-4" id="english"><a href=""><img src="/img/door-close-1.png" class="w-100" id="doortmp6"></a></div>
 <div class="col-4" id="math"><a href=""><img src="/img/door-close-1.png" class="w-100" id="doortmp7"></a></div>
 <div class="col-4" id="eitan"><a href=""><img src="/img/door-close-1.png" class="w-100" id="doortmp8"></a></div>
</div>
</div>
<div class="conteiner py-5">
  <div class="row mx-2">
    <div class="col">
      <h3 style="font-size: 50px; font-weight: bold;">えいご</h3>
    </div>
  </div>
<div class="row my-3 mx-2">
 <div class="col-4 text-center font-weight-bold" id="english">Lv1-1</div>
 <div class="col-4 text-center font-weight-bold" id="math">Lv1-2</div>
 <div class="col-4 text-center font-weight-bold" id="eitan">Lv1-3</div>
</div>
<div class="row my-3 mx-2">
 <div class="col-4" id="english"><a href="user/entext0"><img src="/img/door-open-1.png" alt="" class="w-100 rounded"></a></div>
 <div class="col-4" id="math"><a href=""><img src="/img/door-close-1.png" alt="" class="w-100 rounded"></a></div>
 <div class="col-4" id="eitan"><a href=""><img src="/img/door-close-1.png" alt="" class="w-100 rounded"></a></div>
</div>
<div class="row my-3 mx-2">
 <div class="col-4 text-center font-weight-bold" id="english">Lv2-1</div>
 <div class="col-4 text-center font-weight-bold" id="math">Lv2-2</div>
 <div class="col-4 text-center font-weight-bold" id="eitan">Lv2-3</div>
</div>
<div class="row my-3 mx-2">
 <div class="col-4" id="english"><a href=""><img src="/img/door-close-1.png" alt="" class="w-100 rounded"></a></div>
 <div class="col-4" id="math"><a href=""><img src="/img/door-close-1.png" alt="" class="w-100 rounded"></a></div>
 <div class="col-4" id="eitan"><a href=""><img src="/img/door-close-1.png" alt="" class="w-100 rounded"></a></div>
</div>
<div class="row my-3 mx-2">
 <div class="col-4 text-center font-weight-bold" id="english">Lv3-1</div>
 <div class="col-4 text-center font-weight-bold" id="math">Lv3-2</div>
 <div class="col-4 text-center font-weight-bold" id="eitan">Lv3-3</div>
</div>
<div class="row my-3 mx-2">
 <div class="col-4" id="english"><a href=""><img src="/img/door-close-1.png" alt="" class="w-100 rounded"></a></div>
 <div class="col-4" id="math"><a href=""><img src="/img/door-close-1.png" alt="" class="w-100 rounded"></a></div>
 <div class="col-4" id="eitan"><a href=""><img src="/img/door-close-1.png" alt="" class="w-100 rounded"></a></div>
</div>
</div>
  <div class="row mx-2">
    <div class="col">
      <h3 style="font-size: 50px; font-weight: bold;">じゅぎょう</h3>
    </div>
  </div>
<div class="row my-3 mx-2">
 <div class="col-4 text-center font-weight-bold" id="english">サンプル</div>
 <div class="col-4 text-center font-weight-bold" id="math">ばいすう</div>
 <div class="col-4 text-center font-weight-bold" id="eitan">やくすう</div>
</div>
<div class="row my-3 mx-2">
 <div class="col-4" id="english"><a href="user/danjon1"><img src="/img/door-open-1.png" alt="" class="w-100 rounded"></a></div>
 <div class="col-4" id="math"><a href="user/practice1"><img src="/img/door-open-1.png" alt="" class="w-100 rounded"></a></div>
 <div class="col-4" id="eitan"><a href="user/practice2"><img src="/img/door-open-1.png" alt="" class="w-100 rounded"></a></div>
</div>
<div class="row my-3 mx-2">
 <div class="col-4 text-center font-weight-bold" id="english">ぶんすう</div>
 <div class="col-4 text-center font-weight-bold" id="math">めんせき</div>
 <div class="col-4 text-center font-weight-bold" id="eitan">たんいりょう</div>
</div>
<div class="row my-3 mx-2">
 <div class="col-4" id="english"><a href="user/practic3"><img src="/img/door-open-1.png" alt="" class="w-100 rounded"></a></div>
 <div class="col-4" id="math"><a href="user/practice4"><img src="/img/door-open-1.png" alt="" class="w-100 rounded"></a></div>
 <div class="col-4" id="eitan"><a href="user/practice5"><img src="/img/door-open-1.png" alt="" class="w-100 rounded"></a></div>
</div>
<div class="row my-3 mx-2">
 <div class="col-4 text-center font-weight-bold" id="english">はやさ</div>
 <div class="col-4 text-center font-weight-bold" id="math">ぶんすうとしょうすう</div>
 <div class="col-4 text-center font-weight-bold" id="eitan">わりあい</div>
</div>
<div class="row my-3 mx-2">
 <div class="col-4" id="english"><a href="user/practice6"><img src="/img/door-open-1.png" alt="" class="w-100 rounded"></a></div>
 <div class="col-4" id="math"><a href="user/practice7"><img src="/img/door-open-1.png" alt="" class="w-100 rounded"></a></div>
 <div class="col-4" id="eitan"><a href="user/practice8"><img src="/img/door-open-1.png" alt="" class="w-100 rounded"></a></div>
</div>
</div>
<script src="https://www.gstatic.com/firebasejs/6.5.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-firestore.js"></script>

<script src="/js/user.js">
</script>
@endsection
