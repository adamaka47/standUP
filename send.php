<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$to = "lol11211223@yandex.ru";
$subject = "Заявка от стендапа";
// Сообщение письма
$message = "
Имя пользователя: ".htmlspecialchars($name)."<br />
Телефон: <a href='tel:$phone'>".htmlspecialchars($phone)."</a>";
// Отправляем письмо при помощи функции mail();
$headers = "From: unknown.ru <unknown@hz.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: thanks.html');
exit();
?>