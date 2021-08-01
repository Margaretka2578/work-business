<?php
$data = json_decode($_POST['data'], true);
if ($data["name"] !== '' && $data["phone"] !== '' && $data["mail"] !== '') {
  $to = "info@work-business.ru";

  $subject = "Форма обратной связи";
  $charset = "utf-8";
  $headerss ="Content-type: text/html; charset=$charset\r\n";
  $headerss.="MIME-Version: 1.0\r\n";
  $headerss .= 'From: info@work-business.ru' . "\r\n" .
              'Reply-To: '.$data['mail'] . "\r\n" .
              'X-Mailer: PHP/' . phpversion();
  $msg = "Имя: ".$data["name"]."<br>";$msg .= "Телефон: ".$data["phone"]."<br>";$msg .= "Email: ".$data["mail"]."<br>";$msg .= "Сообщение: ".$data["mess"]."<br>";
  if(mail($to, $subject, $msg, $headerss)) exit('success');

}

?>