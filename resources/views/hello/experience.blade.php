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
      color: white;
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
        background:url('/img/start-bg0.png') center no-repeat;
        background-size:cover;
      }
      /* header {
        content:"";
        background:url(/img/status_field4.png) no-repeat;
        background-size:100% 100%;
      } */
      #main {
        color: white;
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
    <div class="row">
      <header class="fixed-top">
        <div class="row">
          <div class="col-12 col-md-6">
            <div class="row">
              <img id="tmp" src="/img/characters/charaA-1.png" style="position: absolute; top: 30px; left: 10px;" width="130px">
              <img src="/img/status_field4.png" alt="" style="position: absolute; top: 0; left: 0; max-width: 450px;" width="100%" height="200px">
              <p style="position: absolute; top: 15px; left: 180px;">体験版 Lv0</p>
              <div style="position: absolute; top: 40px; left: 190px;">
                <div class="row" width="">
                  <div class="">
                    EXP
                  </div>
                </div>
                <div class="row">
                  <div class="">
                    <p class="" style="position: absolute; width: 200px; height: 12px; background-color: rgba(0, 0, 0, 0.5); border-radius: 5px;"></p>
                    <p class="" style="position: absolute; width: 30px; height: 12px; background-color:  green; border-radius: 5px;" id="exp"></p>
                  </div>
                </div>
                <div class="row mt-4">
                  <p>こうげき: 50   ぼうぎょ: 50</p>
                </div>
                <div class="row">
                  <p>わざ：サンダー<br>せつめい：てきに<span id="damager">50</span>のダメージ</p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </header>
    </div>

  <main class="" style="margin-top: 200px;" id="main">
    <div class="row mb-3">
      <div class="col">
        <a href="/start" style="text-decoration: none; font-size: 20px; color: black;"><<戻る<a/>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <a href=" /experience/1-0" id="searchLink" style="color: black; text-decoration: none;">
        <div class="card mx-3 mb-2">
          <div class="card-header">
            Lv1-0
          </div>
          <div class="card-body" style="font-size: 25px; background-color:rgba(255,255,255,0.5);background-blend-mode:lighten;">
            たいけんステージ
          </div>
        </div>
        </a>
      </div>
    </div>
  </main>
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
      $(function () {
  $('[data-toggle="popover"]').popover()
})
$(".position-marker").hover(function() {
  $("#english").css('display', 'inline');
})
})
    </script>
    <div class="mask" style="position: fixed; top: 0; z-index: 21000000;">
      <div id="mask">
      </div>
    </div>
    <input type="hidden" name="message_id" value="6" id="message_id">
    <script src="/js/mask.js">
    </script>
  </body>
</html>
