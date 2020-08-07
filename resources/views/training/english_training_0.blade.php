<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>暗記</title>

    <style media="screen">
      #start {
        margin-top: 400px;
      }
      #btn {
        font-size: 60px;
      }
      #conteiner {
        font-size: 45px;
      }
      #main {
        padding-top: 400px;
      }
      .start {
        font-size: 200px;
      }
      .remember {
        font-size: 30px;
      }
      .question {
        font-size: 70px;
      }
      .answers {
        font-size: 70px;
      }
      .buttom {
        font-size: 30px;
      }
      .hidden {
        display: none;
      }
      .circle {
        font-size: 400px;
        padding-top: 450px;
      }
      .batu {
        font-size: 400px;
        padding-top: 450px;
      }
      /* .check {
        .padding-top: 450px;
      } */
    </style>
  </head>
  <body>
    <header>
    </header>
    <main>
      <div class="conteiner fixed-top" id="start">
        <div class="row">
          <div class="start col text-center" id="bigin">
            START
          </div>
        </div>
        <div class="row my-5">
          <div class="remember col text-center">
            <button class="btn btn-info my-5" id="btn">覚えていないもの</button>
          </div>
        </div>
        <div class="hidden conteiner" id="conteiner">
        </div>
      </div>

      <div class="conteiner">
        <div class="row">
          <div class="hidden circle text-warning col text-center fixed-top" id="judge"></div>
        </div>
      </div>

      <div id="main" class="hidden">
        <div class="conteiner">
          <div class="row mx-5">
            <div class="question col text-light text-center rounded bg-info my-4 py-4" >問題</div>
          </div>
        </div>
        <div class="conteiner">
          <div class="row mx-5">
            <div class="answers answer1 col text-center rounded bg-light my-4 py-4">回答</div>
          </div>
          <div class="row mx-5">
            <div class="answers answer2 col text-center rounded bg-light my-4 py-4">回答</div>
          </div>
          <div class="row mx-5">
            <div class="answers answer3 col text-center rounded bg-light my-4 py-4">回答</div>
          </div>
        </div>
      </div>
    </main>
    </footer>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script  src="/js/english_training_0.js"></script>
</html>
