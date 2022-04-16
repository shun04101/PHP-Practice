<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>while文</title>
</head>

<body>
  <?php
  $i = 1; // 初期化
  while ($i < 366) : // 繰り返し条件
    echo $i . '日<br>';
    $i = $i + 1; // 更新
  endwhile;
  ?>
</body>

</html>