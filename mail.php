<?php
$recaptcha = $_POST['g-recaptcha-response'];
 
//Сразу проверяем, что он не пустой
if(!empty($recaptcha)) {
    //Получаем HTTP от recaptcha
    $recaptcha = $_REQUEST['g-recaptcha-response'];
    //Сюда пишем СЕКРЕТНЫЙ КЛЮЧ, который нам присвоил гугл
    $secret = '6LekwpYbAAAAAGKtoPrpA_PG-3IyUlDAMRkjACXS';
    //Формируем utl адрес для запроса на сервер гугла
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret ."&response=".$recaptcha."&remoteip=".$_SERVER['REMOTE_ADDR'];
 
    //Инициализация и настройка запроса
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
    //Выполняем запрос и получается ответ от сервера гугл
    $curlData = curl_exec($curl);
 
    curl_close($curl); 
    $curlData = json_decode($curlData, true);
 
}

$data = json_decode($_POST['data'], true);
if ($data["name"] !== '' && $data["phone"] !== '' && $data["mail"] !== '') {
$to = "info@work-business.ru";

$subject = "Форма заявки на приобретения готового бизнеса";
$charset = "utf-8";
$headerss ="Content-type: text/html; charset=$charset\r\n";
$headerss.="MIME-Version: 1.0\r\n";
$headerss .= 'From: info@work-business.ru' . "\r\n" .
            'Reply-To: '.$data['mail'] . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
$msg = "Имя: ".$data["name"]."<br>";$msg .= "Телефон: ".$data["phone"]."<br>";$msg .= "Email: ".$data["mail"]."<br>";$msg .= "Время для связи: ".$data["time"]."<br>";
$msg .= "Дата рождения: ".$data["date"]."<br>";$msg .= "Город проживания: ".$data["city"]."<br>";$msg .= "Номер паспорта: ".$data["num"]."<br>";
$msg .= "Когда выдан: ".$data["when"]."<br>";$msg .= "Кем выдан: ".$data["who"]."<br>";$msg .= "Адрес прописки: ".$data["adress"]."<br>";
if(mail($to, $subject, $msg, $headerss)) exit('success');

}

?>