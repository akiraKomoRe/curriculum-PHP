<?php 
  require_once 'getData.php';
  $data = new getData();

  $userData = $data->getUserData();
  $postData = $data->getPostData();
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
  <header>
    <div>
      <h1><img src="logo.png" alt=""></h1>
    </div>
    <div>
      <div>
        <p>ようこそ隼田翔伍さん</p>
      </div>
      <div>
        <p>最終ログイン日：2019-07-02 21:56:05</p>
      </div>
    </div>
  </header><!-- /.header -->
  <table>
    <tr>
      <th>記事ID</th>
      <th>タイトル</th>
      <th>カテゴリ</th>
      <th>本文</th>
      <th>投稿日</th>
    </tr>
    <?php foreach($postData as $post) { ?>
    <tr>
      <td><?php echo $post['id']; ?></td>
      <td><?php echo $post['title']; ?></td>
      <td><?php if($post['category_no'] == 1) {
        echo "食事";
      } else if($post['category_no'] == 2) {
        echo "旅行";
      } else {
        echo "その他";
      }  ?></td>
      <td><?php echo $post['comment']; ?></td>
      <td><?php echo $post['created']; ?></td>
    </tr>
    <?php } ?>
  </table>
  <footer>
    <div class="footer__logo">
      Y&I group.inc
    </div><!-- /.footer__logo -->
  </footer>
</body>
</html>