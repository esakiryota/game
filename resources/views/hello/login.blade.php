<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hello Rest</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style media="screen">
      body {
        font-size: 40px;
      }
    </style>
  </head>
  <body>
    <div class="conteiner mx-5">
      <div class="row my-5">
        <div class="col">
          <h1 style="font-size: 60px;">ログイン</h1>
        </div>
      </div>
        <form  action="/login" method="post" id="form_control">
          {{ csrf_field() }}
          <input type="hidden" name="score">
          </form>
      <div class="row">
          <div class="col">
            <label for="email">メールアドレス</label>
            <input type="text" class="form-control" placeholder="your address" id="email" style="height: 100px; font-size: 50px;">
          </div>
      </div>
      <div class="row">
        <div class="col form-group">
          <label for="password">パスワード</label>
          <input type="password" class="form-control" placeholder="Password" id="pass" style="height: 100px; font-size: 50px;">
        </div>
      </div>
      <div class="row my-4">
            <div class="col">
              <button class="btn btn-primary" id="button" style="height: 100px; font-size: 50px;">send</button>
            </div>
      </div>
        <div class="row">
          <div class="col" id="error_code">
          </div>
        </div>
      </div>
    <script src="https://www.gstatic.com/firebasejs/6.5.0/firebase-app.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://www.gstatic.com/firebasejs/6.5.0/firebase-app.js"></script>


    <!-- TODO: Add SDKs for Firebase products that you want to use
         https://firebase.google.com/docs/web/setup#config-web-app -->
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.10.1/firebase-firestore.js"></script>
    <script src="/js/login.js">
    </script>
    </body>

</html>
