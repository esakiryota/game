<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>STUDY ROOM</title>
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
      header {
        content:"";
        background:url(/img/status_field3.png) no-repeat;
        background-size:100% 100%;
      }
      #main {
        color: @yield('main-color');
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
}
@media screen and (min-width: 800px) {
	#bottom-nav {
    display: none;
  }
}

</style>
  </head>
  <body>
    @if (Auth::check())
    <div class="row">
      <header class="fixed-top col-12 col-md-6">
        <div class="d-flex bd-highlight ml-2">
        <div class="p-2 bd-highlight" style="font-size: 20px;">{{$sql[0]->name}}</div>
        <div class="p-2 bd-highlight" style="font-size: 20px;">Lv{{$sql[0]->level}}</div>
        <div class="p-2 bd-highlight" style="font-size: 20px;">EXP</div>
        <div class="p-2 bd-highlight"><meter class="pt-2 mt-2" id="experi" value="{{$ex_value}}" style="font-size: 20px;"></meter></div>
        </div>
      <div class="d-flex bd-highlight mb">
      <div class="p-2 bd-highlight"><img id="tmp" src="{{$url}}" style="width: 100px;"></div>
      <div class="p-2 bd-highlight">
        <div class="d-flex justify-content-start bd-highlight">
         <div class="p-2 bd-highlight">ぼうぎょ：{{$sql[0]->defense}}</div>
         <div class="p-2 bd-highlight">こうげき：{{$sql[0]->atack}}</div>
        </div>
        <div class="d-flex justify-content-start bd-highlight">
         <div class="p-2 bd-highlight">わざ：{{$tech}}</div>
        </div>
        <div class="d-flex justify-content-end bd-highlight">
          <div class="p-2 bd-highlight">せつめい：てきに<span id="damager">{{$damage}}</span>のダメージ</div>
        </div>
      </div>
      </div>
      </header>
    </div>
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
      <div class="modal-body" style="background:url(/img/start-bg6.png) center; height: 500px;">
        <!-- <h5 class="modal-title" id="exampleModalCenterTitle"><img src="/img/skyport.gif" width="50px"> </h5> -->
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            <a href="/english" style="color: black;"><div class="" style="font-size: 20px; position: absolute; top: 40px;">えいごのうみ</div></a>
            <a href="/hometown" style="color: black;"><div class="" style="font-size: 20px; position: absolute; top: 120px; left: 70%;">くんれんのまち</div></a>
            <a href="/math" style="color: black;"><div class="" style="font-size: 20px; position: absolute; top: 150px; left: 10%;">さんすうのゆきやま</div></a>
            <a href="/start" style="color: black;"><div class="" style="font-size: 20px; position: absolute; top: 160px; left: 50%;">はじまりのむら</div></a>
            @if (isset($stage_max))
            @if($stage_max >= 21)
            <a href="/last" style="color: black;"><div class="" style="font-size: 20px; position: absolute; top: 270px; left: 50%;">さいごのしま</div></a>
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
       <a class="nav-link" @if ($flag == 'english') style="background-color: rgba(128, 128, 128, 0.3)" @endif 　href="/hometown"><img src="/img/icon-map.png" width="30px"><br>まち</a>
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
    <a class="nav-link" @if ($flag == 'english') style="background-color: rgba(128, 128, 128, 0.3)" @endif 　href="/hometown"><img src="/img/icon-map.png" width="30px"><br>まち</a>
   </li>
 </ul>
     </nav>
     <!-- </div> -->
  </footer>
  @endif



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <script src="https://www.gstatic.com/firebasejs/6.5.0/firebase-app.js"></script> -->
    <script src="https://www.gstatic.com/firebasejs/6.5.0/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#config-web-app -->
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-firestore.js"></script>

    <script src="/js/person.js">
    </script>
    @if (session('message_id') != null)
    <div class="mask" id="mask" style="position: fixed; top: 0; z-index: 21000000;"></div>
    <input type="hidden" name="message_id" value="{{ session('message_id') }}" id="message_id">
    <script src="/js/mask.js">
    </script>
    @endif


  </body>
</html>
