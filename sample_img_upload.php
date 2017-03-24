<?php
$host     = 'localhost';
$username = 'root';   // MySQLのユーザ名
$password = 'root';   // MySQLのパスワード
$dbname   = 'camp';   // MySQLのDB名

// MySQL用のDNS文字列
$dns = 'mysql:dbname='.$dbname.';host='.$host;

const IMG_DIR    = './img/';   // アップロードした画像ファイルの保存ディレクトリ
$data       = [];
$err_msg    = [];         // エラーメッセージ
$new_img_filename = '';   // アップロードした新しい画像ファイル名

try {
    $dbh = new PDO($dns,$username,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e){
    echo '接続できませんでした。理由:'.$e->getMessage();
}

function upload($dbh){
  $err_msg    = [];         // エラーメッセージ

  $name = $_POST['name'];
  $price = $_POST['price'];
  $stock = $_POST['stock'];


  if (is_uploaded_file($_FILES['new_img']['tmp_name']) === TRUE) {
    // 画像の拡張子を取得
    $extension = pathinfo($_FILES['new_img']['name'], PATHINFO_EXTENSION);
    // 指定の拡張子であるかどうかチェック
    if ($extension === 'jpg' || $extension === 'jpeg') {
      // 保存する新しいファイル名の生成（ユニークな値を設定する）
      $new_img_filename = sha1(uniqid(mt_rand(), true)). '.' . $extension;
      // 同名ファイルが存在するかどうかチェック
      if (is_file(IMG_DIR . $new_img_filename) !== TRUE) {
        // アップロードされたファイルを指定ディレクトリに移動して保存
        if (move_uploaded_file($_FILES['new_img']['tmp_name'], IMG_DIR . $new_img_filename) !== TRUE) {
            $err_msg[] = 'ファイルアップロードに失敗しました';
        }
      } else {
        $err_msg[] = 'ファイルアップロードに失敗しました。再度お試しください。';
      }
    } else {
      $err_msg[] = 'ファイル形式が異なります。画像ファイルはJPEG又はPNGのみ利用可能です。';
    }
  } else {
    $err_msg[] = 'ファイルを選択してください';
  }

  if (count($err_msg) > 0 ) {
      foreach ($err_msg as $err) {
          print "<p>".$err."</p>";
      }
      exit;
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // データベースに書き込み
  try {
      $sql2 = 'INSERT INTO test_drink_master(drink_name,price,img,stock) VALUES (?,?,?,?)';
      // SQL文を実行する準備
      $stmt = $dbh->prepare($sql2);
      // SQL文のプレースホルダに値をバインド
      $stmt->bindValue(1, $name,    PDO::PARAM_STR);
      $stmt->bindValue(2, $price,    PDO::PARAM_STR);
      $stmt->bindValue(3, $new_img_filename,    PDO::PARAM_STR);
      $stmt->bindValue(4, $stock,    PDO::PARAM_STR);

      // SQLを実行
      $stmt->execute();
  } catch (PDOException $e){
      echo '失敗しました。理由:'.$e->getMessage();
  }
}
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
function update_stock($dbh){
    try {

      $stock2 = $_POST['stock2'];
      $drink_id = $_POST['drink_id'];
      // SQL文を作成
      $sql = "UPDATE test_drink_master SET stock=$stock2 WHERE drink_id = $drink_id";
      // SQL文を実行する準備
      $stmt = $dbh->prepare($sql);
      // SQLを実行
      $stmt->execute();
      // レコードの取得
      $rows = $stmt->fetchAll();
      foreach ($rows as $row) {
        $data[] = $row;
      }
    } catch (PDOException $e) {
      throw $e;
    }
}
}
// アップロード画像ファイルの保存
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (empty($_POST["stock2"]) ) {
      upload($dbh);
  }else {
    update_stock($dbh);
  }
}
///////////////////////////////////////////////////////////

if (count($err_msg) > 0 ) {
    foreach ($err_msg as $err) {
        print "<p>".$err."</p>";
    }
    exit;
}

// データベースからデータ取得
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
}



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
try {
    $rank2 = $_POST['rank2'];

    $sql2 = 'INSERT INTO test_drink_master (rank2) VALUES(?)';
    // SQL文を実行する準備
    $stmt = $dbh->prepare($sql2);
    // SQL文のプレースホルダに値をバインド
    $stmt->bindValue(1, $rank2,    PDO::PARAM_STR);


    // SQLを実行
    $stmt->execute();
} catch (PDOException $e){
    echo '失敗しました。理由:'.$e->getMessage();
}
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>画像アップロード</title>
  <style>
    table {
      width: 660px;
      border-collapse: collapse;
    }
    table, tr, th, td {
      border: solid 1px;
      padding: 10px;
      text-align: center;
    }
  </style>
</head>
<body>
<?php foreach ($err_msg as $value) { ?>
  <p><?php print $value; ?></p>
<?php } ?>
<table align="center">

  <div align="center">
    <h1>画像アップロード</h1>
    <form method="post" enctype="multipart/form-data">
    名前:<input type="text" name="name">&nbsp;値段:<input type="text" name="price">&nbsp;
    商品ランク:<input type="text" name="rank2">&nbsp;
    在庫:<input type="text" name="stock">&nbsp;
    <div><br><input type="file" name="new_img">&nbsp;<input type="submit" value="アップロード" >&nbsp;</div>
    <div></div>
  </form></div>
</table><br>
  <table align="center">
  <tr>
    <td>画像</td>
    <td>名前</td>
    <td>値段</td>
    <td width="80">商品ランク</td>
    <td>在庫数</td>
  </tr>
  <?php foreach ($data as $value)  { ?>
    <tr>
      <td ><img src="<?php print IMG_DIR . $value['img']; ?>" width="50%"></td>
      <th><?php print $value['drink_name'] ?></th>
      <th><?php print $value['price'] ?></th>
      <th><?php print $value['rank2'] ?></th>
      <th><form method="post"><input type="text" name="stock2" value="<?php print $value['stock'] ?>">
        <input type="hidden" name="drink_id" value="<?=$value['drink_id'] ?>">
        <div><input type="submit" value="更新" name = "update" ></div></form></th>

    <tr>
  <?php } ?>
  </table>
</body>
</html>
