<?php

$protocol="http";

if($_SERVER['HTTPS']) $protocol = 'https';

// при нахождении такой заявки,
// проверяем по этой ссылке пользователь уже подписывался или нет
$subscbers = parse_ini_file( __DIR__ . '/subscrube.ini', true );

if (isset($_GET['id'])) {

    $applications = parse_ini_file( __DIR__ . '/subscrube-request.ini', true );

    // проверяем есть ли заявка на подписку с таким id
    if (array_key_exists($_GET['id'], $applications)) {

        if (array_key_exists($_GET['id'], $subscbers)) {

            echo "<script>sessionStorage.setItem('subscrube', '<p>Вы уже подписаны</p>');</script>";

        } else {

            // переносим данные в список подтверждённых подписчиков
            $userData = $applications[$_GET['id']];

            $strData = '';
            $strData .= '[' . $_GET['id'] . ']' . PHP_EOL;
            $strData .= 'name = "' . $userData['name'] . '"' . PHP_EOL;
            $strData .= 'mail = "' . $userData['mail'] . '"' . PHP_EOL;
            $strData .= 'phone = "' . $userData['phone'] . '"' . PHP_EOL;
            $strData .= 'confirmation = "' . time() . '"' . PHP_EOL;

            file_put_contents(__DIR__ . '/subscrube.ini', $strData, FILE_APPEND | LOCK_EX);

            echo "<script>sessionStorage.setItem('subscrube', '<h3>Спасибо</h3><p>Подписка успешно оформлена</p>');</script>";


            // отправляем сообщение админу
            $to = 'info@work-business.ru';
            $sub = "Новый подписчик на сайте " . $_SERVER['SERVER_NAME'];
            $message = "<html>
                        <body>
                        <p><strong>Дата подписки:</strong> " . date('d.m.Y H:i:s', $_GET['id']) . "</p>
                        <p><strong>Имя:</strong> " . $userData['name'] . " </p>
                        <p><strong>E-mail:</strong> " . $userData['mail'] . "<p>
                        <p><strong>Телефон:</strong> " . $userData['phone'] . "<p>
                        <p><strong>Дата подтверждения подписки:</strong> " . date('d.m.Y H:i') . "</p>
                        </body>
                        </html>";

            $headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
            $headers .= 'From: info@work-business.ru' . "\r\n";

            mail($to, $sub, $message, $headers);
        }

    }

    echo "<script>location='/';</script>";

}

?>