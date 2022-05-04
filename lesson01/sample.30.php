<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>独自のファンクションを作成</title>
</head>

<body>
  <?php
  /* 税込み金額を返すファンクション */
  function intax($value)
  {
    return ceil($value * 1.1);
  }
  $price = 150;
  $price_tax = intax($price);
  echo $price_tax;
  ?>
</body>

</html>