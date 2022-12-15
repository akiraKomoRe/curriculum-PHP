<?php
// セッション開始
session_start();
// セッション変数のクリア
$_SESSION = array();
// セッションクリア
session_destroy();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ログアウト</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body {
            text-align: center;
        }
        body > div:nth-child(1) {
            width: 100%;
            max-width: 1000px;
            margin: auto;
            background-color: #add8e6;
            padding: 20px;
        }
        body > div:nth-child(2) {
            color: red;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <div>
        <h2>ログアウト画面</h2>
    </div>
    <div>ログアウトしました</div>
    <input class="button" type="button" onclick="location.href='login.php'" value="ログイン画面"><br>
</body>
</html>