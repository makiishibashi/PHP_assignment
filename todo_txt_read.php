<?php

$str = '';

  $file = fopen('data/quit.csv','r');
  flock($file, LOCK_EX);

if($file){
  while($line = fgets($file)){
    $str .= "<tr><td>{$line}</td></tr>";
  }
}

flock($file, LOCK_UN);
fclose($file);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>今スグやめたい家事アンケート結果</title>
</head>

<body>
  <h1>今スグやめたい家事アンケート結果</h1>
    <a href="todo_txt_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>アンケート結果</th>
        </tr>
      </thead>
      <tbody>
        <?= $str ?>
      </tbody>
    </table>
</body>

</html>