<?php $gid = strval($_COOKIE['type_form']); setcookie("type_form", '1'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/reseter.css/1.0.5/reseter.min.css" integrity="sha512-irF31APCsYjudjNGIpEqlfbAYgEucPbSwrgxQ/rG+L6rCbsgXO1qrnGh0oxviW4qddvP9r39S5GXk2miFCoeNQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/modaal.css">
</head>
<body>
        <?php if($gid !== '3' && $gid !== '4' && $gid !== '5'): ?>
                <p class="modal-title">Просто заполните форму обратной связи и я лично свяжусь с вами в течении 72 часов.</p>
                <form action="" method="post" class="form-feedback form_modal_file" id="modal_form" name="modal_form" onsubmit="return sendForm(this);">
                        <input type="text" name="name" id="name" class="modal-inp" placeholder="Введите Ваше имя">
                        <input type="tel" name="phone" id="phone" class="modal-inp" placeholder="Введите Ваш телефон">
                        <input type="email" name="mail" id="mail" class="modal-inp" placeholder="Введите Ваш email">
                        <input type="hidden" name="info" value="Обратный звонок">
                        <input type="submit" name="send" class="modal-btn box" value="Отправить">
                </form>
        <?php elseif($gid == '3'): ?>
                <div class="result-send success-result active">
                        <div class="icon-success">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                                        <path d="M36 17L22 33l-8-7" stroke-miterlimit="10" fill="none" stroke="#001659" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M25 0A25 25 0 000 25a25 25 0 0025 25 25 25 0 0025-25A25 25 0 0025 0zm0 3a22 22 0 0122 22 22 22 0 01-22 22A22 22 0 013 25 22 22 0 0125 3z" fill="#ccc"></path>
                                </svg>
                        </div>
                        <div class="message-result">
                                <h3>Спасибо за проявленный интерес к покупке готового бизнеса под ключ.</h3>
                                <p>Вы отправили заявку на приобретения готового бизнеса под ключ! Я проверю ваши данные и свяжусь с вами по указанному вами адресу электронной почты, максимум в течение 72 часов. Обратите внимания, что я использую коммерческий адрес электронной почты и поэтому письма иногда попадают в папку СПАМ. Будьте внимательны!</p>
                        </div>
                </div>
        <?php elseif($gid == '4'): ?>
                <div class="result-send success-result active">
                        <div class="icon-success">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                                        <path d="M36 17L22 33l-8-7" stroke-miterlimit="10" fill="none" stroke="#001659" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M25 0A25 25 0 000 25a25 25 0 0025 25 25 25 0 0025-25A25 25 0 0025 0zm0 3a22 22 0 0122 22 22 22 0 01-22 22A22 22 0 013 25 22 22 0 0125 3z" fill="#ccc"></path>
                                </svg>
                        </div>
                        <div class="message-result">
                                <h3>Ваша заявка успешно отправлена!</h3>
                                <p>На Ваш почтовый адрес должно прийти письмо с подтверждением, что Вы являетесь владельцем данного почтового ящика. Если письмо не пришло, то проверьте папку СПАМ.</p>
                        </div>
                </div>
        <?php elseif($gid == '5'): ?>
                <div class="result-send success-result active">
                        <div class="icon-success">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                                        <path d="M36 17L22 33l-8-7" stroke-miterlimit="10" fill="none" stroke="#001659" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M25 0A25 25 0 000 25a25 25 0 0025 25 25 25 0 0025-25A25 25 0 0025 0zm0 3a22 22 0 0122 22 22 22 0 01-22 22A22 22 0 013 25 22 22 0 0125 3z" fill="#ccc"></path>
                                </svg>
                        </div>
                        <div class="message-result">
                                <h3>Спасибо за заявку на обратную связь!</h3>
                                <p>Я свяжусь с вами лично в течении 72 часов</p>
                        </div>
                </div>
        <?php endif; ?>
</body>
</html>