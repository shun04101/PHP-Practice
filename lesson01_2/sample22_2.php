<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sample22</title>
</head>

<body>
  <?php
  $age = '24';

  $age = mb_convert_kana($age, 'n', 'UTF-8');
  if (is_numeric($age)) {
    echo $age . '歳です';
  } else {
    echo '※ 数字で入力してください';
  }
  ?>
</body>

</html>