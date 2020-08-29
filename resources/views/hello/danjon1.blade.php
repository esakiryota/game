@extends('layouts.person')
@section('title', '生徒')
@section('background', '/img/start-bg-snow.jpg')
@section('main-color', 'black')
@section('color', 'black')
@section('content')
<div class="container">
  <div class="row">
    <div class="col" style="font-size: 30px;">
      さんすうのゆきやま
    </div>
  </div>
</div>
<div class="accordion" id="accordionExample">
  <div class="card mb-2 mx-3">
    <div class="card-header" id="headingOne">
      <h2 class="pb-0 mb-1">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Lv1 しょきゅう
        </button>
      </h2>
    </div>
    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Lv1-1 たしざん
      </div>
      <div class="card-body">
        Lv1-2 ひきざん
      </div>
      <div class="card-body">
        Lv1-3 わりざん
      </div>
    </div>
  </div>
  <div class="card mb-2 mx-3">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-1 ">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Lv2 ちゅうきゅう
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        かけざん
      </div>
    </div>
  </div>
  <div class="card mb-2 mx-3">
    <div class="card-header" id="headingThree">
      <h2 class="mb-1">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Lv3 じょうきゅう
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        2けたのかけざん
      </div>
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
   <div class="doors col-4 text-center" id="english"><a href="/user/text0" id="searchLink"><img src="/img/pointer.png" class="w-50" id="doortmp"></a></div>
   <div class="doors col-4 text-center" id="math"><a href="/user/text1" id="searchLink1"><img src="/img/pointer.png" class="w-50" id="doortmp1"></a></div>
   <div class="doors col-4 text-center" id="eitan"><a href="/user/text2" id="searchLink2"><img src="/img/pointer.png" class="w-50" id="doortmp2"></a></div>
  </div>
</div>
<div class="container">
  <div class="row my-3">
   <div class="col-4 text-center font-weight-bold" id="english">Lv2-1</div>
   <div class="col-4 text-center font-weight-bold" id="math">Lv2-2</div>
   <div class="col-4 text-center font-weight-bold" id="eitan">Lv2-3</div>
  </div>
  <div class="row my-3">
   <div class="doors col-4 text-center" id="english"><a href="/user/text3" id="searchLink"><img src="/img/pointer.png" class="w-50" id="doortmp"></a></div>
   <div class="doors col-4 text-center" id="math"><a href="/user/text4" id="searchLink1"><img src="/img/pointer.png" class="w-50" id="doortmp1"></a></div>
   <div class="doors col-4 text-center" id="eitan"><a href="/user/text5" id="searchLink2"><img src="/img/pointer.png" class="w-50" id="doortmp2"></a></div>
  </div>
</div>
@endsection
