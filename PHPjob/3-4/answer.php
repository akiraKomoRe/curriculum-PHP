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
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
  $name = $_POST['your-name'];
  $port_correct = $_POST['port_correct'];
  $language_correct = $_POST['language_correct'];
  $command_correct = $_POST['command_correct'];

  $port = $_POST['port'];
  $language = $_POST['language'];
  $command = $_POST['command'];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
  function judge($answer, $correct) {
    if($answer == $correct) {
      echo "正解！";
    } else {
      echo "残念・・・";
    }
  }

?>
<p><!--POST通信で送られてきた名前を表示--><?php echo $name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php 
  judge($port, $port_correct);
?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php 
  judge($language, $language_correct);
?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php 
  judge($command, $command_correct);
?>
</body>
</html>