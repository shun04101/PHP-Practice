<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>変数</title>
</head>
<body>
  <?php
  $sam = 100+1050+200;
  ?>
  <p>合計金額は、<?php echo $sam; ?>円です。</p>
  <p>税込金額は、<?php echo $sam * 1.1; ?>円です。</p>
</body>
</html>