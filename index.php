<?php
if($_GET['mail_active'] !== '' && $_GET['mail_active'] !== NULL){
    $to = "info@work-business.ru";

    $subject = "Пользователь активирован";
    $charset = "utf-8";
    $headerss ="Content-type: text/html; charset=$charset\r\n";
    $headerss.="MIME-Version: 1.0\r\n";
    $msg = "Пользователь активировал почту: ".$_GET['mail_active'];
    mail($to, $subject, $msg, $headerss);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Готовый бизнес под ключ - Реальный заработок - Купить бизнес</title>
    <link rel="stylesheet" href="css/style.css?v=45">
    <link rel="stylesheet" href="css/reseter.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/modaal.css">
    <link rel="stylesheet" href="css/coin-slider-styles.css" type="text/css" />

</head>
<body>
    <a class="back_to_top" title="Наверх"><img src="img/top-arrow.svg" alt="Top-arrow"></a>
    <div class="call_modal modal" href="modal.php?v=2" ver="2"></div>
    <div class="header-click">
        <div class="header-nav none">
            <p class="header-close none">
                <img src="img/close.png">
            </p>
            <div class="container">
                <nav class="header-flex">    
                    <ul class="header-item">
                        <li class="header-menu-item"><a class="header-menu-link" href="#mech">Мечтали о бизнесе?</a></li>
                        <li class="header-menu-item"><a class="header-menu-link" href="#time">Время окупаемости</a></li>
                        <li class="header-menu-item"><a class="header-menu-link" href="#real">Реальный доход</a></li>
                        <li class="header-menu-item"><a class="header-menu-link" href="#buy">Можете купить бизнес</a></li>
                        <li class="header-menu-item"><a class="header-menu-link" href="#why">Почему стоит купить</a></li>
                        <li class="header-menu-item"><a class="header-menu-link" href="#what">Как купить бизнес?</a></li>
                        <li class="header-menu-item"><a class="header-menu-link" href="#kon">Есть ли конкуренция?</a></li>       
                    </ul>
                    <ul class="header-item">
                        <li class="header-menu-item"><a class="header-menu-link" href="#help">Помогу стать лучше конкурентов</a></li>
                        <li class="header-menu-item"><a class="header-menu-link" href="#att">Почему решил продать бизнес?</a></li>
                        <li class="header-menu-item"><a class="header-menu-link" href="#sez">Внимание! Это сезонная работа</a></li>
                        <li class="header-menu-item"><a class="header-menu-link" href="#quest">Вопрос-ответ</a></li>
                        <li class="header-menu-item"><a class="header-menu-link" href="#garant">Мои гарантии</a></li>
                        <li class="header-menu-item"><a class="header-menu-link" href="#zakaz">Заказать бизнес</a></li>       
                        <li class="header-lii">Готовый бизнес под ключ</li>
                    </ul>
                </nav>
            </div>  
        </div>
    </div>
    <header class="header">
        <div class="wrapper">
            <div class="header-content">
                <div class="header-logo">
                    <img src="img/logo.svg" alt="Логотип" class="header-logo-img">
                    <p class="header-logo-text">Готовый бизнес<br><span>под ключ</span></p>    
                </div>
                <div class="header-block">
                    <img src="img/logotype.png">
                </div>
                
                    <!-- <a class="cd-bouncy-nav-trigger" href="#0">
                    
                </a>
              
                <div class="cd-bouncy-nav-modal">
                    <nav>
                        <ul class="cd-bouncy-nav">
                            <li><a href="#0">Category 1</a></li>
                            <li><a href="#0">Category 2</a></li>
                            <li><a href="#0">Category 3</a></li>
                            <li><a href="#0">Category 4</a></li>
                            <li><a href="#0">Category 5</a></li>
                            <li><a href="#0">Category 6</a></li>
                        </ul>
                    </nav>
                    
                    <a href="#0" class="cd-close">Close modal</a>
                </div>  -->
                    



                <div class="header-btn2">
                    <a href="modal.php?v=2%type=1" class="header-btn modal">Заказать звонок</a>
                </div>
            </div>
        </div>
    </header>
    <!-- <div class="copy_slide">
        <div id='coin-slider'>
            <a>
              <img src='/img/bg-main-3.jpg'>
              <div class="erer">
                  <div class="slider-info">
                      <p class="slider-title">Готовый<br> бизнес</p> 
                      <p class="slider-title">Под ключ</p>
                  </div>
                  <p class="slider-desc">ваш реальный доход от 300.000 до 1.500.000 руб/мес </p>
              </div>
            </a>
            <a>
              <img src='/img/bg-main-1.jpg'>
            </a>
            <a>
              <img src='/img/bg-main-2.jpg'>
            </a>
        </div>
    </div> -->
    <div class="slider">
        <div class="slider-img slider-img-1">
            <div class="slider-info">
                <p class="slider-title">Готовый<br> бизнес</p> 
                <p class="slider-title">Под ключ</p>
            </div>
            <p class="slider-desc">ваш реальный доход от 300.000 до 1.500.000 руб/мес </p>
        </div>
        <div class="slider-img slider-img-2 slick-active">
            <div class="slider-info">
                <p class="slider-title">Готовый<br> бизнес</p>
                <p class="slider-title">Под ключ</p>
            </div>
            <p class="slider-desc">ваш реальный доход от 300.000 до 1.500.000 руб/мес </p>
        </div>
        <div class="slider-img slider-img-3">
            <div class="slider-info">
                <p class="slider-title">Готовый<br> бизнес</p>
                <p class="slider-title">Под ключ</p>
            </div>
            <p class="slider-desc">ваш реальный доход от 300.000 до 1.500.000 руб/мес </p>
        </div>
    </div>
    <main>
        <section class="one" id="mech">
            <div class="wrapper">
                <p class="one-title">Всегда мечтали о собственном бизнесе?</p>
                    <p class="one-desc">Хотите заниматься настоящим серьезным делом? Я предлагаю вам только легальный бизнес под ключ. Вы можете стать индивидуальным предпринимателем, открыть ООО или работать как физическое лицо.</p>
                <div class="one-content">
                    <div class="one-item">
                        <img src="img/item-1.jpg" alt="Item" class="one-img">
                        <p class="one-item-text">Никаких финансовых пирамид</p>
                        
                    </div>
                    <div class="one-item">
                        <img src="img/item-2.jpg" alt="Item" class="one-img">
                        <p class="one-item-text">Никакого специального обучения</p>
                        
                    </div>
                    <div class="one-item">
                        <img src="img/item-3.jpg" alt="Item" class="one-img">
                        <p class="one-item-text">Никаких биржевых брокеров</p>
                        
                    </div>
                    <div class="one-item">
                        <img src="img/item-4.jpg" alt="Item" class="one-img">
                        <p class="one-item-text">Никаких азартных игр</p>
                        
                    </div>
                    <div class="one-item">
                        <img src="img/item-5.jpg" alt="Item" class="one-img">
                        <p class="one-item-text">Никакого распространения</p>
                        
                    </div>
                </div>
                <div class="one-center">
                    <p class="one-bottom">Только реальный и только <span class="orange">легальный бизнес под ключ.</span></p>
                    <a href="#zakaz" class="one-btn">УЗНАЙТЕ ПОДРОБНЕЕ О ПОКУПКЕ ГОТОВОГО БИЗНЕСА</a>
                </div>
            </div>
        </section>
        <section class="time" id="time">
            <div class="time-wrapper">
                <div class="time-content">
                    <p class="time-title">Время окупаемости</p>
                    <p class="time-title orange">от 3 дней</p>
                    <p class="time-desc">Это зависит только от вас! Я и сам<br> работаю в этом направлении, и помогу<br> вам организовать доходный бизнес.</p>
                </div>
            </div>
                <div class="time-blue">
                    <p class="time-out"><span class="weight">Это <span class="blue">сезонная работа</span>, 9 месяцев можно зарабатывать в<br> среднем, <span class="orange">1.500.000 миллионов</span></span> рублей ежемесячно, а<br> зимой устроить себе отпуск. Главное, этот бизнес под<br> ключ подходит абсолютно всем!</p>
                </div>
                <div class="time-wrapper">
                    <p class="time-bottom"><span class="orange weight upper">Сделайте первый шаг</span><br> навстречу своему делу - оставьте<br> заявку на сайте.</p>    
                </div>
        </section>
        <div class="wrapper center mb">
            <a href="#zakaz" class="one-btn">УЗНАЙТЕ ПОДРОБНЕЕ О ПОКУПКЕ ГОТОВОГО БИЗНЕСА</a>
        </div>
        <section class="zabor" id="real">
            <div class="wrapper">
                <p class="zabor-title">СТРОИТЕЛЬСТВО <br class="disp"> ЗАБОРОВ - <span class="orange"><br class="n">  РЕАЛЬНЫЙ<br class="disp"> ДОХОД</span></p>
                    <p class="zabor-desc">Вы получите:</p>
                <div class="zabor-content">
                    <div class="zabor-item">
                        <img src="img/item-1.svg" alt="Item" class="zabor-img">
                        <p class="zabor-item-text">Эффективно настроенную таргетированную рекламу</p>
                        
                    </div>
                    <div class="zabor-item">
                        <img src="img/item-2.svg" alt="Item" class="zabor-img">
                        <p class="zabor-item-text">Необходимую сопроводительную документацию</p>
                        
                    </div>
                    <div class="zabor-item">
                        <img src="img/item-3.svg" alt="Item" class="zabor-img">
                        <p class="zabor-item-text">Полностью разработанный бизнес - план</p>
                        
                    </div>
                    <div class="zabor-item">
                        <img src="img/item-4.svg" alt="Item" class="zabor-img">
                        <p class="zabor-item-text">Полную инструкцию по работе</p>
                        
                    </div>
                    <div class="zabor-item">
                        <img src="img/item-5.svg" alt="Item" class="zabor-img">
                        <p class="zabor-item-text">Собственный веб сайт</p>
                        
                    </div>
                    <div class="zabor-item">
                        <img src="img/item-6.svg" alt="Item" class="zabor-img">
                        <p class="zabor-item-text">Обучение и поддержку</p>
                        
                    </div>
                </div>
                <p class="zabor-bottom">Я предлагаю вам <span class="orange">бизнес под ключ</span> по установке заборов.</p>
                <div class="center">
                    <a href="#zakaz" class="one-btn">УЗНАЙТЕ ПОДРОБНЕЕ О ПОКУПКЕ ГОТОВОГО БИЗНЕСА</a>
                </div>
            </div>
        </section>
        <section class="itog" id="buy">
            <div class="itog-wrapperr">
                <div class="itog-content">
                    <p class="itog-title blue">В итоге вы можете</p>
                    <p class="itog-title orange">купить готовый бизнес</p>
                    <p class="itog-desc">всего за 150.000 рублей. Эта сумма окупится вам<br> с первого же заказа. <span class="orange">Реальный доход в месяц<br></span> <span class="weight">составляет около 1.500.000 руб.</span></p>
                </div>
            </div>
                    <div class="itog-flex">
                        <div class="itog-item">
                            <p class="itog-item-title">Моя месячная<br> статистика</p>
                            <p class="itog-item-title orange">за апрель, 2021 года:</p>
                        </div>
                        <div class="itog-item">
                            <p class="itog-item-text">Затраты на рекламу:</p>
                            <p class="itog-item-price">87.125 ₽</p>
                        </div>
                        <div class="itog-item">
                            <p class="itog-item-text">Выполнено объектов:</p>
                            <p class="itog-item-price">11 шт</p>
                        </div>
                        <div class="itog-item">
                            <p class="itog-item-text">Доход:</p>
                            <p class="itog-item-price">431.337 ₽</p>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="center mb">
                            <a href="#zakaz" class="one-btn uy">УЗНАЙТЕ ПОДРОБНЕЕ О ПОКУПКЕ ГОТОВОГО БИЗНЕСА</a>
                        </div>
                    </div>
        </section>
        <section class="why" id="why">
            <div class="wrapper">
                <div class="why-title orange"><span class="blue">ПОЧЕМУ стоит</span><br> КУПИТЬ <span class="blue">ЭТОТ</span> <span class="msh">ГОТОВЫЙ БИЗНЕС?</span></div>
                <div class="why-content">
                    <div class="why-item">
                        <p class="why-item-text blue">01</p>
                        <p class="why-item-text orange">Он работает</p>
                        <p class="why-item-text">Идея уже есть и она уже приносит реальный доход</p>
                    </div>
                    <div class="why-item">
                        <p class="why-item-text blue">02</p>
                        <p class="why-item-text orange">Экономия</p>
                        <p class="why-item-text">Время и деньги на тестирование рекламы потратили мы, вы просто получаете поток заявок</p>
                    </div>
                    <div class="why-item">
                        <p class="why-item-text blue">03</p>
                        <p class="why-item-text orange">Бизнес под ключ</p>
                        <p class="why-item-text">Все сделано за вас и готово к работе</p>
                    </div>
                    <div class="why-item">
                        <p class="why-item-text blue">04</p>
                        <p class="why-item-text orange">Востребовано</p>
                        <p class="why-item-text">Строительство заборов всегда востребовано Это сезонная работа, но за сезон вы заработаете несколько миллионов.</p>
                    </div>
                    <div class="why-item">
                        <p class="why-item-text blue">05</p>
                        <p class="why-item-text orange">Обучение</p>
                        <p class="why-item-text">Вы получите подробную инструкцию о работе и практические советы</p>
                    </div>
                </div>
                <p class="why-bottom">В итоге вы гарантированно получаете этот <span class="orange">доходный бизнес</span></p>
                <div class="center mb">
                    <a href="#zakaz" class="one-btn">УЗНАЙТЕ ПОДРОБНЕЕ О ПОКУПКЕ ГОТОВОГО БИЗНЕСА</a>
                </div>
            </div>
        </section>
        <section class="what" id="what">
            <div class="wrapper">
                <div class="what-title orange"><span class="blue">КАК</span> КУПИТЬ<br class="brh"> <span class="blue">ДАННЫЙ</span> БИЗНЕС<br class="brh"> ПОД КЛЮЧ?</div>
                <div class="what-content-two">
                    <div class="what-item">
                        <img src="img/item-1-1.svg" alt="Item" class="what-img">
                        <p class="what-item-title">Подайте заявку <a href="#zakaz" class="what-link orange">тут</a></p>
                        <p class="what-item-desc">Обратите внимание, что заполнить данные нужно максимально корректно, по ним мы будем составлять договор.</p>
                    </div>
                    <div class="what-item">
                        <img src="img/item-1-2.svg" alt="Item" class="what-img">
                        <p class="what-item-title">Примите входящий звонок</p>
                        <p class="what-item-desc">Я свяжусь с Вами и мы обсудим ваш бизнес по установке заборов.</p>
                    </div>
                </div>
                <div class="what-content">
                    <div class="what-item">
                        <img src="img/item-1-3.svg" alt="Item" class="what-img">
                        <p class="what-item-title">Подпишите договор</p>
                        <p class="what-item-desc">По данным указанным в заявке мы составим договор и вышлем Вам для подписи.</p>
                    </div>
                    <div class="what-item">
                        <img src="img/item-1-4.svg" alt="Item" class="what-img">
                        <p class="what-item-title">Отправьте нам договор</p>
                        <p class="what-item-desc">Скан договора вы отправите на электронную почту, а оригинал почтой России или курьером.</p>
                    </div>
                    <div class="what-item">
                        <img src="img/item-1-5.svg" alt="Item" class="what-img">
                        <p class="what-item-title">Внесите оплату</p>
                        <p class="what-item-desc">Оплатить вы можете сразу после подписания договора (или раньше - по желанию). Чем раньше вы внесете оплату, тем быстрее сможете открыть свое дело.</p>
                    </div>
                    <div class="what-item">
                        <img src="img/item-1-6.svg" alt="Item" class="what-img">
                        <p class="what-item-title">Получите <span class="orange">готовый доходный бизнес</span> в течение 72-х часов</p>
                    </div>
                </div>
                <div class="what-bottom"><span class="what-b1">ВСЕ ЧЕСТНО И</span> <span class="what-b2"> ПРОЗРАЧНО -</span> <br><span class="what-b3">ПОЛУЧЕНИЕ ПРИБЫЛИ <b>Я ГАРАНТИРУЮ</b></span></div>
                <div class="center mb what-pos">
                    <a href="#zakaz" class="one-btn">ПОДАТЬ ЗАЯВКУ НА ПРИОБРЕТЕНИЕ БИЗНЕСА</a>
                </div>
            </div>
        </section>
        <section class="con" id="kon">
            <div class="wrapper">
                <p class="con-title">ЕСТЬ ЛИ <span class="orange">КОНКУРЕНЦИЯ?</span></p>
                <p class="con-desc">Да, каждый успешный бизнес сопровождается конкуренцией. Но в моем бизнесе большинство совершают одни и те же ошибки, из-за которых к ним перестают обращаться. Поэтому конкуренция вам не страшна если:</p>
            </div>
            <div class="con-bg">
                <div class="wrapper">
                    <div class="con-content">
        
                        <p class="con-item">Вы даете<br class="brh"> гарантии</p>
                        <p class="con-item">Выполняете<br> работу в срок</p>
        
                        <p class="con-item">Не делаете<br> больших<br class="brh"> накруток</p>
                        <p class="con-item">Используете<br class="brh"> только<br class="brh"> качественные<br class="brh"> материалы</p>
                        <p class="con-item">Проверяете<br> качество работы<br> перед сдачей хозяевам</p>
                    </div>
                    <p class="con-bottom">И помните,<br class="brh"> что у нас большая<br class="brh"> страна и спрос<br class="brh"> на <span class="orange">заборы</span><br class="brh"> становится все<br class="brh"> больше и больше,<br class="brh"> а значит, работы<br class="brh"> хватит на всех.</p>
                    <div class="center mb">
                        <a href="#zakaz" class="one-btn">ПОДАТЬ ЗАЯВКУ НА ПРИОБРЕТЕНИЕ БИЗНЕСА</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="help" id="help">
            <div class="wrapper">
                <p class="help-title">Я ПОМОГУ ВАМ СТАТЬ <span class="orange">ЛУЧШЕ КОНКУРЕНТОВ</span></p>
                <p class="help-desc">В этой сфере я работаю уже более 20 лет и знаю много тонкостей и нюансов работы. Я поделюсь с<br> вами всеми хитростями этого дела, если вы решите купить реальный бизнес. Например, вы узнаете:</p>
                <div class="help-content">
                    <div class="help-item">
                        <img src="img/item-2-1.svg" alt="Item" class="help-img">
                        <p class="help-item-text">Как не остаться в минусе ни при каких  обстоятельствах</p>
                    </div>
                    <div class="help-item">
                        <img src="img/item-2-2.svg" alt="Item" class="help-img">
                        <p class="help-item-text">Как контактировать с поставщиками и получать <span class="hr">хорошие скидки</span></p>
                    </div>
                    <div class="help-item">
                        <img src="img/item-2-3.svg" alt="Item" class="help-img">
                        <p class="help-item-text">Как понять, что клиент действительно готов сделать заказ и не передумает</p>
                    </div>
                    <div class="help-item">
                        <img src="img/item-2-4.svg" alt="Item" class="help-img">
                        <p class="help-item-text">Какие могут быть <span class="hr">сюрпризы</span> в работе с производством</p>
                    </div>
                </div>
                <p class="help-bottom">Также вы узнаете много других секретов и хитростей, которые позволят вам получать серьезный и реальный доход.</p>
                <div class="center mb">
                    <a href="#what" class="one-btn">КУПИТЬ БИЗНЕС ПОД КЛЮЧ</a>
                </div>
            </div>
        </section>
        <section class="form">
            <div class="wrapper">
                <div class="form-title">Новости и советы<span> Подписывайтесь!</span></div>
                <form action="" method="post" class="form-feedback form_podpis" name="feedback_form" onsubmit="return sendForm(this);">
                    <div class="form-flex">
                        <input type="text" name="name" id="name" class="form-inp" placeholder="Введите Ваше имя">
                        <input type="tel" name="phone" id="phone" class="form-inp" placeholder="Введите Ваш телефон">
                    </div>
                    <div class="form-flex">
                        <input type="email" name="mail" id="mail" class="form-inp" placeholder="Введите Ваш email">
                        <button type="submit" name="send" class="form-btn box">Отправить данные для подписки</button>
                        <input type="hidden" name="info" value="Форма подписки">
                    </div>
                </form>
            </div>
        </section>
        <section class="att" id="att">
            <div class="wrapper">
                <p class="att-title blue">ПОЧЕМУ Я<br class="brh"> РЕШИЛ ПРОДАТЬ <span class="orange">ДОХОДНЫЙ БИЗНЕС?</span></p>
                <div class="att-flex">
                    <div class="att-item">
                        <p class="att-desc">Вполне резонный вопрос. Но каждый адекватный человек хочет развиваться и увеличивать свой доход. На сегодняшний день я осваиваю новое направление бизнеса с более высоким доходом, поэтому не могу больше тратить время даже на такой прибыльный бизнес.</p>
                        <p class="att-desc">Зарабатываешь сам - помогай зарабатывать другим. Так прибыль выше.</p>
                        <a href="#zakaz" class="one-btn">ПОДАТЬ ЗАЯВКУ НА ПРИОБРЕТЕНИЕ БИЗНЕСА</a>
                    </div>
                </div>
                <div class="att-bottom blue">ВНИМАНИЕ!<br class="brh"> ЭТО <span class="orange">СЕЗОННАЯ РАБОТА</span></div>
            </div>
        </section>
        <section class="if" id="sez">
            <div class="wrapper">
                <div class="if-title">Если вы решили<br class="brh"> приобрести у меня<br class="brh"> этот <span class="orange">прибыльный<br class="brh"> бизнес под ключ</span>, то<br class="brh"> стоит иметь в виду, что<br class="brh"> это сезонная работа.</div>
                <div class="if-content">
                    <div class="if-item">
                        <img src="img/item-3-1.svg" alt="Item" class="if-img">
                        <div class="if-item-text">Больше всего заказов поступает весной, летом и осенью. Зимой количество заявок снижается и вы можете позволить себе отдохнуть.</div>
                    </div>
                    <div class="if-item">
                        <img src="img/item-3-2.svg" alt="Item" class="if-img">
                        <div class="if-item-text">За 1 сезон вы заработаете несколько миллионов, что позволит вам спокойно не работать в зимний период.</div>
                    </div>
                    <div class="if-item">
                        <img src="img/item-3-3.svg" alt="Item" class="if-img">
                        <div class="if-item-text">Если в холодное время можно ожидать к спаду заявок, то весной вы должны быть готовы к значительному увеличению потока клиентов.</div>
                    </div>
                </div>
                <div class="if-bottom"><span class="orange" style="text-transform: uppercase; font-weight: 700;">Установка заборов - прибыльный бизнес</span>, который поможет вам получать серьезные доходы.</div>
                <div class="center">
                    <a href="#zakaz" class="one-btn">ПОДАТЬ ЗАЯВКУ НА ПРИОБРЕТЕНИЕ БИЗНЕСА</a>
                </div>
            </div>
        </section>
        <section class="quest" id="quest">
            <div class="wrapper">
                <div class="quest-title blue">ВОПРОСЫ -<br class="brh"> ОТВЕТЫ О ТОМ КАК КУПИТЬ У<br class="brh"> МЕНЯ <span class="orange">ГОТОВЫЙ<br class="brh"> БИЗНЕС</span></div>
            </div>
                <div class="wrapper2">
                    <div class="quest-content">
                        <button class="accordion" style="outline: none;"><span>В какую сумму<br> обойдется готовый<br> бизнес по установке<br> заборов?</span></button>
                        <div class="panel">
                            <p class="quest-text">В 150 тыс. руб.</p>
                        </div>
                        <button class="accordion" style="outline: none;"><span>Что вы получите за эту сумму?</span></button>
                        <div class="panel">
                            <p class="quest-text">В стоимость входит бизнес-план, персональный сайт, вся необходимая документация и полноценное обучение.</p>
                        </div>
                        <button class="accordion" style="outline: none;"><span>Как купить бизнес под ключ?</span></button>
                        <div class="panel">
                            <p class="quest-text">Заполните предложенную ниже форму, дождитесь звонка, подпишите соглашение и внесите оплату. После этого вы станете владельцев прибыльного бизнес.</p>
                        </div>
                        <button class="accordion" style="outline: none;"><span>Какие гарантии<br> получения бизнеса<br> после оплаты?</span></button>
                        <div class="panel">
                            <p class="quest-text">Сотрудничество ведется в соответствии с заключенным договором.</p>
                        </div>
                        <button class="accordion" style="outline: none;"><span>Установка заборов<br> всегда доходный<br> бизнес?</span></button>
                        <div class="panel">
                            <p class="quest-text">Доход вы будете получать постоянно, но летом он больше, чем зимой.</p>
                        </div>
                        <button class="accordion" style="outline: none;"><span>Сколько можно<br> заработать в месяц?</span></button>
                        <div class="panel">
                            <p class="quest-text">Сумма зависит от вашей работоспособности, сезона и региона. В среднем от 500 тыс. до 5 млн.</p>
                        </div>
                        <button class="accordion" style="outline: none;"><span>Как долго будет<br> окупаться бизнес?</span></button>
                        <div class="panel">
                            <p class="quest-text">Существует вероятность, что вы окупите расходы на покупку бизнеса уже после выполнения первого заказа.</p>
                        </div>
                        <button class="accordion" style="outline: none;"><span>Можно ли встретиться лично?</span></button>
                        <div class="panel">
                            <p class="quest-text">Естественно, если вы проживаете в СПБ. Я готов встретиться лично с каждым, кто хочет стать успешным бизнесменом.</p>
                        </div>
                    </div>
                </div>
        </section>
        <div class="wrapper">
            <p class="garant-title blue">Мои гарантии</p>
                    <p class="garant-desc">Я гарантирую Вам, что:</p>
        </div>
        <section class="garant" id="garant">
            <div class="wrapper">
                <div class="garant-content">
                    <ul class="garant-item">
                            <li><span class="garant-text">Передам все знания, которые могут  потребоваться в серьезном бизнесе</span></li>
                            <li><span class="garant-text">Вы не останетесь в минусе</span></li>
                            <li><span class="garant-text">Если вам не подойдет этот прибыльный бизнес, то вы всегда сможете его продать другим желающим</span></li>
                            <li><span class="garant-text">При грамотному подходу к этому делу, у вас всегда будут клиенты</span></li>
                            <li><span class="garant-text">Даже если вы перестанете заниматься этим доходным бизнесом, то знания останутся при вас и вы всегда сможете передать их другим, проводя платное обучение.</span></li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="wrapper">
            <p class="send-title blue"><span class="orange">ПОЖАЛУЙСТА!</span><br>ВНИМАТЕЛЬНО ЗАПОЛНЯЙТЕ ДАННЫЕ!</p>
            <p class="send-desc">от этого зависит правильное составление договора</p>
        </div>
        <section class="send" id="zakaz">
            <div class="wrapper">
                <div class="send-content">
                    <form action="" method="post" class="send-form form_podp" id="send-form" onsubmit="return sendForm(this);">
                        <p class="send-form-title">ЗАКАЗАТЬ БИЗНЕС ПОД КЛЮЧ</p>
                        <input type="text" name="name" id="name" class="send-inp" placeholder="Ваше Ф.И.О.">
                        <div class="send-flex">
                            <input type="email" class="send-inp-cut" name="mail" placeholder="Електронная почта:">
                            <input type="tel" class="send-inp-cut" name="phone" placeholder="Номер телефона:">
                        </div>
                        <div class="send-flex">
                            <input type="text" class="send-inp-cut" name="time" id="time_call" placeholder="Удобное время для связи:">
                            <input type="text" class="send-inp-cut" name="date" id="birthday" placeholder="Дата рождения:">
                        </div>
                        <input type="text" name="city" id="city" class="send-inp" placeholder="Город проживания:">
                        <div class="send-flex">
                            <input type="text" class="send-inp-cut" name="num" id="num_passport" placeholder="Серия и номер паспорта:">
                            <input type="text" class="send-inp-cut" name="when" id="date_passport" placeholder="Когда выдан паспорт:">
                        </div>
                        <input type="text" name="who" id="name" class="send-inp" placeholder="Кем выдан паспорт:">
                        <input type="text" name="adress" id="name" class="send-inp" placeholder="Адрес прописки:">
    
                            <div class="g-recaptcha" data-sitekey="6LekwpYbAAAAACz0LuT4W8u8GyeRrwtY0mFL1f6-"></div>
                        
                        <button type="submit" class="send-btn g-recaptcha2" name="send">Отправить данные для заключения договора</button>
                    </form>
                    <div class="send-text">ИЛИ ПРОСТО СВЯЖИТЕСЬ СО МНОЙ ЛИЧНО<br> ПО ТЕЛЕФОНУ: <a href="#" class="send-link orange">+79305467687</a></div>
                </div>
            </div>
        </section>
    </main>
    <div class="wrapper">
        <p class="footer-title blue">НЕ НАШЛИ ОТВЕТ<br class="brh"> НА СВОЙ ВОПРОС?<br class="brh"> <span class="orange">СВЯЖИТЕСЬ СО<br class="brh"> МНОЙ!</span></p>
    </div>
    <footer class="footer">
        <div class="wrapper">
            <p class="footer-title2">Просто заполните форму обратной связи и я лично свяжусь с вами в<br> течении 72 часов.</p>
            <div class="footer-content">
                <div class="footer-item">
                    <form action="" method="post" class="footer-form form_footer" onsubmit="return sendForm(this);">
                        <input type="text" name="name" class="footer-inp" placeholder="Ф.И.О.">
                        <div class="footer-flex2">
                            <input type="tel" name="phone" class="footer-inp-cut" placeholder="Телефон для связи">
                            <input type="email" name="mail" class="footer-inp-cut" placeholder="Электронная почта">
                        </div>
                        <textarea rows="3" name="mess" class="footer-inp" placeholder="Ваше сообщение"></textarea>
                        <div class="footer-flex">
                             <div class="g-recaptcha" height="100px" data-sitekey="6LekwpYbAAAAACz0LuT4W8u8GyeRrwtY0mFL1f6-"></div>
                            <button type="submit" class="footer-btn" name="send">Отправить</button>
                        </div>
                    </form>
                </div>
                <div class="footer-item footer-item1">
                    <div class="footer-flex3 fo-1">
                        <a href="#" class="footer-link"><img src="img/footer-item-1.svg" alt="Item" class="footer-icon"> +7 (930) 346-43-54</a>
                        <a href="#" class="footer-link"><img src="img/footer-item-4.png" alt="Item" class="footer-icon"> work-business.ru</a>
                    </div>
                    <div class="footer-flex3 fo-2">
                        <a href="#" class="footer-link"><img src="img/footer-item-2.svg" alt="Item" class="footer-icon"> big.Business</a>
                        <a href="#" class="footer-link"><img src="img/footer-item-4.png" alt="Item" class="footer-icon"> info@work-business.ru</a>
                    </div>
                    <p class="footer-item-our blue">НАШ ОФИС</p>
                    <p class="footer-adress">194352 г. Санкт-Петербург, ул.Сиреневый бульвар, дом 18, корпус 1, офис 415 Б.</p>
                    <p class="footer-adress2">Для визита в офис обязательно следует согласовать время по телефону, чтобы охрана подготовила пропуск на Ваше имя</p>
                    <hr class="footer-hr">
                    <div class="footer-flex3 fo-3" style="align-items: center;">
                        <p class="footer-adress3">Если вы не хотите ждать и предпочитаете решать вопросы по телефону, то просто позвоните мне по номеру: 8 (812) 9516055</p>
                        
    <!--LiveInternet counter-->
    <a href="https://www.liveinternet.ru/click"
    target="_blank"><img id="licntCB20" width="41" height="55" style="border:0; filter: invert(1);"
    title="LiveInternet: показано количество просмотров и посетителей"
    src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAEALAAAAAABAAEAAAIBTAA7"
    alt=""/></a><script>(function(d,s){d.getElementById("licntCB20").src=
    "https://counter.yadro.ru/hit?t29.20;r"+escape(d.referrer)+
    ((typeof(s)=="undefined")?"":";s"+s.width+"*"+s.height+"*"+
    (s.colorDepth?s.colorDepth:s.pixelDepth))+";u"+escape(d.URL)+
    ";h"+escape(d.title.substring(0,150))+";"+Math.random()})
    (document,screen)</script>
    <!--/LiveInternet-->
                        <!-- <img src="img/stat.png" style="max-width: 100%;" alt=""> -->
                    </div>
                </div>
            </div>
            <div class="footer-copy">Copyright © АЛЕКСАНДР "ГОТОВЫЙ БИЗНЕС ПОД КЛЮЧ" 2021 год.  Все права защищены. Копирование материалов без письменного разрешения владельца сайта запрещено. Сайт не является публичной офертой или интернет-магазином</div>
        </div>
    </footer>

    <div class="curtain flex-block">

        <div class="modal-wrapper">

            <button class="close" onclick="closeDialog()">Закрыть</button>

            <div class='frm-body'>

                <div class="result-send subscrube-result">
                    <div class="icon-success">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                            <path d="M36 17L22 33l-8-7" stroke-miterlimit="10" fill="none" stroke="#1de9b6" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M25 0A25 25 0 000 25a25 25 0 0025 25 25 25 0 0025-25A25 25 0 0025 0zm0 3a22 22 0 0122 22 22 22 0 01-22 22A22 22 0 013 25 22 22 0 0125 3z" fill="#ccc"/>
                        </svg>
                    </div>
                    <div class="message-result"></div>
                </div>

            </div>

        </div>

    </div>



 <script>
   function onSubmit(token) {
     document.getElementById("send-form").submit();
   }
 </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="js/slick.js"></script>
     <script src="https://www.google.com/recaptcha/api.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/modernizr.js"></script> <!-- Modernizr -->
    <script src="js/main.js?v=15"></script> <!-- Resource jQuery -->
    <script src="js/modaal.js"></script>
    
<script type="text/javascript" src="js/coin-slider.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          $('.slider').slick({
            arrows: false,  
            autoplay: true,
            autoplaySpeed: 4000,
            dots: true
          });
        });
      </script>
      <script>
        $('.modal, .modal-btn').modaal({
        type: 'ajax'
        });
      </script>
      <script>
    $('.header-close').on('click', () => {
    $('.header-nav').addClass('none');
    $('.header-nav').removeClass('block');
    $('.header-close').addClass('none');
    $('.header-close').removeClass('block');
    $('.header-close-span').addClass('none');
    $('.header-close-span').removeClass('block');
    $('body').removeClass('over');


});
$('.header-block').on('click', () => {
    $('.header-nav').addClass('block');
    $('.header-nav').removeClass('none');
    $('.header-nav').removeClass('none');
    $('.header-close').addClass('block');
    $('.header-close').removeClass('none');
    $('.header-close-span').addClass('block');
    $('.header-close-span').removeClass('none');
    $('body').addClass('over');
});
$('.header-menu-link').on('click', () => {
    $('.header-nav').addClass('none');
    $('.header-nav').removeClass('block');
    $('.header-close').addClass('none');
    $('.header-close').removeClass('block');
    $('.header-close-span').addClass('none');
    $('.header-close-span').removeClass('block');
    $('body').removeClass('over');
});

      </script>
      <script>
          var linkNav = document.querySelectorAll('[href^="#"]'), //выбираем все ссылки к якорю на странице
    V = 0.1;  // скорость, может иметь дробное значение через точку (чем меньше значение - тем больше скорость)
for (var i = 0; i < linkNav.length; i++) {
    linkNav[i].addEventListener('click', function(e) { //по клику на ссылку
        e.preventDefault(); //отменяем стандартное поведение
        var w = window.pageYOffset,  // производим прокрутка прокрутка
            hash = this.href.replace(/[^#]*(.*)/, '$1');  // к id элемента, к которому нужно перейти
        t = document.querySelector(hash).getBoundingClientRect().top,  // отступ от окна браузера до id
            start = null;
        requestAnimationFrame(step);  // подробнее про функцию анимации [developer.mozilla.org]
        function step(time) {
            if (start === null) start = time;
            var progress = time - start,
                r = (t < 0 ? Math.max(w - progress/V, w + t) : Math.min(w + progress/V, w + t));
            window.scrollTo(0,r);
            if (r != w + t) {
                requestAnimationFrame(step)
            } else {
                location.hash = hash  // URL с хэшем
            }
        }
    }, false);
}
      </script>
      <script>
 var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
      </script>
  
</body>
</html>