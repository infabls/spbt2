<footer id="contacts">
	<div class="container">
		<div class="row over2">
			<div class="col-md-6 col-sm-12 text-center" id="order-now">
				<h4 class="text-default">Оставить заявку</h4>
				<h5>Мы обязательно Вам перезвоним</h5>
				<form class="form-horizontal order-form formx" action="javascript:void(null);" onsubmit="call(this)">
					<div class="form-group">
						<h4 class="success-order white" style="display: none">Спасибо за заявку</h4>
						<input class="form-control phone-number text-center" type="text" name="phone" placeholder="Ваш телефон" inputmode="numeric">
					</div>
					<button class="btn btn-primary solid cd-btn" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Ожидайте">Отправить</button>
					<a href="tel:+77012129393" class="btn btn-primary white cd-btn"><i class="fa fa-phone"></i> +77012129393</a>
				</form>	
				<div class="gap-20"></div>
			</div>
			<div class="col-md-6 col-sm-12 footer-about-us">
				<h3 class="widget-title">Восток СПБТ</h3>
				<p>
					Компания Восток СПБТ – профессиональная установка ГБО и газобалонного оборудования!
				</p>
				<h4>Адрес</h4>
				<p>г. Усть-Каменогорск, ул. Машиностроителей 11/13</p>
				<p>ПН-ПТ: 09:00-18:00</p>
				<p>СБ: 09:00-16:00</p>
				<p>ВС-ВЫХОДНОЙ</p>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h4>Email:</h4>
						<p><a href="mailto:Vostok.spbt@mail.ru" class="white">Vostok.spbt@mail.ru</a></p>
					<p><a href="mailto:Anuarmanabaev@mail.ru" class="white">Anuarmanabaev@mail.ru</a></p>
					<p><a href="mailto:Imashev.rinat@mail.ru" class="white">Imashev.rinat@mail.ru</a></p>
					</div>
					<div class="col-md-6 col-sm-6">
						<h4>Телефоны:</h4>
						<p><a href="tel:+77077777988" class="white">+77077777988</a></p>
						<p><a href="tel:+77077777988" class="white">+77012129393</a></p>
					</div>
				</div>
			</div><!--/ end about us -->

		</div>
	</div>
</footer>
</div>
<link rel="stylesheet" href="/assets/css/animate.css">
<script src="/assets/js/wow.js"></script>
<link rel="manifest" href="/manifest.json">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script>


var widthscr = document.documentElement.clientWidth;
$(".btn-primary").addClass("animated pulse");
if (widthscr<600) {
$(".card-w:even").addClass("wow fadeInLeft");
$(".card-w:odd").addClass("wow fadeInRight");}
if (widthscr>600) {
$(".card-w:even").addClass("wow fadeIn");
$(".card-w:odd").addClass("wow fadeIn");}
new WOW().init();
	$(document).ready(function() {   
		var sideslider = $('[data-toggle=collapse-side]');
		var sel = sideslider.attr('data-target');
		var sel2 = sideslider.attr('data-target-2');
		var link = $('.navbar-nav li a').click(function(){
			$('.side-collapse').toggleClass('in');
			$('.side-collapse-container').toggleClass('out');
		})
		sideslider.click(function(event){
			$(sel).toggleClass('in');
			$(sel2).toggleClass('out');

		});
	});


	function calc(form) {
		var GDO = document.form.GDO.value.replace(',', '.');
		var GAZ = document.form.GAZ.value.replace(',', '.');
		var BENZIN = document.form.BENZIN.value.replace(',', '.');
		var ROZHOD = document.form.ROZHOD.value.replace(',', '.');
		var PROBEG = document.form.PROBEG.value.replace(',', '.');
		var RESULT = ((GDO * 100)/((BENZIN-GAZ*1.15)*ROZHOD*PROBEG));

		document.form.RESULT.value = Math.round(RESULT);
		document.form.PRICEG.value = Math.round((PROBEG*ROZHOD*GAZ)/100);
		document.form.PRICEB.value = Math.round((PROBEG*ROZHOD*BENZIN)/100);
		document.form.EKONOM.value = Math.round(((BENZIN-GAZ*1.15)*ROZHOD*PROBEG)/100)*365;
		document.form.EKONOMD.value = Math.round(((BENZIN-GAZ*1.15)*ROZHOD*PROBEG)/100);
		document.form.EKONOMM.value = Math.round(((BENZIN-GAZ*1.15)*ROZHOD*PROBEG)/100)*30;
	}

	$(document).ready(function(){
		$('.gallery').slick({
			infinite: true,
			slidesToShow: 3,
			slidesToScroll: 3,
			autoplay: true,
			autoplaySpeed: 2000,
			responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]
  });
	});
</script>
</body>
</html>