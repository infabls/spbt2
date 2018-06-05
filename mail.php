<?php 
if (!empty($_POST['phone'])) {
	$email = 'не указана.';
	$name = clean_data($_POST['name']);
	$phone = clean_data($_POST['phone']);
	$email = clean_data($_POST['email']);
	$from = "mail@vostokspbt.kz";
	$message = "Посетитель " . $name . " заказал обратный звонок на номер " . $phone . " .Почта " . $email;
	$to = 'bragin_german@mail.ru'; // Задаем получателя письма
	$subject = "Заявка на ГБО с сайта vostokspbt.kz"; // Задаем тему письма
	$headers = 'From: mail@vostokspbt.kz' . "\r\n";
	$headers .= "Content-type: text/html; charset=\"utf-8\"";
	mail($to, $subject, $message, "From: mail@vostokspbt.kz \r\n");
	mail("vostok.spbt@mail.ru", $subject, $message, $headers);
	mail("anuarmanabaev@mail.ru", $subject, $message, $headers);
	mail("imashev.rinat@mail.ru", $subject, $message, $headers);
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
