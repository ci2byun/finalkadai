<?php

$host     = 'localhost';
$username = 'root';   // MySQLのユーザ名
$password = 'root';   // MySQLのパスワード
$dbname   = 'camp';   // MySQLのDB名

// MySQL用のDNS文字列
$dns = 'mysql:dbname='.$dbname.';host='.$host;

try {
    $dbh = new PDO($dns,$username,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e){
    echo '接続できませんでした。理由:'.$e->getMessage();
}

/////////////////////////////////////////////////////////////

try {
    // SQL文を作成
    $sql = 'SELECT * FROM test_drink_master';
    // SQL文を実行する準備
    $stmt = $dbh->prepare($sql);
    // SQLを実行
    $stmt->execute();
    // レコードの取得
    $rows = $stmt->fetchAll();
    // 1行ずつ結果を配列で取得


    foreach ($rows as $row) {
        $data[] = $row;

    }
} catch (PDOException $e) {
    throw $e;
}





?>



<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title></title>
<style>

td{


text-align: center;

}

</style>
  </head>
  <body>
<form method="post" action="http://localhost/oder.html">

      <table width="900" border="1" align="center">
      <tr>
        <td>画像</td>
        <td>名前</td>
        <td>値段</td>
        <td width="100">商品ランク</td>
        <td width="80"></td>
      </tr>

<?php foreach ($data as $key => $value) {?>

  <tr>
        <td> <img src="img/<?php print $value["img"]; ?>"　width="80%"></td>
        <td><?php print $value["drink_name"]; ?></td>
        <td><?php print $value["price"]; ?></td>
        <td width="100"><?php print $value["rank2"]; ?></td>
        <td width="100"><input type="checkbox" name="kate" value=""><input type="submit" value="買い物かご" name = "update" ></td>
  </tr>

<?php } ?>

    </table>

</form>

  </body>
</html>
