<div id="popup">
	<center>
	<div id="myModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header"><button class="close" type="button" data-dismiss="modal">×</button>
					<h3 class="modal-title">Оставьте заявку</h3>
				</div>
				<form class="formx" action="javascript:void(null);" onsubmit="call()">
					<div class="modal-body">
						<div class="modal-inp"><input name="name" placeholder="Ваше имя" class=" form-control" type="text"></div>
						<div class="modal-tel"><input name="phone" required placeholder="Ваш телефон" class=" form-control" type="tel"></div>
						<div class="modal-tel"><input name="email" placeholder="Ваш e-mail" class=" form-control" type="email"></div>
						
						<div class="modal-name"><input id="modal-btn" type="submit" name="submit" value="ОТПРАВИТЬ" class="btn btn-primary" type="submit"></div>
						<div class="modal-txt"><p style="color:#fff;">Мы свяжемся с вами в ближайшее время!</p></div>
					</div>
				</form>
			</div>
		</div>
	</div>
</center>
</div>

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