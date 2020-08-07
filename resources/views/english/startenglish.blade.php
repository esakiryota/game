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
    body {
      background-image: url(/img/battle-back0-1.jpg);
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size:  600px;
    }
    body:before{
      content:"";
      display:block;
      position:fixed;
      top:0;
      left:0;
      z-index:-1;
      width:100%;
      height:100vh;
      background:url(/img/battle-back0-1.jpg) center no-repeat;
      background-size:cover;
}
.buruburu {
  display: inline-block;
  animation: hurueru .1s  infinite;
  }
  meter {
    font-size: 20px;
  }

  @keyframes hurueru {
    0% {transform: translate(0px, 0px) rotateZ(0deg)}
    25% {transform: translate(4px, 4px) rotateZ(10deg)}
    50% {transform: translate(0px, 4px) rotateZ(0deg)}
    75% {transform: translate(4px, 0px) rotateZ(-10deg)}
    100% {transform: translate(0px, 0px) rotateZ(0deg)}
  }
  .hidden {
    opacity: 0;
  }
  .hidden0 {
    display: none;
  }
    </style>
  </head>
  <body>
    <header>
    <div class="conteiner">
      <div class="conteiner fixed-top py-2" id="back">
        <div class="row py">
          <!-- <div class="questions col-2 text-center my-1" id=""><img src="/img/candle0.png" class="w-100" id="afuro"></div> -->
          <div class="questions col text-center my-1" id=""><img src="/img/enemy9.png" class="w-50" id="afuro"></div>
          <!-- <div class="questions col-2 text-center my-1" id=""><img src="/img/candle0.png" class="w-50" id="afuro"></div> -->
        </div>
        <div class="row py">
          <div class="questions col text-center my-1" id=""><meter value="1.0" id="meter"></meter></div>
        </div>
      </div>
    </div>
    <div class="conteiner">
      <div class="conteiner fixed-top py-4">
        <div class="row py-1">
          <div class="questions col text-center my-4" id=""><img src="/img/effect0.gif" class="w-50 hidden" id="image"></div>
        </div>
      </div>
    </div>
    <div class="conteiner">
      <div class="conteiner fixed-top py-4">
        <div class="row py-1">
          <div id="majic_image" class="questions col text-center my-4"></div>
        </div>
      </div>
    </div>

    <div class="conteiner fixed-top mt-5">
      <div class="row mt-5">
        <div class="questions col text-center mt-5" id=""><img src="/img/rotate-guard.gif" class="hidden" id="bone" width="100px" height="100px"></div>
      </div>
      <div class="row">
        <div class="col-4" style="font-family: 'Myfont'; font-size: 50px; font-weight: bold;"><img src="/img/majic-icon0.png" class="w-50"  id="majic_icon"></div>
        <div class="col-8" style="font-family: 'Myfont'; font-size: 50px; font-weight: bold;"></div>
      </div>
    </div>
    </header>
    <footer>
      <div class="conteiner">
        <div class="row text-center my-2  mx-2">
          <div class="col-4 rounded text-light" id="timer" style="font-size: 25px"></div>
          <div class="col-8"></div>
        </div>
      </div>
    <div class="conteiner fixed-bottom" style="font-size: 36px;">
      <div class="row text-center text-light my-2">
        <div class="col" id="question">問題</div>
      </div>
      <div class="row bg-light text-center my-2 mx-2 rounded">
        <div class="answers col" id="answer1">回答</div>
      </div>
      <div class="row bg-light text-center my-2 mx-2 rounded">
        <div class="answers col" id="answer2">回答</div>
      </div>
      <div class="row bg-light text-center my-2 mx-2 rounded">
        <div class="answers col" id="answer3">回答</div>
      </div>
    </div>

      <div class="conteiner">
        <div class="hidden text-warning text-center font-weight-bold fixed-bottom" id="judge" style="font-size: 170px;"></div>
      </div>
    <form action="/start/english" method="post" id="display">
      {{ csrf_field() }}
    <input id="input" type="hidden" name="score">
  </form>
  </footer>
  <script src="https://www.gstatic.com/firebasejs/6.5.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-database.js"></script>
  <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-firestore.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/js/startenglish.js"></script>
  </body>
</html>
