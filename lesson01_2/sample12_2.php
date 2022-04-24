<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>9時になったらメッセージを変える(if文)</title>
</head>

<body>
  <?php
  date_default_timezone_set('Asia/Tokyo');
  $time = date('G');
  ?>
  <?php if ($time < 9) : ?>
    <p>※ 営業時間外です</p>
  <?php else : ?>
    <p>ようこそ</p>
  <?php endif; ?>

  <?php
  $s = '';
  if ($s) : // $s !== ''
    echo '$sには文字が入っています';
  endif;

  $x = 0;
  if ($x) : // $x !== 0
    echo '$xは0ではありません';
  endif;

  $x = 10;
  if (!$x) :
    echo '$xは0です';
  endif;
  ?>
</body>

</html>