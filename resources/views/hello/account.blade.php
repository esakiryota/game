@extends('layouts.default')
@section('header')
<form class="" action="/account" method="post" id="form_control">
  {{ csrf_field() }}
  <input type="hidden" name="character" value="" id="character">
</form>
<style>
.card:hover {
  background-color: gray;
  color: white;
}

.title {
  font-size: 50px;
}

@media screen and (min-width: 1000px) {
  .title {
    font-size: 50px;
  }
}
@media screen and ( max-width: 1000px) {
  .title {
    font-size: 30px;
  }
}
</style>

<div class="container mb-5">
  <div class="row">
    <div class="col text-light title">
      キャラクターを選んでください
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-12 col-md-4">
      <div class="card mb-3" style="max-width: 540px;" id="charaA">
      <div class="row no-gutters">
      <div class="col-5 col-md-12">
        <img src="/img/characters/charaA-1.png" style="position: relative; bottom: 0; left: 0; max-height: 200px; width: 100%; max-width: 200px;">
      </div>
      <div class="col-7 col-md-12 ">
        <div class="card-body">
          <h5 class="card-title">村人A</h5>
          <p class="card-text">まほうつかいきぼう<br>きがつよいせいかく<br>まけずぎらい</p>
        </div>
      </div>
      </div>
      </div>
    </div>
    <div class="col-12 col-md-4"  id="charaB">
      <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-5 col-md-12">
        <img src="/img/characters/charaB-1.png" style="position: relative; bottom: 0; left: 0; max-height: 200px; width: 100%;  max-width: 200px;">
      </div>
      <div class="col-7 col-md-12">
        <div class="card-body">
          <h5 class="card-title">村人B</h5>
          <p class="card-text" >かくとうかきぼう<br>リーダーシップがある<br>ゆうきがある</p>
        </div>
      </div>
      </div>
      </div>
    </div>
    <div class="col-12 col-md-4" id="charaC">
      <div class="card mb-3" style="max-width: 540px;">
      <div class="row no-gutters">
      <div class="col-5 col-md-12">
        <img src="/img/characters/charaC-1.png" style="position: relative; bottom: 0; left: 0; max-height: 200px; width: 100%; max-width: 200px;">
      </div>
      <div class="col-7 col-md-12 ">
        <div class="card-body">
          <h5 class="card-title">村人C</h5>
          <p class="card-text">ソードマスターきぼう<br>あたまがいい<br>つねにれいせい</p>
        </div>
      </div>
      </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://www.gstatic.com/firebasejs/6.5.0/firebase-app.js"></script>
<script>
var charaA = document.getElementById('charaA')
var charaB = document.getElementById('charaB')
var charaC = document.getElementById('charaC')
var form_control = document.getElementById('form_control')
charaA.addEventListener('click', function() {
  if (confirm('むらびとAでよろしいですか？')) {
    document.getElementById('character').value = "A"
    form_control.submit();
  }
});

charaB.addEventListener('click', function() {
  if (confirm('むらびとBでよろしいですか？')) {
    document.getElementById('character').value = "B"
    form_control.submit();
  }
});

charaC.addEventListener('click', function() {
  if (confirm('むらびとCでよろしいですか？')) {
    document.getElementById('character').value = "C"
    form_control.submit();
  }
})
</script>
@endsection
