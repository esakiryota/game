@extends('layouts.person')
@section('title', 'えいたんご')
@section('background', '/img/word_index.png')
@section('main-color', 'black')
@section('color', 'white')
@section('content')
<div class="row mx-5">
@foreach($englishWords as $key => $array)
  <div class="col-sm-6 mt-3">
    <div class="card" style="background-color: rgba(0,0,0,0.5);">
      <div class="card-header" style="color: white;">
        Lv{{$key}}
      </div>
      <ul class="list-group list-group-flush" style="font-family: italic; background-color: rgba(0,0,0,0.2);">
        @foreach($array as $value)
        <li class="list-group-item" style="background-color: rgba(0,0,0,0.2); color: white;">{{$value->english}}: {{$value->japanese}}</li>
        @endforeach
      </ul>
    </div>
  </div>
@endforeach
</div>
@endsection
