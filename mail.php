<meta charset="UTF-8" />

<?php
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['email'])) {$email = $_POST['email']; if ($email == '') {unset($email);}}
if (isset($_POST['email'])) {$email = $_POST['email']; if ($email == '') {unset($email);}}
if (isset($_POST['sub'])) {$sub = $_POST['sub']; if ($sub == '') {unset($sub);}}
if (isset($_POST['phone'])) {$phone = $_POST['phone']; if ($phone == '') {unset($phone);}}
if (isset($_POST['body'])) {$body = $_POST['body']; if ($body == '') {unset($body);}}


if (isset($name) && isset($email) && isset($sub) && isset($body)){

$address = "kds_007@mail.ru"; //Почта куда будет отправлено сообщение
$mes = "Имя: $name \nE-mail: $email \nТема: $sub \nТелефон: $phone \nТекст: $body";
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
if ($send == 'true')
{
echo "\nСообщение отправлено!";}
else
{echo "Ошибка, сообщение не отправлено!";}

}
else
{
echo "Вы заполнили не все поля, необходимо вернуться назад!";
}
?>