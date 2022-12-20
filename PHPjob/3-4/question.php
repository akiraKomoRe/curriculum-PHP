<?php

$name = $_POST['your-name'];

$port = [80, 22, 20, 21];
$language = ["PHP", "Python", "JAVA", "HTML"];
$command = ["join", "select", "insert", "update"];

$port_correct = $port[0];
$language_correct = $language[3];
$command_correct = $command[1];

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <p class="user-name">お疲れ様です<?php echo $name; ?>さん</p>
  <!--フォームの作成 通信はPOST通信で-->
  <form action="answer.php" method="post">
  <div>
    <h2>①ネットワークのポート番号は何番？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach($port as $value) { ?>
      <input type="radio" name="port" value="<?php echo $value; ?>">
      <?php echo $value; ?>
    <?php } ?>
  </div>
  <div>
    <h2>②Webページを作成するための言語は？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach($language as $value) { ?>
      <input type="radio" name="language" value="<?php echo $value; ?>">
      <?php echo $value; ?>
    <?php } ?>
  </div>
  <div>
    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <!--③ 問題のradioボタンを「foreach」を使って作成する-->
    <?php foreach($command as $value) { ?>
      <input type="radio" name="command" value="<?php echo $value; ?>">
      <?php echo $value; ?>
    <?php } ?>
  </div>
  <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
  <input type="hidden" name="your-name" value="<?php echo $name; ?>">
  <input type="hidden" name="port_correct" value="<?php echo $port_correct; ?>">
  <input type="hidden" name="language_correct" value="<?php echo $language_correct; ?>">
  <input type="hidden" name="command_correct" value="<?php echo $command_correct; ?>">
  <input class="question-submit" type="submit" value="回答する">
  </form>
</body>
</html>