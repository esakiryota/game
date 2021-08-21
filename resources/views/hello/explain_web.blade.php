<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
  </head>
  <body>
    <div class="conteiner">
      <div class="row my-5 mx-2">
        <div class="col font-weight-bold" style="font-size: 36px;">
          このゲームについて
        </div>
      </div>
    </div>
    <div class="contaier">
      <div class="row bg-light pt-4 mx-2">
        <div class="col"><h2>目的</h2></div>
      </div>
      <div class="row mb-4 bg-light py-4 mx-2">
        <div class="col">
            このゲームは主に英単語の勉強を楽しくできるようにするために作成させていただきました。
            楽しんでいただけると嬉しいです。今の英単語レベルは英語の海というステージで中学一年生レベルです。
        </div>
      </div>
      <div class="row bg-light pt-4 mx-2">
        <div class="col"><h2>利用規約</h2></div>
      </div>
      <div class="row mb-4 bg-light py-4 mx-2">
        <div class="col">
            利用するにあたっての制限は特にありません。自由に楽しんでください。しかし、メールアドレスが必要になります。
            メールアドレスの登録をよろしくお願いします。
        </div>
      </div>
      <div class="row bg-light pt-4 mx-2">
        <div class="col"><h2>画像提供</h2></div>
      </div>
      <div class="row mb-4 bg-light py-4 mx-2">
        <ul>
          <li>ぴぽや倉庫 https://pipoya.net/</li>
          <li>七三ゆきのアトリエ　https://nanamiyuki.com/</li>
          <li>白螺子屋　http://hi79.web.fc2.com/</li>
          <li>ゆるどらシル　フリー素材　https://yurudora.com/tkool/</li>
        </ul>
      </div>
    </div>
      <div class="row pt-4 mx-2 bg-light">
        <div class="col">
          <h2>プライバシーポリシー</h2>
        </div>
      </div>
      <div class="row pt-4 bg-light py-4 mx-2">
        <div class="col"><h4></h4></div>
        <ul>
          <li>取得する個人情報の利用目的</li>
          <div class="row">
            <div class="col">
              個人情報はアカウントを作成する際のメールアドレスのみ取得させていただきます。
              利用目的はログインする際のアカウント取得、お問い合わせに対する返信です。
            </div>
          </div>
          <li>個人情報の管理</li>
          <div class="row">
            <div class="col">
              メールアドレスなどの漏洩のために、csrfトークンを発行し、セキュリティ対策を行っております。
            </div>
          </div>
          <li>開示等の請求に応じる手続き</li>
          <div class="row">
            <div class="col">
              個人情報の開示はメールアドレスのみなので基本的に行いません。
            </div>
          </div>
          <li>第三者提供について</li>
          <div class="row">
            <div class="col">
              個人情報の第三者への提供は行いません。
            </div>
          </div>
          <li>お問い合わせ窓口</li>
          <div class="row">
            <div class="col">
              お問い合わせページにいっていただければお問い合わせが可能となっています。
            </div>
          </div>
          <li>サイト分析について</li>
          <div class="row">
            <div class="col">
              このサイトはアクセス数分析のため、google analyticsを使用しています。
            </div>
          </div>
        </ul>
      </div>
    <div class="row text-center my-5">
      <div class="col text-muted">
        サイト管理人 ryota
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
