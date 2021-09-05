@extends('layouts.person')
@section('title', 'えいたんご')
@section('background', '/img/word_index.png')
@section('main-color', 'black')
@section('color', 'white')
@section('content')
<!-- <button type="button" name="button">スキル</button>
<button type="button" name="button">ガチャ</button> -->
<style media="screen">
.btn-real {
display: inline-block;
text-decoration: none;
color: rgba(152, 152, 152, 0.7);/*アイコン色*/
width: 80px;
height: 80px;
line-height: 80px;
font-size: 40px;
border-radius: 50%;
text-align: center;
overflow: hidden;
font-weight: bold;
background-image: linear-gradient(#e8e8e8 0%, #d6d6d6 100%);
text-shadow: 1px 1px 1px rgba(255, 255, 255, 0.66);
box-shadow: inset 0 2px 0 rgba(255,255,255,0.5), 0 2px 2px rgba(0, 0, 0, 0.19);
border-bottom: solid 2px #b5b5b5;
}
.btn-real p {
line-height: 80px;
}
.btn-real:active {
/*押したとき*/
box-shadow: inset 0 1px 0 rgba(255,255,255,0.5), 0 2px 2px rgba(0, 0, 0, 0.19);
border-bottom: none;
}
.hidden0 {
  display: none;
}

.card:hover {
  background-color: gray;
  color: white;
}
</style>

</div>
<div class="container mb-5">
  <div class="row mb-3">
    <div class="col-3">
      <span class="badge badge-pill badge-secondary">入手順</span>
    </div>
  </div>
  <div class="row">
    @foreach($user_skills as $key => $array)
  <div class="col-4 col-md-3">
    <div class="card mb-3 skill_cards" style="max-width: 540px;" data-id="{{$array->id}}" data-image="{{$array->image}}/{{$skill_images[$key][4]}}">
    <div class="row no-gutters">
    <div class="col-12 col-md-12">
      <img src="{{$array->image}}/{{$skill_images[$key][4]}}" style="position: relative; bottom: 0; left: 0; max-height: 200px; width: 100%; max-width: 200px;">
    </div>
    <div class="col-12 col-md-12 ">
      <div class="card-body">
        <h5 class="card-title" style="font-size: 12px;">{{$array->name}}</h5>
        <p class="card-text" style="font-size: 9px;">{{$array->damage}}のダメージ</p>
      </div>
    </div>
    </div>
    </div>
  </div>
  @endforeach
  </div>
  </div>
  <div class="row" id="skill_list">
  </div>
</div>
<a href="#" class="btn-real" style="position: fixed; bottom: 15%; right: 0;">
  <p data-toggle="modal" data-target="#gachaModal">宝箱</p>
</a>

<div class="modal fade" id="gachaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color: rgba(0,0,0,0.7);border: solid white;">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="container" style="color: white;">
          <div class="row text-center m-3">
            <div class="col-4"></div>
            <div class="col-4 text-center"　id="modal_message">石を3つ使いますか？</div>
            <div class="col-4"></div>
          </div>
          <div class="row mt-3">
            <div class="col-4"></div>
            <div class="col-4 text-center"><button type="button" name="button" id="box">開ける</button></div>
            <div class="col-4"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="mask" style="position: fixed; top: 0; z-index: 21000000;" id="main">
  <div id="mask">
  </div>
</div>
<script src="/js/gacha.js">
</script>
@endsection
