<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>連想配列</title>
</head>
<body>
  <?php
  $fruits = [
    'apple' => 'りんご',
    'grape' => 'ぶどう',
    'lemon' => 'レモン',
    'tomato' => 'トマト',
    'peach' => 'もも'
  ];
  ?>

  <dl>
    <?php foreach($fruits as $english => $japanese): ?>
      <dt><?php echo $english; ?></dt>
      <dd><?php echo $japanese; ?></dd>
    <?php endforeach ?>
  </dl>





</body>
</html>