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
      background:url(/img/start-bg3.png) center no-repeat;
      background-size:cover;
    }
    </style>
  </head>
  <body>
    <h1>説明</h1>
    <div class="container my-5">
      <div class="row">
        <div class="col text-center"><img id="tmp"></div>
      </div>
    </div>
    <div class="container  fixed-bottom my-2">
      <div class="row mr-2">
        <div class="col-10">
          <div class="card" style="height: 6rem;">
            <div class="card-body" id="hukidasi"></div>
          </div>
        </div>
        <div class="col-2"><img src="/img/face2.png" class="" width="80px" height="80px"></div>
      </div>
    </div>
    <form action="/explain" method="post" id="display">
      {{ csrf_field() }}
    <input id="input" type="hidden" name="score">
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/explain.js') }}"></script>
  </body>
</html>
