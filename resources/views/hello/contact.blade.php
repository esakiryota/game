@extends('layouts.default')

@section('content')
<div class="container" style="
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
-webkit-transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%)"
>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);">

                <div class="card-body">
                    <form class="" method="POST" action="{{ route('contact') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('題名') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('メッセージ内容') }}</label>

                            <div class="col-md-6">
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="6"></textarea>
                            </div>
                        </div>
                         <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-dark">
                                    {{ __('送信') }}
                                </button>
                            </div>
                        </div>
                        @if (session('message') != null)
                        <div class="">
                          {{ session('message') }}
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
