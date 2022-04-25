<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JSONファイルを読み込もう</title>
</head>

<body>
  <?php
  $file = file_get_contents('feed.json');
  $json = json_decode($file);

  foreach ($json->items as $item) :
  ?>
    ・<a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a><br>
  <?php
  endforeach;
  ?>
</body>

</html>