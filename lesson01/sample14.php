<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>文字列のフォーマット</title>
</head>
<body>
  <?php
  $date = sprintf('%04d.%02d.%02d', 2021, 8, 3);
  echo $date
  ?>
</body>
</html>