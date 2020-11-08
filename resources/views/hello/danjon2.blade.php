@extends('layouts.person')
@section('title', '生徒')
@section('background', $main[0]->bg_image)
@section('main-color', 'white')
@section('color', 'white')
@section('content')
  <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">さんすう</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">えいご</a>
    </li>
  </ul>
  <div class="tab-content mt-3" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <div class="english">
        @foreach($stage as $array)
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
        @endforeach
      </div>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <div class="english">
        @foreach($en_stage as $array)
        <a href="{{$array["url"]}}" id="searchLink" style="color: black; text-decoration: none;">
        <div class="card mx-3 mb-2">
          <div class="card-header">
            Lv{{$array["level"]}}
            @if($array["stage_id"] < $en_stage_max)
            clear
            @endif
          </div>
          <div class="card-body" style="font-size: 25px; background-image: url({{$array["stage_bg"]}}); background-color:rgba(255,255,255,0.5);background-blend-mode:lighten;">
            {{$array["name"]}}
          </div>
        </div>
        </a>
        @endforeach
      </div>
    </div>
  </div>
@endsection
