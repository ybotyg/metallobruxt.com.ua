<?php


$place = htmlspecialchars($_POST["place"]);
$scrap = htmlspecialchars($_POST["scrap"]);
$weight = htmlspecialchars($_POST["weight"]);
$customer = htmlspecialchars($_POST["customer"]);
$tel = htmlspecialchars($_POST["tel"]);

$address = "alfamet.kh@gmail.com";
$sub = "Сообщение с сайта Metallobruxt.com.ua";
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$mes = "Сообщение с сайта http://www.metallobruxt.com.ua \n
Откуда: $place \n
Тип: $scrap \n
Вес: $weight \n
Контактное лицо: $customer \n
Телефон: $tel \n";

if (empty($bezspama)) /* Оценка поля bezspama - должно быть пустым*/
{
    /* Отправляем сообщение, используя mail() функцию */
    if (mail($address, $sub, $mes)) {
        header('Refresh: 5; URL=http://metallobruxt.com.ua/');
        echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо отправлено, через 5 секунд вы вернетесь на главную страницу</body>';}
    else {
        header('Refresh: 5; URL=http://metallobruxt.com.ua/');
        echo '<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
    <body>Письмо не отправлено, через 5 секунд вы вернетесь на главную страницу</body>';}
}
exit; /* Выход без сообщения, если поле bezspama заполнено спам ботами */