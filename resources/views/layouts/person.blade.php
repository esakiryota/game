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
        display:block;
        position:fixed;
        top:0;
        left:0;
        z-index:-1;
        width:100vw;
        /* height:100vh; */
        background:url(/img/box_gray.png) top no-repeat;
        background-size:cover;
      }
      #main {
        color: @yield('main-color');
      }
      /* .modal-body {
    max-height:400px;
    overflow-y: auto;
} */

</style>
  </head>
  <body>
  <header class="fixed-top">
    <table class="table table-borderless" style="color: white;">
  <thead>
    <tr>
      <th scope="col" id="char"><img id="tmp" src="{{$url}}" class="w-70"></th>
      <th scope="col"><div id="nameid" class="font-weight-bold" style="font-size: 20px; font-weight: bold;">{{$sql[0]->name}}</div></th>
      <th scope="col"><div id="level" class="" style="font-size: 20px; font-weight: bold;">Lv{{$sql[0]->level}}</div></th>
      <th scope="col"><meter class="mb-1" id="experi" value="{{$ex_value}}" style="font-size: 20px;"></meter></th>
    </tr>
  </thead>
  <tbody style="font-weight: bold; font-size: 15px;">
    <tr>
      <td scope="row">ぼうぎょ：</td>
      <td id="enlevel">{{$sql[0]->defense}}</td>
      <td>こうげき：</td>
      <td id="mathlevel">{{$sql[0]->atack}}</td>
    </tr>
    <tr>
      <td scope="row">わざ：</td>
      <td id="majician">{{$tech}}</td>
      <td scope="row">せつめい：</td>
      <td>てきに<span id="damager">{{$damage}}</span>のダメージ</td>
    </tr>
  </tbody>
</table>
  </header>
  <main class="" style="margin-top: 200px;" id="main">

    <div class="container" style="position: fixed; top: 170px; z-index: 1;">
      <div class="row">
           <a data-toggle="modal" data-target="#exampleModalCenter"><img src="/img/skyport.gif" width="50px"></a>
      </div>
    </div

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
