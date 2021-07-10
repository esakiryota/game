@extends('layouts.person')
@section('title', '生徒')
@section('background', $main[0]->bg_image)
@section('main-color', 'white')
@section('color', 'white')
@section('content')
<div class="row">
@foreach($stage as $array)
  <div class="col-sm-4">
    <a href="{{$array["url"]}}" id="searchLink" style="color: black; text-decoration: none;">
    <div class="card mx-3 mb-2">
      <div class="card-header">
        Lv{{$array["level"]}}
        @if($array["stage_id"] < $stage_max)
        clear
        @endif
      </div>
      <div class="card-body" style="font-size: 25px; background-image: url({{$array["stage_bg"]}}); background-color:rgba(255,255,255,0.5);background-blend-mode:lighten;">
        {{$array["name"]}}
      </div>
    </div>
    </a>
  </div>
@endforeach
</div>
@endsection
