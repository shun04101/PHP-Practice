<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ファイルに書き込む</title>
</head>

<body>
  <?php
  $success = file_put_contents(
    'data/news.txt',
    'ホームページをリニューアルしました'
  );

  if ($success !== false) {
    echo 'ファイルの書き込みが完了しました';
  } else {
    echo 'ファイルの書き込みに失敗しました';
  }
  ?>
</body>

</html>