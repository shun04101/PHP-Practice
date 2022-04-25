<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ファイルの読み込み</title>
</head>

<body>
  <?php
  $news = file_get_contents('data/news.txt');
  echo $news;

  // ファイルの追記
  $news = $news . "<br>追加のニュースです";
  $success = file_put_contents('data/news.txt', $news);

  // readfile('data/news.txt');
  ?>
</body>

</html>