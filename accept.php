<?php

$name = $_GET['name'];
$lastname = $_GET['lastname'];
$thirdname = $_GET['thirdname'];
$age = $_GET['age'];
$degree = $_GET['degree'];
$spec = $_GET['spec'];
$adress = $_GET['adress'];
$tel = $_GET['tel'];
$mail = $_GET['mail'];
$type = $_GET['type'];
$text = $_GET['text'];
$city = $_GET['city'];
$country = $_GET['country'];
$index = $_GET['index'];
$street = $_GET['street'];

$topic = 'Новый запрос на сайте';


foreach($_GET as $key => $value) {
  // print_r(mb_detect_encoding($value));
  // echo ' ';
  // print_r($value);
  // echo '<br>';
  $_GET[$key] = autoencode($value);
}

if(!empty($type)) {
  if($type == 'subscribe') {
    $topic = 'Новая подписка';
  }
  if($type == 'invest') {
    $topic = 'Новая заявка от инвестора';
  }
  if($type == 'contact') {
    $topic = 'Новое сообщение через контактную форму';
  }
  if($type == 'buy_docs') {
  	$topic = 'Новая заявка на получение документов наложенным платежом';
  }
}

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8'. "\r\n";
$headers .= "From: info@" . $_SERVER['SERVER_NAME'] . "\r\nReply-to: $mail" . "\r\n" . "X-Mailer: PHP/" . phpversion();

$message = '';
if(!empty($theme)) {
  $message .= "<br>Тема: <b>$theme</b>";
}
if(!empty($lastname)) {
  $message .= "<br>Фамилия: <b>$lastname</b>";
}
if(!empty($name)) {
  $message .= "<br>Имя: <b>$name</b>";
}
if(!empty($thirdname)) {
  $message .= "<br>Отчество: <b>$thirdname</b>";
}
if(!empty($age)) {
  $message .= "<br>Возраст: <b>$age</b>";
}
if(!empty($degree)) {
  $message .= "<br>Образование: <b>$degree</b>";
}
if(!empty($spec)) {
  $message .= "<br>Специальность: <b>$spec</b>";
}
if(!empty($adress)) {
  $message .= "<br>Адрес проживания: <b>$adress</b>";
}
if(!empty($country)) {
  $message .= "<br>Страна: <b>$country</b>";
}
if(!empty($city)) {
  $message .= "<br>Город: <b>$city</b>";
}
if(!empty($index)) {
	$message .= "<br>Почтовый индекс: <b>$index</b>";
}
if(!empty($street)) {
	$message .= "<br>Улица: <b>$street</b>";
}
if(!empty($skype)) {
  $message .= "<br>Skype: <b>$skype</b>";
}
if(!empty($tel)) {
  $message .= "<br>Контактный телефон: <b>$tel</b>";
}
if(!empty($mail)) {
  $message .= "<br>Email: <b>$mail</b>";
}
if(!empty($text)) {
  $message .= "<br>Текст: <b>$text</b>";
}

mail('info@work-business.ru', $topic, $message, $headers);
mail('search-freelancer@yandex.ru', $topic, $message, $headers);
mail('website-key@inbox.ru', $topic, $message, $headers);

if($type == 'invest') {
  require_once('invest.html');
} else if($type == 'subscribe') {
  $f = fopen("requests.html", "a");
  fwrite($f, "<tr><td>".$mail."</td></td>"); 
  fclose($f);
  require_once('subscribe.html');
} else {
  require_once('thanks.html');
}

function is_utf8($string) { 
 for ($i=0; $i<strlen($string); $i++) { 
  if (ord($string[$i]) < 0x80) continue; 
  elseif ((ord($string[$i]) & 0xE0) == 0xC0) $n=1; 
  elseif ((ord($string[$i]) & 0xF0) == 0xE0) $n=2; 
  elseif ((ord($string[$i]) & 0xF8) == 0xF0) $n=3; 
  elseif ((ord($string[$i]) & 0xFC) == 0xF8) $n=4; 
  elseif ((ord($string[$i]) & 0xFE) == 0xFC) $n=5; 
  else return false; 
  for ($j=0; $j<$n; $j++) { 
   if ((++$i == strlen($string)) || ((ord($string[$i]) & 0xC0) != 0x80)) 
    return false; 
  } 
 } 
 return true; 
} 
function autoencode($string, $encoding='utf-8') 
{ 
  if (is_utf8($string)) $detect='utf-8'; 
  else  
  { 
    $cp1251=0; 
    $koi8u=0; 
    $strlen=strlen($string); 
    for($i=0;$i<$strlen;$i++) 
    { 
      $code=ord($string[$i]); 
      if (($code>223 and $code<256) or ($code==179) or ($code==180) or ($code==186) or ($code==191)) $cp1251++; // �-�, �, �, �, � 
      if (($code>191 and $code<224) or ($code==164) or ($code==166) or ($code==167) or ($code==173)) $koi8u++; // �-�, �, �, �, � 
    } 
    if ($cp1251>$koi8u) $detect='windows-1251'; 
    else $detect='koi8-u'; 
  } 
  if ($encoding==$detect) return $string; 
  else return iconv($detect, $encoding, $string); 
} 