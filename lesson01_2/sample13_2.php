<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ceil, floor</title>
</head>

<body>
  <!-- 3,000円のものから、100円値引きした場合、 -->
  <?php echo floor(100 / 3000 * 100); ?>%引きです。

  <br>
  <?php echo ceil(3.33); ?><br>
  <?php echo round(3.66, 1); ?><br>
</body>

</html>