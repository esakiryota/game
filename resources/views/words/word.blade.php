@extends('layouts.person')
@section('title', 'えいたんご')
@section('background', '/img/start-bg4.png')
@section('main-color', 'black')
@section('color', 'white')
@section('content')
<div class="row">
@foreach($englishWords as $key => $array)
  <div class="col-sm-6 mt-1">
    <div class="card">
      <div class="card-header">
        Lv{{$key}}
      </div>
      <ul class="list-group list-group-flush" style="font-family: italic;">
        @foreach($array as $value)
        <li class="list-group-item">{{$value->english}}: {{$value->japanese}}</li>
        @endforeach
      </ul>
    </div>
  </div>
@endforeach
</div>
@endsection
