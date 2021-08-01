<?php 
$protocol="http";
if($_SERVER['HTTPS']) $protocol = 'https';

$data = json_decode($_POST['data'], true);
if ($data["name"] !== '' && $data["phone"] !== '' && $data["mail"] !== '') {

  if($data["mail_from"] == 'yes'){

    $idSubscrube = time();

    $strData = '';

    $strData .= '[' . $idSubscrube . ']' . PHP_EOL;
    $strData .= 'name = "' . $data['name'] . '"' . PHP_EOL;
    $strData .= 'mail = "' . $data['mail'] . '"' . PHP_EOL;
    $strData .= 'phone = "' . $data['phone'] . '"' . PHP_EOL;

    file_put_contents(__DIR__ . '/subscrube-request.ini', $strData, FILE_APPEND | LOCK_EX);

    $to = $data['mail'];
    $sub = "Подписка с сайта " . $_SERVER['SERVER_NAME'];
    $message = "<html>
                <body>
                <p>Здравствуйте!</p>
                <p>Для подтверждения E-mail перейдите по ссылке<p>
                <p><a href='" . $protocol . "://" . $_SERVER['SERVER_NAME'] . "/subscrube.php?id=" . $idSubscrube . "'>" . $protocol . "://" . $_SERVER['SERVER_NAME'] . "/subscrube.php?id=" . $idSubscrube . "</a><p>
                </body>
                </html>";

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $headers .= 'From: info@work-business.ru' . "\r\n" .
                'Reply-To: '.$data['mail'] . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

    mail($to, $sub, $message, $headers);
  }
  else{
    $to = "info@work-business.ru";
  
    $subject = "Обратный звонок";
    $charset = "utf-8";
    $headerss ="Content-type: text/html; charset=$charset\r\n";
    $headerss.="MIME-Version: 1.0\r\n";
    $headerss .= 'From: info@work-business.ru' . "\r\n" .
                'Reply-To: '.$data['mail'] . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
    $msg = "Имя: ".$data["name"]."<br>";$msg .= "Телефон: ".$data["phone"]."<br>";$msg .= "Email: ".$data["mail"]."<br>";
    mail($to, $subject, $msg, $headerss);
  }
  exit('success');
}
?>
