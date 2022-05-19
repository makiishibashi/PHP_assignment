<?php

// var_dump($_POST);
// exit();

$gender = $_POST['gender'];
$age = $_POST['age'];
$job = $_POST['job'];
$reason = $_POST['reason'];

//変数をスペースでつなげて最後に改行を入れる
$write_data = "{$gender} {$age} {$job} {$reason} \n";

//ファイルを開く
$file = fopen('data/quit.csv','a');
//ファイルをロックする
flock($file, LOCK_EX);

//ファイルに書き込む
fwrite($file, $write_data);

//ロックを解除する
flock($file, LOCK_UN);
//ファイルを閉じる
fclose($file);

header('Location:todo_txt_input.php');

