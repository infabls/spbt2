<div id="contact">
	<div class="overlay"></div>
		<div class="container">
			<div class="bg-grey">
						<div class="row">
				<div class="col-md-7 col-sm-12">
					<h3 class="call_to_action animated fadeInLeft">Сделайте первый шаг на пути развития!</h3>
				</div>
				<div class="col-md-5 col-sm-12 animated fadeInRight">
					<h3>Закажите установку ГБО</h3>
					<form id="formx" action="mail.php" method="POST">
						<input type="text" name="name" placeholder="Ваше имя"> <br>
						<input type="tel" name="phone" required placeholder="Ваш телефон"><br>
						<input type="email" name="email" placeholder="Ваш E-mail"><br>
						<button type="submit" class="btn btn-primary"> Заказать</button><br>
						<p class="hidden succes">Ваша заявка принята! Благодарим за обращение!</p>
					</form>
				</div>
			</div>
			</div>
		</div>
	</div>
<script>
	function call(form) {
 	  var msg   = $('#formx').serialize();
        $.ajax({
          type: 'POST',
          url: 'mail.php',
          async: true,
          data: msg,
          success: function(data) {
          	$('.succes').removeClass('hidden')
            $('#results').html(data);
          },
          error:  function(xhr, str){
	    alert('Возникла ошибка: ' + xhr.responseCode);
          }
        });
    }
</script>