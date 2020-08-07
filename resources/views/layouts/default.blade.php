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
        background:url(/img/start-bg4.png) center no-repeat;
        background-size:cover;
      }

</style>
  </head>
  <body>
  <header>
    @yield('header')
    <div class="cover text-light text-center py-5">
     <h2 style="font-size: 80px; font-weight: bold;">@yield('person')</h2>
     </div>
  </header>
  <main class="text-light">
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

  </body>
</html>
