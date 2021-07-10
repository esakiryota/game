<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style media="screen">
    body:before{
      content:"";
      display:block;
      position:fixed;
      top:0;
      left:0;
      z-index:-1;
      width:100%;
      height:100vh;
      background:url(/img/classroom-bg0.jpg) center no-repeat;
      background-size:cover;
    }
    .hidden {
      opacity: 0;
    }
    </style>
  </head>
  <body>
    <div class="container fixed-top">
      <div class="row">
        <div class="col"><img id="tmp2"></div>
      </div>
    </div>
    <!-- <div class="hidden container fixed-bottom mb-5 pb-5" id="box">
      <div class="row text-center bg-primary py-2 mx-1 rounded border border-dark">
        <div class="questions col">問題</div>
      </div>
      <div class="row bg-light my-2 py-2 mx-1 rounded border border-dark">
        <div class="answers col text-center" id="answer1">回答</div>
      </div>
      <div class="row bg-light my-2 py-2 mx-1 rounded border border-dark">
        <div class="answers col text-center" id="answer2">回答</div>
      </div>
      <div class="row bg-light  mb-5 py-2 mx-1 rounded border border-dark" >
        <div class="answers col text-center"id="answer3">回答</div>
      </div>
    </div> -->
    <div class="container my-5">
      <div class="row">
        <div class="col text-center"><img id="tmp"></div>
      </div>
    </div>
    <div class="row mb-2">
      <div class="card col-12 text-center">
        <div class="col" id="question" style="font-size: 30px;">問題</div>
      </div>
    </div>
    <div class="row mb-2">
<div class="col-6">
  <div class="card cards" ontouchstart>
    <div class="card-body answers text-center" id="answer1" style="font-size: 15px;">
    </div>
  </div>
</div>
<div class="col-6">
  <div class="card cards" ontouchstart>
    <div class="card-body answers text-center" id="answer2" style="font-size: 15px;">
    </div>
  </div>
</div>
</div>
    <div class="row mb-2">
<div class="col-6" >
  <div class="card cards" ontouchstart>
    <div class="card-body answers text-center" id="answer3" style="font-size: 15px;">
    </div>
  </div>
</div>
    <div class="container  fixed-bottom my-2">
      <div class="row mr-2">
        <div class="col-10">
          <div class="card border border-dark" style="height: 6rem;">
            <div class="card-body" id="hukidasi"></div>
          </div>
        </div>
        <div class="col-2"><img src="/img/face4.png" class="" width="80px" height="80px"></div>
      </div>
    </div>
    <form action="/user/practice0" method="post" id="display">
      {{ csrf_field() }}
    <input id="input" type="hidden" name="score">
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/js/practice0.js"></script>
  </body>
</html>
