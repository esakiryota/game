@extends('layouts.app')
@section('content')
<h1>画像切り抜き</h1>
{!! Form::open(['url' => '/pipo_animation', 'method' => 'post', 'files' => true, 'enctype'=>"multipart/form-data"]) !!}
{{ csrf_field() }}
<!-- <input type="file" name="csv" class="form-control bg-transparent px-0" accept="application/zip, .csv"> -->
<input type="file" name="img"　class="form-control bg-transparent px-0" accept="image/jpeg, image/png">
<label>ファイル名</label>
<input type="text" name="filename" class="form-control bg-transparent px-0">
<label> 高さ </label>
<input type="number" name="height" class="form-control bg-transparent px-0" value="120">
<label> 幅 </label>
<input type="number" name="width" class="form-control bg-transparent px-0" value="120">
{{ Form::submit('インポート', ['class' => 'btn btn-dark rounded-pill px-4']) }}
{!! Form::close() !!}

@if (session('success') != null)
<p>{{ session('success') }}</p>
@endif
@endsection
