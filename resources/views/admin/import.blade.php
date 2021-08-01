@extends('layouts.app')
@section('content')
<h1>csvインポート</h1>
{!! Form::open(['url' => '/import', 'method' => 'post', 'files' => true]) !!}
{{ csrf_field() }}
<input type="file" name="csv" class="form-control bg-transparent px-0" accept="application/zip, .csv">
{{ Form::submit('インポート', ['class' => 'btn btn-dark rounded-pill px-4']) }}
{!! Form::close() !!}
@endsection
