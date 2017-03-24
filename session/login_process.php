<?php

session_start();
$id ='guest';
$pwd ='guest';
if(!empty($_POST['id']) && !empty($_POST['pwd'])){
    if($_POST['id'] == $id && $_POST['pwd'] == $pwd){
        $_SESSION['is_login'] = true;
        $_SESSION['nickname'] = '이고잉';
        header('Location: http://localhost/test2.php');
        exit;
    }
}
echo 'ログインできませんでした。メールもしくはパスワードをご確認してください。';


?>
