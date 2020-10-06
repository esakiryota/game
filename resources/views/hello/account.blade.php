<!DOCTYPE html>
<html lang="js" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>アカウント作成</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style media="screen">
    @font-face {
      font-family: 'Myfont';
      src: url(/font/GD-DOTFONT-DQ-TTF_008.ttf);
    }
    body {
      font-family: 'Myfont';
      background-color: black;
      color: white;
      }
    </style>
  </head>
  <body>
    <header>
      <div class="conteiner border-bottom">
        <div class="row">
          <div class="col mx-5 my-3" style="font-size: 80px; font-weight: bold;">なまえ（ひらがな、カタカナ）</div>
        </div>
        <div class="row">
          <form  action="/account" method="post" id="form_control">
              {{ csrf_field() }}
            <div class="col mx-5 my-3 py-5"><input type="text" name="name" class="form-control" placeholder="なまえ" id="nameid" style="height: 100px; font-size: 50px;"></div>
            <div class="col mx-5 my-3 py-5"><input type="hidden" name="character" value="" class="form-control" id="character" style=""></div>
          </form>
        </div>
      </div>
    </header>
    <main>
      <div class="conteiner">
        <div class="row">
          <div class="col mx-5 my-5" style="font-size: 80px; font-weight: bold;">キャラクターをえらぶ</div>
        </div>
      </div>
      <div class="conteiner">
        <div class="row">
          <div class="col text-center" style="font-size: 60px; font-weight: bold;">むらびとA</div>
          <div class="col text-center" style="font-size: 60px; font-weight: bold;">むらびとB</div>
          <div class="col text-center" style="font-size: 60px; font-weight: bold;">むらびとC</div>
        </div>
        <div class="row">
          <div class="col text-center"><img src="/img/chara1.gif" class="w-100" id="charaA"></div>
          <div class="col text-center"><img src="/img/chara2.gif" class="w-100" id="charaB"></div>
          <div class="col text-center"><img src="/img/chara0.gif" class="w-100" id="charaC"></div>
        </div>
        <div class="row mt-5">
          <div class="col text-center" style="font-size: 60px; font-weight: bold;">せつめい</div>
          <div class="col text-center" style="font-size: 60px; font-weight: bold;">せつめい</div>
          <div class="col text-center" style="font-size: 60px; font-weight: bold;">せつめい</div>
        </div>
        <div class="row">
          <div class="col text-center" style="font-size: 50px; font-weight: bold;">まほうつかいきぼう<br>きがつよいせいかく<br>まけずぎらい</div>
          <div class="col text-center" style="font-size: 50px; font-weight: bold;">かくとうかきぼう<br>リーダーシップがある<br>ゆうきがある</div>
          <div class="col text-center" style="font-size: 50px; font-weight: bold;">ソードマスターきぼう<br>あたまがいい<br>つねにれいせい</div>
        </div>
      </div>
    </main>
    <footer>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://www.gstatic.com/firebasejs/6.5.0/firebase-app.js"></script>


    <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#config-web-app -->
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-firestore.js"></script>
    <script src="/js/account.js">
    </script>
  </body>
</html>
