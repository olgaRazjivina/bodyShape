<?php
// Получаем значения переменных из пришедших данных
$name = $_POST['user-name'];
$email = $_POST['user-email'];
$message = $_POST['user-message'];

// Формируем сообщение для отправки, в нём мы соберём всё, что ввели в форме
$mes = "<strong>Имя:</strong> $name \n<strong>Email:</strong> $email \n<strong>Сообщение:</strong> $message";

// Пытаемся отправить письмо по заданному адресу
$send = mail("infoBodyShape@gmail.com", "Сообщение с сайта", $mes);

// Если отправка прошла успешно — так и пишем
if ($send == 'true') {echo "Сообщение отправлено";}
// Если письмо не ушло — выводим сообщение об ошибке
else {echo "Ой, что-то пошло не так";}


?>

            