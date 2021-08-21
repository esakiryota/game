<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="/img/icons/favicon.ico">
    <title>EiDan</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    @if(env('APP_ENV') == 'production')
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4WGDPTQD3S"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-4WGDPTQD3S');
    </script>
    @endif
    <style>
    @font-face {
      font-family: 'Myfont';
      src: url(/font/RocknRollOne-Regular.ttf);
    }
    body {
      font-family: 'Myfont';
      color: @yield('color');
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
        background:url(@yield('background')) center no-repeat;
        background-size:cover;
      }
      /* header {
        content:"";
        background:url(/img/status_field4.png) no-repeat;
        background-size:100% 100%;
      } */
      #main {
        color: @yield('main-color');
      }

      .position-marker{
  display: block;
  text-decoration: none;
  height:20px;
  width: 20px;
  line-height: 20px;
  text-align: center;
  color: #fff;
  background: red;
  border: solid 1px rgba(255, 255, 255, 0.5);
  border-radius: 50%;
  box-shadow: 0 0 0 6px red;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  -ms-transition: 0.3s;
  transition: 0.3s;
}
.position-marker:hover{
  opacity: 0.5;
  border: solid 1px #77b4fd;
}
.nav-pills .nav-link.active, .nav-pills .show > .nav-link {
    color: #fff;
    background-color: rgba(0, 0, 0, 0.1);
}

.bottombar:active {
  background-color: gray;
}
.bottombar:hover {
  background-color: rgba(128, 128, 128, 0.3);
}
@media screen and (max-width: 800px) {
	#right-nav {
    display: none;
  }
  body {
    font-size: 12px;
  }
}
@media screen and (min-width: 800px) {
	#bottom-nav {
    display: none;
  }
  body {
    font-size: 15px;
  }
}

.box {
  position: absolute;
}

</style>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script>
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
          $('[data-toggle="tooltip"]').css('font-family', 'Myfont')
        })
    </script>
  </head>
  <body>
    @if (Auth::check())
    <header class="fixed-top">
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="row">
            <img id="tmp" src="{{$url}}" style="position: absolute; top: 30px; left: 10px;" width="130px">
            <img src="/img/status_field4.png" alt="" style="position: absolute; top: 0; left: 0; max-width: 450px;" width="100%" height="200px">
            <p style="position: absolute; top: 15px; left: 180px;">{{$sql[0]->name}} Lv{{$sql[0]->level}}</p>
            <div style="position: absolute; top: 40px; left: 190px;">
              <div class="row" width="">
                <div class="">
                  EXP
                </div>
              </div>
              <div class="row">
                <div class="">
                  <p class="" style="position: absolute; width: 200px; height: 12px; background-color: rgba(0, 0, 0, 0.5); border-radius: 5px;"></p>
                  <p class="" style="position: absolute; width: {{ $ex_value }}px; height: 12px; background-color:  green; border-radius: 5px;" id="exp"></p>
                </div>
              </div>
              <div class="row mt-4">
                <p>こうげき: {{$sql[0]->atack}}   ぼうぎょ: {{$sql[0]->defense}}</p>
              </div>
              <div class="row">
                <p>スキル{{$tech}}<br>せつめい：てきに<span id="damager">{{$damage}}</span>のダメージ</p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </header>
    @else
    <div class="row">
      <header class="fixed-top col-12 col-md-6">
        <div class="d-flex bd-highlight ml-2">
        <div class="p-2 bd-highlight" style="font-size: 20px;">たいけん</div>
        <div class="p-2 bd-highlight" style="font-size: 20px;">Lv１</div>
        <div class="p-2 bd-highlight"><meter class="mt-2" id="experi" value="200" style="font-size: 20px;"></meter></div>
        </div>
      <div class="d-flex bd-highlight mb">
      <div class="p-2 bd-highlight"><img id="tmp" src="/img/chara0.gif" style="width: 100px;"></div>
      <div class="p-2 bd-highlight">
        <div class="d-flex justify-content-start bd-highlight">
         <div class="p-2 bd-highlight">ぼうぎょ：50</div>
         <div class="p-2 bd-highlight">こうげき：50</div>
        </div>
        <div class="d-flex justify-content-start bd-highlight">
         <div class="p-2 bd-highlight">わざ：いあいぎり</div>
        </div>
        <div class="d-flex justify-content-end bd-highlight">
          <div class="p-2 bd-highlight">せつめい：てきに<span id="damager">100</span>のダメージ</div>
        </div>
      </div>
      </div>
      </header>
    </div>
    @endif

  <main class="" style="margin-top: 200px;" id="main">

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><img src="/img/skyport.gif" width="50px"> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body" style="background:url(/img/start-bg-7.jpg) center; height: 470px;">
        <!-- <h5 class="modal-title" id="exampleModalCenterTitle"><img src="/img/skyport.gif" width="50px"> </h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
          <a href="/english" style="color: black;">
            <div class="" style="font-size: 20px; position: absolute; top: 40px;">
              <button type="button" id="" class="position-marker" data-toggle="tooltip" data-placement="right" title="えいごのうみ"></button>
            </div>
          </a>
            <a href="/hometown" style="color: black;">
              <div class="" style="font-size: 20px; position: absolute; top: 120px; left: 70%;">
                <button type="button" id="" class="position-marker" data-toggle="tooltip" data-placement="right" title="くんれんのむら">
                </button>
              </div>
            </a>
            <a href="/start" style="color: black;">
              <div class="" style="font-size: 20px; position: absolute; top: 160px; left: 50%;">
              <button type="button" id="" class="position-marker" data-toggle="tooltip" data-placement="right" title="はじまりのまち"></button>
            </div>
          </a>
            @if (isset($stage_max))
            @if($stage_max >= 21)
            <a href="/last" style="color: black;">
              <div class="" style="font-size: 20px; position: absolute; top: 270px; left: 50%;">
                <button type="button" id="" class="position-marker" data-toggle="tooltip" data-placement="right" title="さいごのしま"></button>
              </div>
            </a>
            @endif
            @endif
      </div>
   </div>
  </div>
