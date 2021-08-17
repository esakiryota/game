@extends('layouts.person')
@section('title', '生徒')
@section('background', $main[0]->bg_image)
@section('main-color', 'white')
@section('color', 'white')
@section('content')
<style media="screen">
.card {
 box-shadow: 0 0 3px 0 rgba(0,0,0,.12), 0 2px 3px 0 rgba(0,0,0,.22);
 transition: .3s;
}
.card:hover {
 box-shadow: 0 15px 30px -5px rgba(0,0,0,.15), 0 0 5px rgba(0,0,0,.1);
 transform: translateY(-4px);
}
</style>
<div class="row mx-2">
@foreach($stage as $array)
  <div class="col-sm-4 my-2" style="">
    <a href="{{$array["url"]}}" id="searchLink" style="color: black; text-decoration: none;">
    <div class="card mx-3 mb-2" ontouchstart>
    <!-- <div class="card mx-3 mb-2" style="box-shadow: 0px -5px 5px rgba(0, 0, 0, 0.4);"> -->
      <div class="card-header">
        Lv{{$array["level"]}}
        @if($array["stage_id"] < $stage_max)
        clear
        @endif
      </div>
      <div class="card-body" style="
       font-size: 25px;
       background-image: url({{$array["stage_bg"]}});
       background-color:rgba(255,255,255,0.5);
       background-blend-mode:lighten;
       background-size: contain;
       ">
        {{$array["name"]}}
      </div>
    </div>
    </a>
  </div>
@endforeach
</div>
@endsection
