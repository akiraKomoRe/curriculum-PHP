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
</head>
<body>
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
</body>
</html>
