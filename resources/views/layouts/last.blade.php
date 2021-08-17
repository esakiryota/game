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
        src: url(/font/RocknRollOne-Regular.ttf);
      }
      body {
        background-image: url(/img/last_bg.png);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size:  600px;
        font-family: 'Myfont';
      }
      body:before{
        content:"";
        display:block;
        position:fixed;
        top:0;
        left:0;
        z-index:-1;
        width:100vw;
        height:100vh;
        background:url(/img/last_bg.png) center no-repeat;
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
      .disable {
        background-color: gray;
      }
      #judge {
        font-size: 12rem;
      }
      .answers {
        font-size: 25px;
      }
      /* .answers:active {
        color: gray;
      } */
      .cards:active {
        background-color: gray;
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
          background:url(/img/after_battle.png) center no-repeat;
          background-size:cover;
          height: 280px;
          font-family: 'Myfont';
          color: white;
        }
        .modal_btn:hover {
          background-color: gray;
        }
    </style>

    <body>
      <div class="hidden0" id="enemy_atack" style="width: 100%; height: 100%; position: fixed; z-index: 2147483647; text-align: center;">
        @foreach($image_list as $key => $value)
        <img class="hidden" width="600px" src='/img/beam/{{ $value }}' id='{{ $key }}' style="
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%)">
        @endforeach
      </div>
      <main>
      <div class="container">
        <div class="container fixed-top mt-5" id="back">
          <div class="row py">
            <!-- <div class="questions col-2 text-center my-1" id=""><img src="/img/candle0.png" class="w-100" id="afuro"></div> -->
            <div class="questions col text-center mt-3" id=""><img class="" id="afuro" width="100%" height="100%" style="max-width: 600px; max-height: 400px; "></div>
            <!-- <div class="questions col-2 text-center my-1" id=""><img src="/img/candle0.png" class="w-50" id="afuro"></div> -->
          </div>
          <!-- <div class="box" id="meter1" style="margin: auto;   width:30%; height:30px; background:linear-gradient(to bottom, #99ccff, #0059b3);border-radius:5%;"></div> -->
          <div class="box" id="meter1" style="margin: auto;   width:30%; height:30px; background:rgba(0,0,255,0.1) ;border-radius:5%;"></div>
          <div class="box" id="meter2" style="margin: auto;   width:20%; height:30px; border-radius:5%; "></div>
          <!-- <div class="row py">
            <div class="questions col text-center my-1" id=""><meter value="1.0" id="meter"></meter></div>
          </div> -->

        </div>
          <div class="conteiner">
            <div class="hidden text-warning text-center font-weight-bold fixed-top py-1"  id="judge"></div>
          </div>
      </div>
      <div class="conteiner">
        <div class="conteiner fixed-top py-4">
          <div class="row py-1">
            <div class="questions col text-center my-4" id=""><img src="/img/effect0.gif" class="hidden" id="image" width="300px"></div>
          </div>
        </div>
      </div>
      <div class="container fixed-top">
        <div class="row">
          <div class="col-4"></div>
          <div id="majic_image" class="questions col-4 text-center">
            @foreach($atack_image_list as $key => $value)
            <img id="atack_{{$key}}" class="hidden" src="/img/atack_animation/a_5/{{ $value }}" width="600px;;" style="
            position: absolute;
            top: 50%;
            left:50%;
            transform: translate(-50%, 0%);">
            @endforeach
          </div>
          <div class="col-12"></div>
        </div>
      </div>
      <div class="container fixed-top mt-5">
        <div class="row mt-5">
          <a class="questions col text-center mt-5" data-toggle="modal" data-target="#exampleModalCenter"><img src="/img/rotate-guard.gif" class="hidden0" id="bone" width="100px" height="100px"></a>
        </div>
      </div>
    </main>
    <footer>
      @yield('form')
    <div class="container fixed-bottom bg-light" style=" background-size:cover; box-shadow: 0px -10px 10px rgba(0, 0, 0, 0.4);">
      <div class="row">
        <img src="/img/heart.png" alt="" style="position: fixed; bottom: 240px; left: 1px;">
        <div class="pb-2" style="width:95%; height:20px; background:rgba(10, 0, 50, 0.4) ; position: fixed; left: 25px;border-radius: 15px; bottom: 240px; display: flex; padding: 5px 5px; box-shadow: 0px 2px 2px rgba(0,0,0,0.4);">
          <div class="label mb-2" style=" width:100%; height:10px; background:linear-gradient(0deg, rgba(200, 255, 0, .8), rgba(220, 255, 161, .8)); left: 30px;border-radius: 15px; " id="timer"></div>
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
  <div class="col-6" id="majic_icon">
    <div class="card cards" id="skill_card" ontouchstart>
      <div class="card-body answers text-center" style="font-size: 15px;">
        <img src="/img/skill_word.png" height="25px">
      </div>
    </div>
  </div>
</div>
    </div>

    <div class="conteiner">
      <div class="hidden text-warning text-center font-weight-bold fixed-bottom" id="judge" style="font-size: 170px;"></div>
    </div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: rgba(0,0,0,0)">
          <div class="modal-body" id="clear_modal">
            <div class="" id="modal_1"  style="">
              <div class="" style="font-size: 20px;">
                こうげきが <span id="ko_spa"></span> あがった<br>
                ぼうぎょが <span id="bo_spa"></span> あがった<br>
                けいけんちが <span id="ex_spa"></span> あがった
              </div>
              <div class="" id="next_btn" style="position: absolute; top: 80%; left: 40%">
                <button type="button" name="button" class="modal_btn">次に進む</button>
              </div>
            </div>
            <div class="" id="modal_2" style="">
              <div class="" style="position: absolute; top: 5%; font-size: 30px;">
                てきににげられた。
              </div>
              @if (Auth::check())
              <a href="{{$stage_lv[0]->url}}" style="color: white; text-decoration: none;">
                <div class="" id="replay_btn" style="position: absolute; top: 80%; left: 20%;">
                  <button type="button" name="button" class="modal_btn">もういちどたたかう</button>
                </div>
                </a>
              @else
              <a href="/experience/1-0" style="color: white; text-decoration: none;">
                <div class="" id="replay_btn" style=" position: absolute; top: 80%; left: 0">
                  <button type="button" name="button" class="modal_btn">もういちどたたかう</button>
                </div>
                </a>
              @endif
              <a href="/experience" style="color: white; text-decoration: none;">
                <div class="" id="back_btn" style="position: absolute; top: 80%; left: 70%">
                   <button type="button" name="button" class="modal_btn">戻る</button>
                </div>
              </a>
            </div>
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
