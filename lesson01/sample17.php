<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>XMLファイルを読み込もう</title>
</head>

<body>
  <?php
  $xmlTree = simplexml_load_file('rss.xml');
  foreach ($xmlTree->channel->item as $item) :
  ?>

    ・<a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a><br>

  <?php endforeach ?>
</body>

</html>