<?php
//회사쪽에 받는 주소
  $recipient = "10cw0107@gmail.com";
//제목 처리
  $subject = '=?UTF-8?B?'.base64_encode($_GET['title']).'?=';
//메일주소
  $mail_from = '=?UTF-8?B?'.base64_encode($_GET['email']).'?=';

//메일내용
  $mail_body =

	"<table width='600' border='0' cellpadding='0' cellspacing='1' bgcolor='#CCCCCC'>

		<tr>
          <td width='100' height='30' align='center' bgcolor='#eeeeee'>会社名または屋号</td>
          <td width='400' bgcolor='#FFFFFF'>". $_GET['title']."</td></tr>".

       " <tr>
          <td width='100' height='30' align='center' bgcolor='#eeeeee'>ご担当者名</td>
          <td width='400' bgcolor='#FFFFFF'>". $_GET['senduser']."</td></tr>".

	   " <tr>
          <td width='100' height='30' align='center' bgcolor='#eeeeee'>お名前フリガナ</td>
          <td width='400' bgcolor='#FFFFFF'>". $_GET['sendname']."</td></tr>".

       " <tr>
          <td width='100' height='30' align='center' bgcolor='#eeeeee'>メールアドレス</td>
          <td width='400' bgcolor='#FFFFFF'>". $_GET['email']."</td></tr>".

	   " <tr>
          <td width='100' height='30' align='center' bgcolor='#eeeeee'>電話番号</td>
          <td width='400' bgcolor='#FFFFFF'>". $_GET['sendtel']."</td></tr>".

	   " <tr>
          <td width='100' height='30' align='center' bgcolor='#eeeeee'>郵便番号</td>
          <td width='400' bgcolor='#FFFFFF'>". $_GET['sendpost']."</td></tr>".

	   " <tr>
          <td width='100' height='30' align='center' bgcolor='#eeeeee'>都道府県</td>
          <td width='400' bgcolor='#FFFFFF'>". $_GET['sendadress1']."</td></tr>".

		" <tr>
          <td width='100' height='30' align='center' bgcolor='#eeeeee'>ご住所</td>
          <td width='400' bgcolor='#FFFFFF'>". $_GET['sendadress2']."</td></tr>".

		" <tr>
          <td width='100' height='30' align='center' bgcolor='#eeeeee'>ご希望の内容（複数可）</td>
          <td width='400' bgcolor='#FFFFFF'>". $_GET['counselor1']."</td></tr>".

	" <tr>
          <td width='100' height='30' align='center' bgcolor='#eeeeee'>郵便番号</td>
          <td width='400' bgcolor='#FFFFFF'>". $_GET['counselor2']."</td></tr>".



      "</table>";


//메일 발송처리

  $header = "From:$subject\n";
  $header = "Content-Type: text/html;charset=UTF-8";
  $header .= "From : $mail_from <".$mail_from.">\n";


  $email = mail($recipient, $subject, $mail_body, $header);



  if (!$email)
    echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /> <script>
         window.alert('メール送信にエラーが発生しました。');
         history.go(-1);
         </script>";
  else

    echo '<script>

location.href = "naver.com";

</script>';

?>
