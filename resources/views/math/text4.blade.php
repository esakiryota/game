@extends('layouts.math')
@section('js')
<script src="https://www.gstatic.com/firebasejs/6.5.0/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-firestore.js"></script>
<script src="/js/text4.js"></script>
@endsection
@section('form')
  <div class="label col-8 border border-success text-success  text-center bg-light" id="timer"></div>
  <div class="label col-4 border border-success text-success text-center bg-light" id="answer"></div>
  <form action="/user/text4" method="post" id="display">
    {{ csrf_field() }}
  <input id="input" type="hidden" name="score">
</form>
@endsection
