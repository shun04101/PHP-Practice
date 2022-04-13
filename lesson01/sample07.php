<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sample07</title>
</head>
<body>
  <?php
  $i = 1;

  while ($i < 366):
    echo $i . '日<br>';
    $i = $i + 1;
  endwhile;
  ?>
</body>
</html>