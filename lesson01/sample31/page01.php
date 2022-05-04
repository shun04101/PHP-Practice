<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>外部ファイルを読み込む</title>
</head>

<body>
  <?php
  require('index.php');

  $price = 150;
  $price_tax = intax($price);
  echo $price_tax;
  ?>
</body>

</html>