</div>
     @yield('content')
  </main>
  @if (Auth::check())
  <footer>
    <nav class='d-flex' style="box-shadow: 0px 0px 10px rgba(50, 50, 50, 0.5); background-color: rgba(0,0,0,0.9); position: fixed; top: 0; right: 0; border-bottom-left-radius: 20px;">
    <ul class="nav justify-content-end" id="right-nav">
      <li class="nav-item bottombar px-3" ontouchstart>
        <!-- <a class="nav-link"　data-toggle="modal" data-target="#exampleModalCenter"><img src="/img/icon-map.png"></a> -->
        <a class="nav-link"  data-toggle="modal" data-target="#exampleModalCenter"><img src="/img/skyport.gif" width="30px"><br>いどう</a>
      </li>
      <li  class="nav-item bottombar px-3" ontouchstart>
        <a @if ($flag == 'wordsIndex') class="nav-link active" @else class="nav-link" @endif href="/words"><img src="/img/icon-book.png" width="30px"><br><span style="color: white;">ずかん</span></a>
      </li>
      <li class="nav-item bottombar px-3" ontouchstart>
        <a class="nav-link" @if ($flag == 'experience') style="background-color: rgba(128, 128, 128, 0.3)" @else  @endif  href="/hometown"><img src="/img/sord0.png" width="30px"><br><span style="color: white;">くんれん</span></a>
      </li>

      <li class="nav-item bottombar px-3" ontouchstart>
       <a class="nav-link" href="/start" style="color: white;"><img src="/img/icons/house_5.gif" width="30px"><br>まち</a>
      </li>
</ul>
</nav>
    <!-- <div > -->
      <nav class='fixed-bottom' style="box-shadow: 0px 0px 10px rgba(50, 50, 50, 0.5); background-color: rgba(0,0,0,0.9)" id="bottom-nav">
      <ul class="nav nav-pills nav-fill">
   <li class="nav-item bottombar" ontouchstart>
     <!-- <a class="nav-link"　data-toggle="modal" data-target="#exampleModalCenter"><img src="/img/icon-map.png"></a> -->
     <a class="nav-link"  data-toggle="modal" data-target="#exampleModalCenter"><img src="/img/skyport.gif" width="30px"><br>いどう</a>
   </li>
   <li  class="nav-item bottombar" ontouchstart>
     <a @if ($flag == 'wordsIndex') class="nav-link active" @else class="nav-link" @endif href="/words"><img src="/img/icon-book.png" width="30px"><br><span style="color: white;">ずかん</span></a>
   </li>
   <li class="nav-item bottombar" ontouchstart>
     <a class="nav-link" @if ($flag == 'experience') style="background-color: rgba(128, 128, 128, 0.3)" @else  @endif  href="/hometown"><img src="/img/sord0.png" width="30px"><br><span style="color: white;">くんれん</span></a>
   </li>

   <li class="nav-item bottombar" ontouchstart>
    <a class="nav-link" href="/start" style="color: white;"><img src="/img/icons/house_5.gif" width="30px"><br>まち</a>
   </li>
 </ul>
     </nav>
     <!-- </div> -->
  </footer>
  @endif



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="/js/popper.min.js"></script>
    <script type="text/javascript">
    (function(){
      var e = @json($ex_value);
      var val = e*200;
      console.log(@json($ex_value));
      $('#exp').css('width',val);
      $(function () {
  $('[data-toggle="popover"]').popover()
})
$(".position-marker").hover(function() {
  $("#english").css('display', 'inline');
})
})
    </script>
@if (session('message_id') != null)
    <div class="mask" style="position: fixed; top: 0; z-index: 21000000;">
      <div class="mask" style="width: 100vw; height: 100vh; background-color: rgba(0, 0, 0, 0.9); position: absolute; top: 0;"></div>
      <div id="mask">
      </div>
    </div>
    <input type="hidden" name="message_id" value="{{ session('message_id')}}" id="message_id">
    <script src="/js/mask.js">
    </script>
@endif





  </body>
</html>
