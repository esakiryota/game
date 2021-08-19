<!DOCTYPE html>
<html lang="ja">
<style>
@font-face {
  font-family: 'Myfont';
  src: url(/font/RocknRollOne-Regular.ttf);
}
body {
  font-family: 'Myfont';
  }
</style>
<body>
<h1>
  {{ $data["title"] }}
</h1>
<p>
  {{ $data["message"] }}
</p>
</body>
</html>
