<!DOCTYPE html>
<html>
<head>




<?php if (isset($_POST["send"])) {
$to = "info@work-business.ru";

$subject = "Форма обратной связи";
$charset = "utf-8";
$headerss ="Content-type: text/html; charset=$charset\r\n";
$headerss.="MIME-Version: 1.0\r\n";
$headerss.="Date: ".date('D, d M Y h:i:s O')."\r\n";
$msg = "Имя: ".$_POST["name"]."<br>";$$msg .= "Телефон: ".$_POST["phone"]."<br>";$msg .= "Email: ".$_POST["email"]."<br>";$msg .= "Форма: ".$_POST["info"]."<br>";
mail($to, $subject, $msg, $headerss);

}

?>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Спасибо!</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
      a {
        color:orange;
        text-decoration:none;
      }
      @media (min-width: 1800px) {
        html, body {
            background-color: #001659;
            color: #636b6f;
            font-family: 'IBM Plex Sans', sans-serif;
            font-weight: 100;
            margin: 0;
            background-size:cover;
            position:relative;
        }
        .header {
          width:100%;
          height:100px;
          background: #925EEB;
        background: -webkit-linear-gradient(#925EEB, #EB6AB8);
        background: -o-linear-gradient(#925EEB, #EB6AB8);
        background: linear-gradient(#925EEB, #EB6AB8);
        box-shadow: 0 0 15px rgba(0,0,0,0.5);
        display:flex;
        flex-direction:row;
        justify-content:flex-start;
        align-items:flex-center;
        }
        .header-logo {
          font-family:Helvetica;
          font-weight:bold;
          color:#DC143C;
          text-shadow: 1px 1px 1px #000;
          width:8%;
          font-size:2em;
          margin-left:20%;
          margin-top:12px;
          margin-right:1%;
        }
        .header-content {
          margin-top:40px;
        }
        .header-content-text-1 {
          font-family:Helvetica;
          color:#9925BB;
          font-weight:bold;
          font-size:1.2em;
          text-shadow: 0.5px 0.5px 1px #000;
        }
        .header-content-text-2 {
          font-family:Helvetica;
          color:PowderBlue;
          font-weight:bold;
          font-size:1.2em;
          text-shadow: 0.5px 0.5px 1px #000;
        }
        .header-number {
          align-self:center;
          text-shadow: 0.2px 0.2px 1px #000;
        }
        .content {
          display:flex;
          flex-direction:column;
          justify-content:flex-start;
          align-items:center;
        }
        .content img {
          margin-top:180px;
          margin-bottom:120px;
        }
        .content-header {
          font-family:Arial;
          color:white;
          font-weight:bold;
          font-size:3.5em;
          text-shadow: 1px 1px 2px #000;
          margin-bottom:20px;
        }
        .content-text-1 {
          font-family:Arial;
          color:white;
          font-weight:bold;
          font-size:1.6em;
          text-shadow: 1px 1px 2px #000;
        }
        .content-button {
          margin-top:40px;
          width:18%;
          height:40px;
          background: #925EEB;
        background: -webkit-linear-gradient(#925EEB, #EB6AB8);
        background: -o-linear-gradient(#925EEB, #EB6AB8);
        background: linear-gradient(#925EEB, #EB6AB8);
        box-shadow: 0 0 15px rgba(0,0,0,0.5);
          display:flex;
          align-items:center;
          justify-content: center;
          transition:0.5s;
          text-decoration:none;
          font-size:1.3em;
        }
        .content-button:hover {
          border-radius:10px;
        }
}





        @media (min-width: 1200px) {
html, body {
            background-color: #001659;
            color: #636b6f;
            height: 100vh;
            margin: 0;
            background-size:cover;
            position:relative;
        }
        .header {
          width:100%;
          height:100px;
          background: #925EEB;
        background: -webkit-linear-gradient(#925EEB, #EB6AB8);
        background: -o-linear-gradient(#925EEB, #EB6AB8);
        background: linear-gradient(#925EEB, #EB6AB8);
        box-shadow: 0 0 15px rgba(0,0,0,0.5);
        display:flex;
        flex-direction:row;
        justify-content:flex-start;
        align-items:flex-center;
        }
        .header-logo {
          font-family:Helvetica;
          font-weight:bold;
          color:#DC143C;
          text-shadow: 1px 1px 1px #000;
          width:8%;
          font-size:2em;
          margin-left:20%;
          margin-top:12px;
          margin-right:7%;
        }
        .header-content {
          margin-top:40px;
        }
        .header-content-text-1 {
          font-family:Helvetica;
          color:#9925BB;
          font-weight:bold;
          font-size:1.2em;
          text-shadow: 0.5px 0.5px 1px #000;
        }
        .header-content-text-2 {
          font-family:Helvetica;
          color:PowderBlue;
          font-weight:bold;
          font-size:1.2em;
          text-shadow: 0.5px 0.5px 1px #000;
        }

        .header-number {
          align-self:center;
          text-shadow: 0.2px 0.2px 1px #000;
        }
        .content {
          display:flex;
          flex-direction:column;
          justify-content:flex-start;
          align-items:center;
        }
        .content img {
          margin-top:180px;
          margin-bottom:120px;
        }
        .content-header {
          font-family:Arial;
          color:white;
          font-weight:bold;
          font-size:3.5em;
          text-shadow: 1px 1px 2px #000;
          margin-bottom:20px;
        }
        .content-text-1 {
          font-family:Arial;
          color:white;
          font-weight:bold;
          font-size:1.6em;
          text-shadow: 1px 1px 2px #000;
        }
        .content-button {
          margin-top:40px;
          width:18%;
          height:40px;
          background: #925EEB;
        background: -webkit-linear-gradient(#925EEB, #EB6AB8);
        background: -o-linear-gradient(#925EEB, #EB6AB8);
        background: linear-gradient(#925EEB, #EB6AB8);
        box-shadow: 0 0 15px rgba(0,0,0,0.5);
          display:flex;
          align-items:center;
          justify-content: center;
          transition:0.5s;
          text-decoration:none;
          font-size:1.3em;
        }
        .content-button:hover {
          border-radius:10px;
        }


}







/* Landscape tablets and medium desktops */
@media (min-width: 992px) and (max-width: 1199px) {
html, body {
            background-color: #001659;
            color: #636b6f;
            height: 100vh;
            margin: 0;
            background-size:cover;
            position:relative;
        }
        .header {
          width:100%;
          height:100px;
          background: #925EEB;
        background: -webkit-linear-gradient(#925EEB, #EB6AB8);
        background: -o-linear-gradient(#925EEB, #EB6AB8);
        background: linear-gradient(#925EEB, #EB6AB8);
        box-shadow: 0 0 15px rgba(0,0,0,0.5);
        display:flex;
        flex-direction:row;
        justify-content:flex-start;
        align-items:flex-center;
        }
        .header-logo {
          font-family:Helvetica;
          font-weight:bold;
          color:#DC143C;
          text-shadow: 1px 1px 1px #000;
          width:8%;
          font-size:2em;
          margin-left:20%;
          margin-top:12px;
          margin-right:10%;
        }
        .header-content {
          margin-top:40px;
        }
        .header-content-text-1 {
          font-family:Helvetica;
          color:#9925BB;
          font-weight:bold;
          font-size:1.2em;
          text-shadow: 0.5px 0.5px 1px #000;
        }
        .header-content-text-2 {
          font-family:Helvetica;
          color:PowderBlue;
          font-weight:bold;
          font-size:1.2em;
          text-shadow: 0.5px 0.5px 1px #000;
        }

        .header-number {
          align-self:center;
          text-shadow: 0.2px 0.2px 1px #000;
        }
        .content {
          display:flex;
          flex-direction:column;
          justify-content:flex-start;
          align-items:center;
        }
        .content img {
          margin-top:180px;
          margin-bottom:120px;
        }
        .content-header {
          font-family:Arial;
          color:white;
          font-weight:bold;
          font-size:3.2em;
          text-shadow: 1px 1px 2px #000;
          margin-bottom:20px;
        }
        .content-text-1 {
          font-family:Arial;
          color:white;
          font-weight:bold;
          font-size:1.4em;
          text-shadow: 1px 1px 2px #000;
        }
        .content-button {
          margin-top:40px;
          width:18%;
          height:40px;
          background: #925EEB;
        background: -webkit-linear-gradient(#925EEB, #EB6AB8);
        background: -o-linear-gradient(#925EEB, #EB6AB8);
        background: linear-gradient(#925EEB, #EB6AB8);
        box-shadow: 0 0 15px rgba(0,0,0,0.5);
          display:flex;
          align-items:center;
          justify-content: center;
          transition:0.5s;
          text-decoration:none;
          font-size:1.1em;
        }
        .content-button:hover {
          border-radius:10px;
        }

}

/* Portrait tablets and small desktops */
@media (min-width: 768px) and (max-width: 991px) {
html, body {
            background-color: #001659;
            color: #636b6f;
            height: 100vh;
            margin: 0;
            background-size:cover;
            position:relative;
        }
        .header {
          width:100%;
          height:100px;
          background: #925EEB;
        background: -webkit-linear-gradient(#925EEB, #EB6AB8);
        background: -o-linear-gradient(#925EEB, #EB6AB8);
        background: linear-gradient(#925EEB, #EB6AB8);
        box-shadow: 0 0 15px rgba(0,0,0,0.5);
        display:flex;
        flex-direction:row;
        justify-content:flex-start;
        align-items:flex-center;
        }
        .header-logo {
          font-family:Helvetica;
          font-weight:bold;
          color:#DC143C;
          text-shadow: 1px 1px 1px #000;
          width:8%;
          font-size:2em;
          margin-left:20%;
          margin-top:12px;
          margin-right:14%;
        }
        .header-content {
          margin-top:40px;
        }
        .header-content-text-1 {
          font-family:Helvetica;
          color:#9925BB;
          font-weight:bold;
          font-size:1.2em;
          text-shadow: 0.5px 0.5px 1px #000;
        }
        .header-content-text-2 {
          font-family:Helvetica;
          color:PowderBlue;
          font-weight:bold;
          font-size:1.2em;
          text-shadow: 0.5px 0.5px 1px #000;
        }

        .header-number {
          align-self:center;
          text-shadow: 0.2px 0.2px 1px #000;
        }
        .content {
          display:flex;
          flex-direction:column;
          justify-content:flex-start;
          align-items:center;
        }

        .content-header {
          font-family:Arial;
          color:white;
          font-weight:bold;
          font-size:2.5em;
          text-shadow: 1px 1px 2px #000;
          margin-bottom:20px;
        }
        .content-text-1 {
          font-family:Arial;
          color:white;
          font-weight:bold;
          font-size:1.4em;
          text-shadow: 1px 1px 2px #000;
        }
        .content-button {
          margin-top:40px;
          width:30%;
          height:40px;
          background: #925EEB;
        background: -webkit-linear-gradient(#925EEB, #EB6AB8);
        background: -o-linear-gradient(#925EEB, #EB6AB8);
        background: linear-gradient(#925EEB, #EB6AB8);
        box-shadow: 0 0 15px rgba(0,0,0,0.5);
          display:flex;
          align-items:center;
          justify-content: center;
          transition:0.5s;
          text-decoration:none;
          font-size:1.1em;
        }
        .content-button:hover {
          border-radius:10px;
        }

}














/* Landscape phones and portrait tablets */
@media (max-width: 767px) {
html, body {
            background-color: #001659;
            color: #636b6f;
            height: 100vh;
            margin: 0;
            background-size:cover;
            position:relative;
        }
        .header {
          width:100%;
          height:100px;
          background: #925EEB;
        background: -webkit-linear-gradient(#925EEB, #EB6AB8);
        background: -o-linear-gradient(#925EEB, #EB6AB8);
        background: linear-gradient(#925EEB, #EB6AB8);
        box-shadow: 0 0 15px rgba(0,0,0,0.5);
        display:flex;
        flex-direction:row;
        justify-content:flex-start;
        align-items:flex-center;
        }
        .header-logo {
          font-family:Helvetica;
          font-weight:bold;
          color:#DC143C;
          text-shadow: 1px 1px 1px #000;
          width:8%;
          font-size:1.5em;
          margin-left:10%;
          margin-top:20px;
          margin-right:19%;
        }
        .header-content {
          display:none;
          margin-top:36px;
        }
        .header-content-text-1 {
          font-family:Helvetica;
          color:#9925BB;
          font-weight:bold;
          font-size:1em;
          text-shadow: 0.5px 0.5px 1px #000;
        }
        .header-content-text-2 {
          font-family:Helvetica;
          color:PowderBlue;
          font-weight:bold;
          font-size:1em;
          text-shadow: 0.5px 0.5px 1px #000;
        }

        .header-number {
          margin-right:30%;
          align-self:center;
          text-shadow: 0.2px 0.2px 1px #000;
        }
        .content {
          display:flex;
          flex-direction:column;
          justify-content:flex-start;
          align-items:center;
        }
        .content img {
          margin-top:180px;
          margin-bottom:120px;
        }
        .content-header {
          font-family:Arial;
          color:white;
          font-weight:bold;
          font-size:1.6em;
          text-shadow: 1px 1px 2px #000;
          margin-bottom:20px;
          text-align:center;
        }
        .content-text-1 {
          font-family:Arial;
          color:white;
          font-weight:bold;
          font-size:1em;
          text-shadow: 1px 1px 2px #000;
          text-align:center;
        }
        .content-button {
          margin-top:40px;
          width:25%;
          height:40px;
          background: #925EEB;
        background: -webkit-linear-gradient(#925EEB, #EB6AB8);
        background: -o-linear-gradient(#925EEB, #EB6AB8);
        background: linear-gradient(#925EEB, #EB6AB8);
        box-shadow: 0 0 15px rgba(0,0,0,0.5);
          display:flex;
          align-items:center;
          justify-content: center;
          transition:0.5s;
          text-decoration:none;
          font-size:1.1em;
          text-align:center;
          font-weight:bold;
        }
        .content-button:hover {
          border-radius:10px;
        }

}














/* Portrait phones and smaller */
@media (max-width: 480px) {
html, body {
            background-color: #001659;
            color: #636b6f;
            height: 100vh;
            margin: 0;
            background-size:cover;
            position:relative;
        }
        .header {
          width:100%;
          height:100px;
          background: #925EEB;
        background: -webkit-linear-gradient(#925EEB, #EB6AB8);
        background: -o-linear-gradient(#925EEB, #EB6AB8);
        background: linear-gradient(#925EEB, #EB6AB8);
        box-shadow: 0 0 15px rgba(0,0,0,0.5);
        display:flex;
        flex-direction:row;
        justify-content:flex-start;
        align-items:flex-center;
        }
        .header-logo {
          font-family:Helvetica;
          font-weight:bold;
          color:#DC143C;
          text-shadow: 1px 1px 1px #000;
          width:8%;
          font-size:1.2em;
          margin-left:10%;
          margin-top:26px;
          margin-right:1%;
        }
        .header-content {
          display:none;
          margin-top:40px;
        }
        .header-content-text-1 {
          font-family:Helvetica;
          color:#9925BB;
          font-weight:bold;
          font-size:1.2em;
          text-shadow: 0.5px 0.5px 1px #000;
        }
        .header-content-text-2 {
          font-family:Helvetica;
          color:PowderBlue;
          font-weight:bold;
          font-size:1.2em;
          text-shadow: 0.5px 0.5px 1px #000;
        }

        .header-number {
          align-self:center;
          text-shadow: 0.2px 0.2px 1px #000;
        }
        .content {
          display:flex;
          flex-direction:column;
          justify-content:flex-start;
          align-items:center;
        }
        .content img {
          margin-top:180px;
          margin-bottom:60px;
        }
        .content-header {
          font-family:Arial;
          color:white;
          font-weight:bold;
          font-size:1.6em;
          text-shadow: 1px 1px 2px #000;
          margin-bottom:20px;
          text-align:center;
        }
        .content-text-1 {
          font-family:Arial;
          color:white;
          font-weight:bold;
          font-size:1em;
          text-shadow: 1px 1px 2px #000;
          text-align:center;
        }
        .content-button {
          margin-top:40px;
          width:50%;
          height:40px;
          background: #925EEB;
        background: -webkit-linear-gradient(#925EEB, #EB6AB8);
        background: -o-linear-gradient(#925EEB, #EB6AB8);
        background: linear-gradient(#925EEB, #EB6AB8);
        box-shadow: 0 0 15px rgba(0,0,0,0.5);
          display:flex;
          align-items:center;
          justify-content: center;
          transition:0.5s;
          text-decoration:none;
          font-size:1.1em;
        }
        .content-button:hover {
          border-radius:10px;
        }








/* Iphone 5 */
@media (max-width: 420px) {
html, body {
            background-color: #001659;
            color: #636b6f;
            height: 100vh;
            margin: 0;
            background-size:cover;
            position:relative;
        }
        .header {
          width:100%;
          height:100px;
          background: #925EEB;
        background: -webkit-linear-gradient(#925EEB, #EB6AB8);
        background: -o-linear-gradient(#925EEB, #EB6AB8);
        background: linear-gradient(#925EEB, #EB6AB8);
        box-shadow: 0 0 15px rgba(0,0,0,0.5);
        display:flex;
        flex-direction:row;
        justify-content:flex-start;
        align-items:flex-center;
        }
        .header-logo {
          font-family:Helvetica;
          font-weight:bold;
          color:#DC143C;
          text-shadow: 1px 1px 1px #000;
          width:8%;
          font-size:1em;
          margin-left:10%;
          margin-top:32px;
          margin-right:1%;
        }
        .header-content {
          margin-top:40px;
        }
        .header-content-text-1 {
          font-family:Helvetica;
          color:#9925BB;
          font-weight:bold;
          font-size:1.2em;
          text-shadow: 0.5px 0.5px 1px #000;
        }
        .header-content-text-2 {
          font-family:Helvetica;
          color:PowderBlue;
          font-weight:bold;
          font-size:1.2em;
          text-shadow: 0.5px 0.5px 1px #000;
        }

        .header-number {
          align-self:center;
          text-shadow: 0.2px 0.2px 1px #000;
        }
        .content {
          display:flex;
          flex-direction:column;
          justify-content:flex-start;
          align-items:center;
        }
        .content img {
          margin-top:180px;
          margin-bottom:60px;
        }
        .content-header {
          font-family:Arial;
          color:white;
          font-weight:bold;
          font-size:1.2em;
          text-shadow: 1px 1px 2px #000;
          margin-bottom:20px;
          text-align:center;
        }
        .content-text-1 {
          font-family:Arial;
          color:white;
          font-weight:bold;
          font-size:1em;
          text-shadow: 1px 1px 2px #000;
          text-align:center;
        }
        .content-button {
          margin-top:40px;
          width:80%;
          height:40px;
          background: #925EEB;
        background: -webkit-linear-gradient(#925EEB, #EB6AB8);
        background: -o-linear-gradient(#925EEB, #EB6AB8);
        background: linear-gradient(#925EEB, #EB6AB8);
        box-shadow: 0 0 15px rgba(0,0,0,0.5);
          display:flex;
          align-items:center;
          justify-content: center;
          transition:0.5s;
          text-decoration:none;
          font-size:1.1em;
        }
        .content-button:hover {
          border-radius:10px;
        }
    }
}
    </style>
</head>
<body>

    <div class="content">
      <img src="img/main.png" alt="">
      <div class="content-header">Спасибо!</div>
      <div class="content-text-1">Ваша заявка успешно отправлена и принята к обработке.</div>
      <div class="content-text-1">Мы свяжемся с вами в ближайшее время.</div>
    </div>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YJ9ENRKYYH"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YJ9ENRKYYH');
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(70628767, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/70628767" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>