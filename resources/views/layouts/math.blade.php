<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="jQuery.css" media="all">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
    <title>STUDY ROOM</title>
    <style media="screen">
    /* #tabber {
      font-family: 'Press Start 2P', cursive;
      background-color: black;
      } */
      @font-face {
        font-family: 'Myfont';
        src: url(/font/GD-DOTFONT-DQ-TTF_008.ttf);
      }
      body {
        background-image: url(/img/battle-back-snow.jpg);
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
        height:70vh;
        background:url(/img/battle-back-snow.jpg) center no-repeat;
        background-size:cover;
}

      .damys {
        opacity: 0;
      }

      .hidden {
        opacity: 0;
      }
      .hidden0 {
        display: none;
      }
      #judge {
        font-size: 12rem;
      }
      .answers {
        font-size: 25px;
      }
      .questions {
        font-size: 40px;
      }
      .solves {
        font-size: 40px;
      }
      .label {
        font-size: 25px;
      }
      #replay {
        font-size: 25px;
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
        /* #back {
            background-image: url(/img/battle-back0-1.jpg);
            background-size:  cover;
        } */
    </style>

    <body>
      <main>
      <div class="conteiner">
        <div class="conteiner fixed-top py-2" id="back">
          <div class="row py">
            <!-- <div class="questions col-2 text-center my-1" id=""><img src="/img/candle0.png" class="w-100" id="afuro"></div> -->
            <div class="questions col text-center my-1" id=""><img class="w-50" id="afuro"></div>
            <!-- <div class="questions col-2 text-center my-1" id=""><img src="/img/candle0.png" class="w-50" id="afuro"></div> -->
          </div>
          <div class="row py">
            <div class="questions col text-center my-1" id=""><meter value="1.0" id="meter"></meter></div>
          </div>
        </div>
          <div class="conteiner">
            <div class="hidden text-warning text-center font-weight-bold fixed-top py-1"  id="judge"></div>
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
          <div class="questions col text-center mt-5" id=""><img src="/img/rotate-sord.gif" class="hidden" id="bone" width="100px" height="100px"></div>
        </div>
          <div class="row">
            <div class="col-4" style="font-family: 'Myfont'; font-size: 50px; font-weight: bold;"><img src="/img/majic-icon0.png" class="w-50"  id="majic_icon"></div>
            <div class="col-8" style="font-family: 'Myfont'; font-size: 50px; font-weight: bold;"></div>
        </div>
      </div>
      <div class="conteiner text-light">
          <div class="damys row py-3">
            <div class="questions col-8 text-center" id="">問題</div>
          </div>
          <div class="damys row py-3">
            <div class="questions col-8 text-center" id="">問題</div>
          </div>
          <div class="damys row py-2">
            <div class="questions col-8 text-center" id="">問題</div>
          </div>
        <div class="kill row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q1">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="kill row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q2">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="kill row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q3">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="kill row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q4">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="kill row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q5">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="kill row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q6">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="kill row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q7">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="kill row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q8">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="kill row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q9">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="kill row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q10">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="kill row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q11">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="kill row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q12">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="kill row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q13">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="kill row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q14">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="kill row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q15">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="kill row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q16">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="kill row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q17">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="kill row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q18">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="kill row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q19">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="kill row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q20">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="correct hidden text-warning col-1 text-center">○</div>
          <div class="wrong hidden text-warning col-1 text-center">X</div>
          <div class="col-8 text-center"></div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="correct hidden text-warning col-1 text-center">○</div>
          <div class="wrong hidden text-warning col-1 text-center">X</div>
          <div class="col-8 text-center"></div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="correct hidden text-warning col-1 text-center">○</div>
          <div class="wrong hidden text-warning col-1 text-center">X</div>
          <div class="col-8 text-center"></div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="correct hidden text-warning col-1 text-center">○</div>
          <div class="wrong hidden text-warning col-1 text-center">X</div>
          <div class="hidden col-8 text-center" id="lastScore"></div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="correct hidden text-warning col-1 text-center">○</div>
          <div class="wrong hidden text-warning col-1 text-center">X</div>
          <div class="col-8 text-center"></div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="correct hidden text-warning col-1 text-center">○</div>
          <div class="wrong hidden text-warning col-1 text-center">X</div>
          <div class="col-8 text-center"></div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="correct hidden text-warning col-1 text-center">○</div>
          <div class="wrong hidden text-warning col-1 text-center">X</div>
          <div class="col-8 text-center"></div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="correct hidden text-warning col-1 text-center">○</div>
          <div class="wrong hidden text-warning col-1 text-center">X</div>
          <div class="col-8 text-center"></div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="correct hidden text-warning col-1 text-center">○</div>
          <div class="wrong hidden text-warning col-1 text-center">X</div>
          <div class="col-8 text-center"></div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="correct hidden text-warning col-1 text-center">○</div>
          <div class="wrong hidden text-warning col-1 text-center">X</div>
          <div class="col-8 text-center"></div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="correct hidden text-warning col-1 text-center">○</div>
          <div class="wrong hidden text-warning col-1 text-center">X</div>
          <div class="col-8 text-center"></div>
          <div class="solves col-2  text-center"></div>
        </div>
      </div>
    </main>
    <footer>
      <div class="conteiner fixed-bottom" id="tabber">
        <div class="row">
        @yield('form')
        </div>
        <div class="row">
          <div class="answers col border border-dark text-dark  text-center bg-light">1</div>
          <div class="answers col border border-dark text-dark text-center bg-light">2</div>
          <div class="answers col border border-dark text-dark text-center bg-light">3</div>
        </div>
        <div class="row">
          <div class="answers col border border-dark text-dark text-center bg-light">4</div>
          <div class="answers col border border-dark text-dark text-center bg-light">5</div>
          <div class="answers col border border-dark text-dark text-center bg-light">6</div>
        </div>
        <div class="row">
          <div class="answers col border border-dark text-dark text-center bg-light">7</div>
          <div class="answers col border border-dark text-dark text-center bg-light">8</div>
          <div class="answers col border border-dark text-dark text-center bg-light">9</div>
        </div>
        <div class="row">
          <div class="answers col border border-dark text-dark text-center bg-light">0</div>
          <div class="answers col border border-dark text-dark text-center bg-light" id="okbtn">OK</div>
          <div class="answers col border border-dark text-dark text-center bg-light " id="vanish">X</div>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    @yield('js')
</html>
