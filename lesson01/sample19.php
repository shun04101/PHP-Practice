<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JSONファイルを書き込もう</title>
</head>

<body>
  <?php
  $json_sample = [
    "title" => "JSONサンプル",
    "items" => [
      "りんご",
      "みかん"
    ]
  ];

  $json = json_encode($json_sample, JSON_UNESCAPED_UNICODE);
  echo $json;
  file_put_contents('json_sample.json', $json);
  ?>
</body>

</html>