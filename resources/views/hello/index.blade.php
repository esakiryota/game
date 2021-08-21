<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EiDan</title>
    <link rel="shortcut icon" href="/img/icons/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4WGDPTQD3S"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-4WGDPTQD3S');
</script>
    <style media="screen">
    body:before{
      content:"";
      display:block;
      position:fixed;
      top:0;
      left:0;
      z-index:-1;
      width:100%;
      height:100vh;
      background:url(/img/start-bg2.png) center no-repeat;
      background-size:cover;
    }

    @font-face {
      font-family: 'Myfont';
      src: url(/font/Triforce-y07d.ttf);
    }

    @font-face {
      font-family: 'Second font';
      src: url(/font/RocknRollOne-Regular.ttf);
    }

  #dannjon {
    font-size: 60px;
    font-family: 'Myfont';
  }
  #sub {
    font-size: 35px;
    font-family: 'Myfont';
  }
  #login, #start {
    font-size: 15px;
    font-family: 'Second font';
  }

  p:hover {
    color: gray;
  }



    </style>
  </head>
  <body>
    <div class="conteiner fixed-top my-5">
      <div class="row mt-5 pt-5 mb-5">
        <div class="col text-center mt-5" id="dannjon">Eitan danjon</div>
      </div>
      <div class="row">
        <div class="col text-center mt-3" id="login">
          <div class="box" style="position: relative;">
            <a href="/english" style="color: black;">
            <img src="/img/index_btn.png" width="100px"alt="" class="img">
            <p style="
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%)">ぼうけん</p>
          </a>
          </div>
          <!-- <a href="/math" class="text-light">ぼうけん<img src="/img/index_btn.png" width="100px"></a> -->
        </div>
      </div>
      <div class="row">
        <div class="col text-center mt-3" id="login">
        <div class="box" style="position: relative;">
          <img src="/img/index_btn.png" width="100px"alt="" class="img">
          <a href="/start" style="color: black;">
          <p style="
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
          -webkit-transform: translate(-50%, -50%);
          -ms-transform: translate(-50%, -50%)">はじめて</p>
        </a>
        </div>
      </div>
    </div>
    </div>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="mask" id="mask" style="position: fixed; top: 0; z-index: 21000000; font-family: 'Second font';">
    </div>
    <input type="hidden" name="message_id" value="5" id="message_id">
    <script src="/js/mask.js">
    </script>
  </body>
</html>
