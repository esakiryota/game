<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="jQuery.css" media="all"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
        background-image: #ddd url(/img/tougijo640.jpg) no-repeat center center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
      }
      body:before{
        content:"";
        display:block;
        position:fixed;
        top:0;
        left:0;
        z-index:-1;
        width:100%;
        height: 100%;
        background:#ddd url(/img/tougijo640.jpg) no-repeat center center;
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
        .box {
          position: absolute;
          left: 35%;
          /* -webkit-transform: translate(-50%, -50%); */
          /* -ms-transform: translate(-50%, -50%); */
        }
        .but {
          text-decoration: none;
          background: #668ad8;
          color: #FFF;
          border-bottom: solid 4px #627295;
          border-radius: 30px;
        }
        .but:active {
          -webkit-transform: translateY(4px);
          transform: translateY(4px);
          box-shadow: 0px 0px 1px rgba(0, 0, 0, 0.2);
          border-bottom: none;
        }
        #clear_modal {
          /* background:url(/img/after_battle.png) center no-repeat;
          background-size:cover;
          height: 280px; */
        }
    </style>

    <body>
      <main>
      <div class="conteiner">
        <div class="conteiner py-2" id="back" style="">
          <div class="row py">
            <div class="questions col text-center my-1" id=""><img class="w-50" id="afuro"></div>
          </div>
          <div class="row py">
            <div class="questions col text-center my-1" id="">解答:<span id="correct_answer">あ</span></div>
          </div>
          <!-- <div class="box" id="meter1" style="margin: auto;   width:30%; height:30px; background:rgba(0,0,255,0.1) ;border-radius:5%;"></div> -->
          <!-- <div class="box" id="meter2" style="margin: auto;   width:20%; height:30px; border-radius:5%; "></div> -->
        <!-- </div>
          <div class="conteiner">
            <div class="hidden text-warning text-center font-weight-bold fixed-top py-1"  id="judge"></div>
          </div> -->
      </div>
    </div>
      <!-- <div class="conteiner">
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
      </div> -->
      <!-- <div class="conteiner fixed-top mt-5">
        <div class="row mt-5">
          <a class="questions col text-center mt-5" data-toggle="modal" data-target="#exampleModalCenter"><img src="/img/rotate-guard.gif" class="hidden" id="bone" width="100px" height="100px"></a>
        </div>
          <div class="row">
            <div class="col-4" style="font-family: 'Myfont'; font-size: 50px; font-weight: bold;"><img src="/img/majic-icon0.png" class="w-50"  id="majic_icon"></div>
            <div class="col-8" style="font-family: 'Myfont'; font-size: 50px; font-weight: bold;"></div>
        </div>
      </div> -->
    </main>
    <footer>
      @yield('form')
    <div class="conteiner fixed-bottom" style="font-size: 36px;">
      <!-- <div class="row">
        <div class="label mb-1" style=" width:90%; height:15px; background:rgba(0,0,255,1) ; position: relative; left: 30px;border-radius: 15px;" id="timer"></div>
      </div> -->
      <div class="row text-center my-2" style="background: #668ad8; color: #FFF; border-bottom: solid 4px #627295; border-radius: 30px;">
        <div class="col" id="question" style="font-size: 40px;">問題</div>
      </div>
      <div class="but row text-center my-2 mx-2 rounded">
        <div class="answers col" id="answer1" style="font-size: 35px;">回答</div>
      </div>
      <div class="but row text-center my-2 mx-2 rounded">
        <div class="answers col" id="answer2" style="font-size: 35px;">回答</div>
      </div>
      <div class="but row text-center my-2 mx-2 rounded">
        <div class="answers col" id="answer3" style="font-size: 35px;">回答</div>
      </div>
    </div>

    <div class="conteiner">
      <div class="hidden text-warning text-center font-weight-bold fixed-bottom" id="judge" style="font-size: 170px;"></div>
    </div>
    <div class="container hidden">
      <a data-toggle="modal" data-target="#exampleModalCenter" id="modal">modal</a>
    </div>
    <div class="modal fade" data-backdrop="static" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body" id="clear_modal">
            <!-- modal -->
          </div>
          <div class="modal-footer">
            <button id="rem_btn" type="button" class="close" data-dismiss="modal" aria-label="Close">覚えた！</button>
          </div>
       </div>
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
