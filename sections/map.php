<div id="map">
	<div class="col-md-7">	
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7c35e553570538c221695267fb15d6a8b72d07d0fb43ee30cdad06f20f60667a&amp;width=100%&amp;height=483&amp;lang=ru_RU&amp;scroll=true"></script>
	</div>
	<div class="col-md-5">sdfa</div>
	<?php
if(!empty($_POST['phone'])){
	//Получаем данные из глобальной переменной $_GET, так как мы передаем данные методом GET
	$name = $_POST['name']; // Вытаскиваем имя в переменную
	//$email = $_POST['e-mail']; // Вытаскиваем почту в переменную
	$phone= $_POST['phone'];
	$email = $_POST['email'];
	$message = "Поздравляем, $name, отправка сообщений и номера $phone работает"; // Формируем сообщение, отправляемое на почту
	$to = '$vagabuntpro@yandex.ru'; // Задаем получателя письма
	$from = $phone;  // От кого пришло письмо
	$subject = "Письмо с примера простой формы сайта web.cofp.ru"; // Задаем тему письма
	$headers = "From: $from\r\nReply-To: $to\r\nContent-type: text/html; charset=utf-8\r\n"; // Формируем заголовок письма (при неправильном формировании может ломаться кодировка и т.д.)
	mail($to, $subject, $message, $headers);
}
?>
<style>
	#contact {
		text-align: center;
		min-height: 222px;
	}
</style>

</div> 