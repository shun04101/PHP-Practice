<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sample23</title>
</head>

<body>
  <?php
  $zip = '111-1111';

  if (preg_match("/\A\d{3}[-]\d{4}\z/", $zip)) {
    echo '郵便番号：〒' . $zip;
  } else {
    echo '※ 郵便番号を正しくご記入ください';
  }
  ?>
</body>

</html>