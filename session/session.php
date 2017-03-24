<?php
session_start();
if(!isset($_SESSION['is_login'])){
    header('Location: ./login.html');
}
?>
<html>
    <body>
        <?php echo $_SESSION['nickname'];?>様　ようこそ!<br />
        <a href="./logout.php">ログアウト</a>
    </body>
</html>
