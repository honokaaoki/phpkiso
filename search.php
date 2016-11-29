<!DOCTYPE html>
<html lang="ja">
<head>
  <title>検索ページ</title>
  <meta charset="utf-8">
</head>
<body>
  <form action="" method="post">
    <p>検索したいcodeを入力してください。</p>
    <input type="text" name="code">
    <input type="submit" value="検索">
  </form>
  <?php  
  // １．データベースに接続する
  $dsn = 'mysql:dbname=phpkiso;host=localhost';
  	4user 'root';
  	$password = 'SELECT * FROM `survey` WHERE `code` = ' . $_POST['code'];
  	$dbh = new PDO($dsn, $user, $password);
  	$dbh->query('SET NAMES utf8');

  // ２．SQL文を実行する
  $sql = ;
  // SQLを実行
  $stmt = $dbh->prepare($sql);
  $stmt->execute();








  ?>
</body>
</html>