<?php 
if (!empty($_POST['phone'])) {
	$email = 'не указана.';
	$name = clean_data($_POST['name']);
	$phone = clean_data($_POST['phone']);
	$email = clean_data($_POST['email']);
	$message = "Посетитель " . $name . " заказал обратный звонок на номер " . $phone . " .Почта " . $email; // Формируем сообщение, отправляемое на почту
	$to = 'Vostok.spbt@mail.ru'; // Задаем получателя письма
	$to2 = 'Anuarmanabaev@mail.ru'; // Задаем получателя письма
	$to3 = 'Imashev.rinat@mail.ru'; // Задаем получателя письма
	$from = 'mail@vostokspbt.kz';  // От кого пришло письмо
	$subject = "Заявка на ГБО с сайта vostokspbt.kz"; // Задаем тему письма
	$headers = "From: $from\r\nReply-To: $to\r\nContent-type: text/html; charset=utf-8\r\n"; // Формируем заголовок письма (при неправильном формировании может ломаться кодировка и т.д.)
	mail($to, $subject, $message, $headers);
	mail($to2, $subject, $message, $headers);
	mail($to3, $subject, $message, $headers);
}

function clean_data ($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
header('Location: /');
exit;

 ?>
