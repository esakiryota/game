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
        background:url("") top no-repeat;
      }
      #main {
        color: @yield('main-color');
      }

</style>
  </head>
  <body>
  <header class="fixed-top">
    <table class="table table-borderless">
  <thead>
    <tr>
      <th scope="col" id="char"><img id="tmp" class="w-70"></th>
      <th scope="col"><div id="nameid" class="font-weight-bold" style="font-size: 20px; font-weight: bold;"></div></th>
      <th scope="col"><div id="level" class="" style="font-size: 20px; font-weight: bold;"></div></th>
      <th scope="col"><meter class="mb-1" id="experi" value="0.0" style="font-size: 20px;"></meter></th>
    </tr>
  </thead>
  <tbody style="font-weight: bold; font-size: 15px;">
    <tr>
      <td scope="row">ぼうぎょ：</td>
      <td id="enlevel"></td>
      <td>こうげき：</td>
      <td id="mathlevel"></td>
    </tr>
    <tr>
      <td scope="row">わざ：</td>
      <td id="majician"></td>
      <td scope="row">せつめい：</td>
      <td>てきに<span id="damager"></span>のダメージ</td>
    </tr>
  </tbody>
</table>
<div class="container">
  <div class="row">
    <div class="col text-light" style="font-size: 30px;">
       <a href="/user/move">いどう</a>
    </div>
  </div>
</div>
  </header>
  <main class="" style="margin-top: 200px;" id="main">
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
