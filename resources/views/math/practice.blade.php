<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
    <title>STUDY ROOM</title>
    <style media="screen">
      .hidden {
        opacity: 0;
      }
      #judge {
        font-size: 12rem;
      }
      .answers {
        font-size: 40px;
      }
      .questions {
        font-size: 40px;
      }
      .solves {
        font-size: 40px;
      }
      .label {
        font-size: 36px;
      }
      #replay {
        font-size: 30px;
      }

    </style>

    <body>
      <main>
        <div class="conteiner">
          <div class="hidden text-warning text-center font-weight-bold fixed-top" id="judge"></div>
        </div>
        <!-- <div class="conteiner fixed-top">
          <div class="row py-3">
            <div class="col-8"></div>
            <div class="questions text-center col-4" id="answer"></div>
          </div>
        </div> -->
      <div class="conteiner">
        <div class="row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q1">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q2">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q3">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q4">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q5">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q6">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q7">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q8">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q9">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="questions correct hidden text-warning col-1 text-center">○</div>
          <div class="questions wrong hidden text-warning col-1 text-center">X</div>
          <div class="questions col-8 text-center" id="q10">問題</div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="correct hidden text-warning col-1 text-center">○</div>
          <div class="wrong hidden text-warning col-1 text-center">X</div>
          <div class="col-8 text-center"></div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="correct hidden text-warning col-1 text-center">○</div>
          <div class="wrong hidden text-warning col-1 text-center">X</div>
          <div class="col-8 text-center"></div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="correct hidden text-warning col-1 text-center">○</div>
          <div class="wrong hidden text-warning col-1 text-center">X</div>
          <div class="col-8 text-center"></div>
          <div class="solves col-2  text-center"></div>
        </div>
        <!-- <div class="row">
          <div class="col-12 text-center">
            <button type="button" class="questions hidden btn btn-light" id="result" data-toggle="modal" data-target="#dialog1" >
              結果
            </button>
            <div class="modal fade position-fixed" id="dialog1">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">あなたの点数は...</h5>
                  </div>
                  <div class="modal-body">
                    <p><span id="lastScore"></span>点です!</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn text-premary" data-dismiss="modal"><a href="#">もどる</a></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <div class="row py-3">
          <div class="correct hidden text-warning col-1 text-center">○</div>
          <div class="wrong hidden text-warning col-1 text-center">X</div>
          <div class="hidden col-8 text-center" id="lastScore"></div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="correct hidden text-warning col-1 text-center">○</div>
          <div class="wrong hidden text-warning col-1 text-center">X</div>
          <div class="col-8 text-center"></div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="correct hidden text-warning col-1 text-center">○</div>
          <div class="wrong hidden text-warning col-1 text-center">X</div>
          <div class="col-8 text-center"></div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="correct hidden text-warning col-1 text-center">○</div>
          <div class="wrong hidden text-warning col-1 text-center">X</div>
          <div class="col-8 text-center"></div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="correct hidden text-warning col-1 text-center">○</div>
          <div class="wrong hidden text-warning col-1 text-center">X</div>
          <div class="col-8 text-center"></div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="correct hidden text-warning col-1 text-center">○</div>
          <div class="wrong hidden text-warning col-1 text-center">X</div>
          <div class="col-8 text-center"></div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="correct hidden text-warning col-1 text-center">○</div>
          <div class="wrong hidden text-warning col-1 text-center">X</div>
          <div class="col-8 text-center"></div>
          <div class="solves col-2  text-center"></div>
        </div>
        <div class="row py-3">
          <div class="correct hidden text-warning col-1 text-center">○</div>
          <div class="wrong hidden text-warning col-1 text-center">X</div>
          <div class="col-8 text-center"></div>
          <div class="solves col-2  text-center"></div>
        </div>
      </div>
    </main>
    <footer>
      <div class="conteiner fixed-bottom">
        <div class="row">
          <div class="label col-8 border  text-center bg-light" id="timer">50秒</div>
          <div class="label col-4 border text-center bg-light" id="answer"></div>
        </div>
        <div class="row">
          <div class="answers col border  text-center bg-light">1</div>
          <div class="answers col border text-center bg-light">2</div>
          <div class="answers col border text-center bg-light">3</div>
        </div>
        <div class="row">
          <div class="answers col border text-center bg-light">4</div>
          <div class="answers col border text-center bg-light">5</div>
          <div class="answers col border text-center bg-light">6</div>
        </div>
        <div class="row">
          <div class="answers col border text-center bg-light">7</div>
          <div class="answers col border text-center bg-light">8</div>
          <div class="answers col border text-center bg-light">9</div>
        </div>
        <div class="row">
          <div class="answers col border text-center bg-light">0</div>
          <div class="answers col border text-center bg-light" id="okbtn">OK</div>
          <div class="answers col border text-center bg-light " id="vanish">X</div>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/MathJax.js?config=TeX-MML-AM_CHTML' async></script>
    <script src="/js/practice.js"></script>
  </body>
</html>
