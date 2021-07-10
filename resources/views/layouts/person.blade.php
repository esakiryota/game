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
      src: url(/font/GD-DOTFONT-DQ-TTF_008.ttf);
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
        /* display:block; */
        /* position:fixed; */
        /* top:0;
        left:0;
        z-index:-1; */
        /* width:100vw; */
        /* height:100vh; */
        background:url(/img/status_field3.png) no-repeat;
        background-size:100% 100%;
      }
      #main {
        color: @yield('main-color');
      }
      /* .modal-body {
    max-height:400px;
    overflow-y: auto;
} */
.nav-pills .nav-link.active, .nav-pills .show > .nav-link {
    color: #fff;
    background-color: rgba(0, 0, 0, 0.1);
}

</style>
  </head>
  <body>
    <div class="row">
      <header class="fixed-top col-12 col-md-6">
        <div class="d-flex bd-highlight ml-2">
        <div class="p-2 bd-highlight" style="font-size: 20px;">{{$sql[0]->name}}</div>
        <div class="p-2 bd-highlight" style="font-size: 20px;">Lv{{$sql[0]->level}}</div>
        <div class="p-2 bd-highlight"><meter class="mt-2" id="experi" value="{{$ex_value}}" style="font-size: 20px;"></meter></div>
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
      </div>
   </div>
  </div>
</div>
     @yield('content')
  </main>
  <footer>
    <!-- <div > -->
      <nav class='fixed-bottom' style="background-color: white; box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);">
      <ul class="nav nav-pills nav-fill">
   <li class="nav-item">
     <!-- <a class="nav-link"　data-toggle="modal" data-target="#exampleModalCenter"><img src="/img/icon-map.png"></a> -->
     <a class="nav-link"  data-toggle="modal" data-target="#exampleModalCenter"><img src="/img/skyport.gif"></a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="/words"><img src="/img/icon-book.png"></a>
   </li>
   <li class="nav-item">
     <a class="nav-link" href="/hometown"><img src="/img/sord0.png"></a>
   </li>
   <li class="nav-item">
    <!-- <a class="nav-link"><img src="/img/skyport.gif"></a> -->
    <a class="nav-link active"　data-toggle="modal"　data-target="#exampleModalCenter"><img src="/img/icon-map.png"></a>
   </li>
 </ul>
     </nav>
     <!-- </div> -->
  </footer>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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

  </body>
</html>
