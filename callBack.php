<?php

$mail = $_GET['mail'];

$params = http_build_query($_GET);

  $message  = "<table style='width: 100%'><tr>";
  $message .= "<td>Для подтверждения заявки перейдите по ссылке указаной ниже:</td>";
  $message .= "</tr><tr>";
  $message .= '<td><a href="http://'.$_SERVER['SERVER_NAME'].'/accept.php?' . $params . '">Подтвердить заявку</a></td>';
  $message .= "</tr></table>";

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=ISO-8859-5' . "\r\n";
$headers .= 'From: <info@' . $_SERVER['SERVER_NAME'] . ">\r\n" 
. "Reply-To: info@". $_SERVER['SERVER_NAME'] . "\r\n" 
. "X-Mailer: PHP/" . phpversion();

if(!empty($mail)) {
	mail($mail, "Подтвердите ваш электронный адрес", $message, $headers);
}

require_once('accept.html');