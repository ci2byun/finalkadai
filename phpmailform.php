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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

try {

    $company = $_POST['company'];
    $name = $_POST['name'];
    $name2 = $_POST['name2'];
    $mail = $_POST['mail'];
    $tel = $_POST['tel'];
    $adressnumber = $_POST['adressnumber'];
    $city = $_POST['city'];
    $adress = $_POST['adress'];




    $sql2 = 'INSERT INTO customer(company,name,name2,mail,tel,adressnumber,city,adress) VALUES (?,?,?,?,?,?,?,?)';
    // SQL文を実行する準備
    $stmt = $dbh->prepare($sql2);
    // SQL文のプレースホルダに値をバインド
    $stmt->bindValue(1, $company,    PDO::PARAM_STR);
    $stmt->bindValue(2, $name,    PDO::PARAM_STR);
    $stmt->bindValue(3, $name2,    PDO::PARAM_STR);
    $stmt->bindValue(4, $mail,    PDO::PARAM_STR);
    $stmt->bindValue(5, $tel,    PDO::PARAM_STR);
    $stmt->bindValue(6, $adressnumber,    PDO::PARAM_STR);
    $stmt->bindValue(7, $city,    PDO::PARAM_STR);
    $stmt->bindValue(8, $adress,    PDO::PARAM_STR);
    // SQLを実行
    $stmt->execute();
} catch (PDOException $e){
    echo '失敗しました。理由:'.$e->getMessage();
}

header('Location: http://localhost/register.html');
exit();
}




?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無題ドキュメント</title>

<link rel="stylesheet" href="style.css" type="text/css" />



</head>

<body>
		<div id="mailform">


<form method="post" enctype="multipart/form-data">

<div class="formBox clearfix">
<div class="conL">会社名または屋号 <b>(必須)</b></div>
<div class="conR"><input type="text" name="company" value="" size="40" class="con" id="mfp_element_0" style="width: 240px;"><div class="mfp_err" id="errormsg_会社名または屋号">text</div></div></div>


<div class="formBox clearfix">
<div class="conL">ご担当者名 <b>(必須)</b></div>
<div class="conR"><input type="text" name="name" data-kana="お名前フリガナ" value="" size="40" class="con" id="mfp_element_1" style="width: 240px;"><div class="mfp_err" id="errormsg_ご担当者名">text</div></div></div>


<div class="formBox clearfix">
<div class="conL">お名前フリガナ</div>
<div class="conR"><input type="text" name="name2" value="" size="40" class="con" id="mfp_element_2" style="width: 240px;"><div class="mfp_err" id="errormsg_お名前フリガナ">text</div></div></div>


<div class="formBox clearfix">
<div class="conL">メールアドレス <b>(必須)</b></div>
<div class="conR"><input type="email" name="mail" value="" size="40" class="con" id="mfp_element_3" style="width: 240px;"><div class="mfp_err" id="errormsg_email">email</div></div></div>


<div class="formBox clearfix">
<div class="conL">電話番号 <b>(必須)</b></div>
<div class="conR"><input type="text" name="tel" value="" size="40" class="con" id="mfp_element_4" style="width: 240px;"><div class="mfp_err" id="errormsg_電話番号">text</div></div></div>


<div class="formBox clearfix">
<div class="conL">郵便番号 ※半角</div>
<div class="conR"><input type="text" name="adressnumber" data-address="都道府県,市区町村" size="40" class="con" id="mfp_element_5" style="width: 240px;"><div class="mfp_err" id="errormsg_郵便番号">text</div></div></div>



<div class="clearfix">
<div class="conL">都道府県</div>
<div class="conR"><input type="text" name="city" size="40" class="con" id="mfp_element_6" style="width: 240px;"><div class="mfp_err" id="errormsg_都道府県">text</div></div></div>


<div class="formBox clearfix">
<div class="conL">ご住所</div>
<div class="conR"><input type="text" name="adress" value="" size="40" class="con" id="mfp_element_7" style="width: 240px;"><div class="mfp_err" id="errormsg_市区町村">text</div></div></div>




<div class="formBox clearfix">
	<div class="messL" style="padding-top:-50">お問い合わせ内容</div>
	<div class="conR"><textarea name="お問い合わせ内容" cols="40" rows="10" class="mess" id="mfp_element_11" style="width: 240px; height: 60px;"></textarea><div class="mfp_err" id="errormsg_お問い合わせ内容">textarea</div></div>
</div>




				<button type="submit" class="" value="転送">	転送</button>


				</form>
