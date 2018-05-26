<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <meta name="viewport" content="width=device-width, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="theme-color" content="#960605">
  <meta name="robots" content="index, follow">
  <meta property="og:image" content="/img/bg.jpg">
  <meta property="og:type" content="article"> 
 <title></title>
<meta name="description" content="">
<meta name="keywords" content=""> 
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:image" content="/img/bg.jpg">
<meta property="og:type" content="article">
</head>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
<style>
	.navbar-brand img {margin-top: -15px;}
	.bg-grey {    background-color: #000000a3;
    margin-top: 30px;}
	h2 {text-align: center;}
	::placeholder { color: #FFF;}
	#contact {
		background: url(assets/img/bg/contact.jpg) center;
    color: #fff;
    text-align: center;
    height: 320px;
	}

	#contact input {background-color: transparent;
    margin-bottom: 10px;
    border: 1px solid;
    border-radius: 4px;
    text-align: center;	}
	#contact .btn {background-color: #33dc7e;}

	#servise {text-align: center;}
	#servise img {
		width: 250px;	
	}

	#howwork .bg {height: 510px; background: url(assets/img/bg/howwork.jpg) no-repeat center;}

	#whywe {
		text-align: center;
	}
	#whywe h2 {margin-bottom: 40px;} 
	#whywe img {
		border-radius: 8px;
		width: 200px;
		height: 200px;
	}
	#whywe img:hover {
		box-shadow: 0px 0px 6px 3px #0000008f;
		transition: 1s;
		transform: scale(1.2);
	}
	@media only screen and (max-width: 991px) {
		.row .card-w:nth-child(3) {
			clear: both;
		}
	}
	#feature {
		text-align: center;
	}
	#faq {text-align: center;
background-image: url(assets/img/bg/faq.jpg);
color: #fff;
	}
	#gallery {background-image: url(assets/img/bg/gallery.jpg); height: 400px;}
	#gallery {text-align: center; color: #fff} 
	#gallery img {width: 90%;
    display: inline-block;}
	#calc {background-image: url(assets/img/bg/calc.jpg); color: #FFF}
	#calc input {color: #333}
	.card-1 {height: 400px;
    margin: 5px;
    background-color: #00000042; width: calc(50% - 10px);}
	.card-1 h3 {text-align: center;	}
	#price {text-align: center;}
	table {text-align: start;}

	#price img {width: 250px;height: 200px; border-radius: 6px;}
	#price img:hover {
		box-shadow: 0px 0px 6px 3px #0000008f;
		transition: 1s;
		transform: scale(1.1);
	}

	footer {background-image: url(assets/img/bg-f.jpg); color: #fff;}
	footer a {color: #fff; text-decoration: underline; font-size: 20px	}
</style>
<body>
<style>
	body {
          padding-top: 50px;
          position: relative;
      }
      
      pre {
          tab-size: 8;
      }
      
      @media screen and (max-width: 768px) {
          .side-collapse-container{
              width:100%;
              position:relative;
              left:0;
              transition:left .4s;
          }
          .side-collapse-container.out{
              left:200px;
          }
          .side-collapse {
              top:50px;
              bottom:0;
              left:0;
              width:200px;
              position:fixed;
              overflow:hidden;
              transition:width .4s;
          }
          .side-collapse.in {
              width:0;
          }
      }
</style>
<header role="banner" class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button data-toggle="collapse-side" data-target=".side-collapse" data-target-2=".side-collapse-container" type="button" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt=""></a>
        </div>
        <div class="navbar-inverse side-collapse in">
          <nav role="navigation" class="navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="#contacts">Контакты</a></li>
            <li><a href="#servise">Услуги</a></li>
            <li><a href="#feature">Преимущества ГБО</a></li>
            <li><a href="#price">Цены</a></li>
              		<li><a href="">г. Усть-Каменогорск ул. Машиностроителей 11/3</a></li>
              		<li><a href="tel:+77012129393">8(701)212-93-93</a></li>
              		<img src="assets/img/icon/instagram-2258221_960_720.png" alt="" width="25px" height="25px">
            </ul>
          </nav>
        </div>
      </div>
    </header>

<div id="wrapper" class=" side-collapse-container">
	<div id="contact">
		<div class="container">
			<div class="bg-grey">
						<div class="row">
				<div class="col-md-7 col-sm-12">
					<h3>Сделайте первый шаг на пути развития!</h3>
				</div>
				<div class="col-md-5 col-sm-12">
					<h3>Закажите установку ГБО</h3>
					<form action="mail.php" method="POST">
						<input type="text" required placeholder="Ваше имя"> <br>
						<input type="tel" required placeholder="Ваш телефон"><br>
						<input type="email" required placeholder="Ваш E-mail"><br>
						<input type="submit" class="btn" placeholder="Заказать"><br>
					</form>
				</div>
			</div>
			</div>
		</div>
	</div>
	
	<div id="servise" class="container">
		<h2>Мы предоставляем услуги</h2>
		<div class="row">
			<div class="col-md-6">
				<img src="assets/img/servise/gbo.jpg" alt="Установка газобалонного оборудования">
				<h3>Установка газобалонного оборудования</h3>
				<div class="s-t">Качественная и профессиональная установка польского и итальянского оборудования фирмы STAG и DIGITRONIC </div>
				Диагностика ГБО
				Замена отдельного участка трубопровода ГБО
				Демонтаж ГБО
				Переустановка газового оборудования
			</div>
			<div class="col-md-6">
				<img src="assets/img/servise/ballon.jpg" alt="Установка газового баллона">
				<h3>Установка газового баллона</h3>
				<div class="s-t">Газобалонное оборудование четвертого и пятого поколения - надёжное и простое smart-решение для вашего автомобиля</div>
				Замена газового /бензинового электроклапана
				Настройка, корректировка форсунок
				Настройка ГБО
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<img src="assets/img/servise/klapan.jpg" alt="Замена мультиклапана">
				<h3>Замена мультиклапана</h3>
			</div>
			<div class="col-md-6">
				<img src="assets/img/servise/gaz.jpg" alt="Реализация газа в баллонах, оптом">
				<h3>Реализация газа в баллонах, оптом</h3>
			</div>
		</div>
	</div>
	<div id="howwork">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<p><strong>1. Заправочное устройство:</strong> устройство, через которое заправляется баллон</p>
					<p><strong>2. Пропановый баллон:</strong> предназначен для хранения газа</p>
					<p><strong>3. Мультиклапан:</strong>  служит для заправки топлива и предотвращает его обратный выход</p>
					<p><strong>4. Редуктор-испаритель:</strong> преобразует газ из жидкого состояния в газообразное, снижает давление</p>
				</div>
				<div class="col-md-6">
					<p><strong>5. Фильтр:</strong> очищает газ от примесей, измеряет температуру и давление газа, а также давление в коллекторе</p>
					<p><strong>6. Рампа:</strong> предназначена для впрыска газа в каждый цилиндр</p>
					<p><strong>7. Переключатель видов топлива:</strong>	 позволяет переключаться с газа на бензин и обратно, показывает уровень газа в баллоне</p>
					<p><strong>8. Газовый блок управления (компьютер):</strong> получает сигналы от разных датчиков, определяет нужное количество газа для впрыска</p>
				</div>
			</div>
			<div class="bg">
			</div>
		</div>
	</div>
	<div id="whywe" class="container">
		<h2>ПОЧЕМУ МЫ?</h2>
		<div class="row ">
			<div class="col-md-3 col-sm-6 col-xs-12 card-w">
				<img src="assets/img/why/rab.jpg" alt="">
				<h3>Профессионализм</h3>
				<p>Мы постоянно совершенствуем свои профессиональные навыки в поисках новых подходов к работе. Мы предлагаем нашим клиентам услуги, соответствующие самым высоким стандартам качества</p>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 card-w">
				<img src="assets/img/why/man.jpg" alt="">
				<h3>Целостность</h3>
				<p>Руководствуясь общими целями, мы несем единую ответственность за результаты нашего труда и принятые нами решения</p>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 card-w">
				<img src="assets/img/why/hand.jpg" alt="">
				<h3>Индивидуальный подход</h3>
				<p>Мы проявляем свое уважение, заинтересованность при общении с Вами, готовы оказать помощь в любой ситуации</p>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12 card-w">
				<img src="assets/img/why/pers.jpg" alt="">
				<h3>Вовлеченность персонала</h3>
				<p>Мы создаем такие условия и атмосферу, что наши сотрудники реализуют свой потенциал в полном объеме. Наши сотрудники заинтересованы в успехе и работают с максимальной производительностью.</p>
			</div>
		</div>
	</div>
	<div id="faq">
		<div class="container">
			<h2>ЧАСТО ЗАДАВАЕМЫЕ ВОПРОСЫ</h2>
		<div class="row ">
			<div class="col-md-12 card-f">
				<div class="f">
					<div class="i-f1"></div>
					<h3>ГБО НЕБЕЗОПАСНО</h3>
				</div>
				<div class="q">
					<p>НЕПРАВДА. С 2001 года существуют строгие нормы безопасности для ГБО. Оборудование тестируется в разных ситуациях: при авариях, возгорании автомобиля, транспортировке автовозом, сложных условиях эксплуатации. ГБО, установленное на наших СТО соответствует всем нормам безопасности.</p>
				</div>
			</div>
			<div class="col-md-12 card-f">
				<div class="f">
					<div class="i-f2"></div>
					<h3>МАШИНА БУДЕТ ХУЖЕ ЕХАТЬ</h3>
				</div>
				<div class="q">
					<p>НЕПРАВДА. Потери мощности сравнимы с потерями при включенном кондиционере (2-5%). Если не планируете участвовать в гонках, разницы не почувствуете.</p>
				</div>
			</div>
			<div class="col-md-12 card-f">
				<div class="f">
					<div class="i-f3"></div>
					<h3>Я НЕ ЗАВЕДУСЬ В МОРОЗ</h3>
				</div>
				<div class="q">
					<p>ЗАВЕДЕТЕСЬ. ГБО 2-го поколения нужно заводить на бензине. Мы не рекомендуем заводиться сразу на газу, потому что это сокращает срок службы оборудования. ГБО 4-го поколения заводится на бензине автоматически.</p>
				</div>
			</div>
			<div class="col-md-12 card-f">
				<div class="f">
					<div class="i-f4"></div>
					<h3>ГБО ДОЛГО ОКУПАЕТСЯ</h3>
				</div>
				<div class="q">
					<p>Чем дольше Вы ездите-тем быстрее окупится установка ГБО. Посчитайте на нашем калькуляторе или позвоните нам, мы все расскажем.</p>
				</div>
			</div>
			<div class="col-md-12 card-f">
				<div class="f">
					<div class="i-f5"></div>
					<h3>ГБО СЛОЖНО ОБСЛУЖИВАТЬ</h3>
				</div>
				<div class="q">
					<p>НЕ СЛОЖНЕЕ ЧЕМ АВТОМОБИЛЬ В ЦЕЛОМ. Каждые 10.000 км нужно менять фильтра грубой и тонкой очистки, проходить плановое обслуживание ГБО.</p>
				</div>
			</div>
		</div>
		</div>
	</div>
	<div id="feature" class="container">
		<h2>Преимущества ГБО</h2>
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="i-1"></div>
				<h3>Снижение затрат на топливо</h3>
				<p>Экономия на стоимости топлива достигает уровня даже 40%. Происходит она из разницы стоимости топлива (газ-бензин, газ-дизель) и постоянного увеличения эффективности элементов установки.</p>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="i-4"></div>
				<h3>Экологичность</h3>
				<p>Благодаря использованию газового топлива существенно снижается уровень токсичности выхлопных газов. Автомобили с питанием на LPG уменьшают вредные выбросы СО2 более, чем на 30%.</p>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="i-3"></div>
				<h3>Забота о двигателе</h3>
				<p>Пропан – высококачественное автомобильное топливо с высоким октановым числом (100-105) и минимальным количеством вредных примесей. Использование газового топлива позволяет увеличить ресурс двигателя и всей топливной системы. Кроме того, двигатели с установкой газобаллонного оборудования работают тише и более плавно.</p>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="i-2"></div>
				<h3>Работа двух независимых систем</h3>
				<p>Газовое оборудование никак не сказывается на работе бензинового. Обе системы существуют параллельно и могут быть взаимозаменяемы. Это очень удобно, так как водитель в любой момент может поменять тип используемого топлива, тем самым увеличив пробег автомобиля.</p>
			</div>
			
		</div>
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="i-5"></div>
				<h3>Безопасность</h3>
				<p>Сертифицированное оборудование, соответствующее всем правилам безопасности.</p>
			</div>
		</div>
	</div>
	<div id="gallery">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css">
		<div class="container">
			<h2>Фотогаллерея</h2>
			<div class="row gallery">
				<a href="assets/img/Clarkb06GB037.jpg" data-fancybox="gallery" data-caption="Caption #1">
					<img src="assets/img/Clarkb06GB037.jpg" alt="" />
				</a>
				<a href="assets/img/Clarkb06GB037.jpg" data-fancybox="gallery" data-caption="Caption #1">
					<img src="assets/img/Clarkb06GB037.jpg" alt="" />
				</a>
				<a href="assets/img/Clarkb06GB037.jpg" data-fancybox="gallery" data-caption="Caption #1">
					<img src="assets/img/Clarkb06GB037.jpg" alt="" />
				</a>
				<a href="assets/img/Clarkb06GB037.jpg" data-fancybox="gallery" data-caption="Caption #2">
					<img src="assets/img/Clarkb06GB037.jpg" alt="" />
				</a>
			</div>
		</div>
	</div>
	<div id="calc">
		<div class="container">
			<h2>Рассчитайте стоимость экономии:</h2>
		<div class="row">
			<form name="form" onsubmit="calc(this)" method="post">
				<div class="col-md-6 card-1">
					<label for="GBO">Цена комплекта газового оборудования:</label>
					<input size="7" value="180000" name="GDO"> тг.
					<label for="BENZIN">Цена 1 литра бензина:</label>
					<input size="7" value="165" name="BENZIN"> тг. <br>	
					<label for="GAZ">Цена 1 литра газа:</label>
					<input size="7" value="65" name="GAZ"> тг. <br>	
					<label for="ROZHOD">Средний расход бензина на 100 км пробега:</label>
					<input size="7" value="10" name="ROZHOD"> л. <br>	
					<label for="PROBEG">Средний суточный пробег Вашего автомобиля:</label>
					<input size="7" value="100" name="PROBEG"> км. <br>	
					<input onclick="calc(this)" type="button" class="btn" value="Подсчитать">
				</div>
				<div class="col-md-6 card-1">
					<h3>Cтоимость пробега в день</h3>
					<label for="EKONOM">На газу:</label>
					<input size="7" value="0" name="PRICEG" readonly=""> тг. <br>	
					<label for="EKONOM">На бензине:</label>
					<input size="7" value="0" name="PRICEB" readonly=""> тг. <br>	
					<label for="EKONOM">Экономия в день:</label>
					<input size="7" value="0" name="EKONOMD" readonly=""> тг. <br>	
					<label for="EKONOM">Экономия в месяц:</label>
					<input size="7" value="0" name="EKONOMM" readonly=""> тг. <br>	
					<label for="EKONOM">Экономия за Год:</label>
					<input size="7" value="0" name="EKONOM" readonly=""> тг. <br>	
					<label for="RESULT">Окупаемость в днях:</label>
					<input size="7" value="0" name="RESULT" readonly=""> <br>	
					<input type="reset" value="Отменить" class="btn" name="reset">
				</div>
				


		</form>
	</div>
		</div>
	</div>
	<div id="price">
		<div class="container"><h2>Стоимость Установки</h2>
		<div class="row">
			<div class="col-md-4">
				<img src="assets/img/price/kap.jpg" alt="">
				<h4>4-х цилиндровый двигатель</h4>
				<p>От 120000 тенге</p>
			</div>
			<div class="col-md-4">
				<img src="assets/img/price/thumb.jpg" alt="">
				<h4>6-ти цилиндровый двигатель</h4>
				<p>От 180000 тенге</p>
			</div>
			<div class="col-md-4">
				<img src="assets/img/price/bent.jpg" alt="">
				<h4>8-ми цилиндровый двигатель</h4>
				<p>От 230000 тенге</p>
			</div>
		</div>
		<table class="table">
			<thead>
				<tr>
					<th>Услуга</th>
					<th>Стоимость</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Демонтаж газового баллона</td>
					<td>От 1000 тенге</td>
				</tr>
				<tr>
					<td>Установка баллона</td>
					<td>От 1000 тенге</td>
				</tr>
				<tr>
					<td>Замена редуктора</td>
					<td>От 1000 тенге</td>
				</tr>
				<tr>
					<td>Замена форсунки</td>
					<td>От 1000 тенге</td>
				</tr>
				<tr>
					<td>Демонтаж ГБО (карбюратор)</td>
					<td>От 1000 тенге</td>
				</tr>
				<tr>
					<td>Смена ГБО (инжектор)</td>
					<td>От 1000 тенге</td>
				</tr>
				<tr>
					<td>Замена газового клапана</td>
					<td>От 1000 тенге</td>
				</tr>
				<tr>
					<td>Настройка форсунок</td>
					<td>От 1000 тенге</td>
				</tr>
				<tr>
					<td>Настройка системы впрыска</td>
					<td>От 1000 тенге</td>
				</tr>
				<tr>
					<td>Снятие и установка мультиклапана</td>
					<td>От 1000 тенге</td>
				</tr>
				<tr>
					<td>Чистка газовых форсунок</td>
					<td>От 1000 тенге</td>
				</tr>
				<tr>
					<td>Выявление причины утечки газа</td>
					<td>От 1000 тенге</td>
				</tr>
			</tbody>
		</table></div>
	</div>
	<footer id="contacts">
		<div class="container">
				<div class="row">
			<div class="col-md-7">
				<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7c35e553570538c221695267fb15d6a8b72d07d0fb43ee30cdad06f20f60667a&amp;width=100%&amp;height=483&amp;lang=ru_RU&amp;scroll=true"></script>
			</div>
			<div class="col-md-5">
				<h4>АДРЕС</h4>
				<p>070000, Казахстан</p>
				<p>г. Усть-Каменогорск, ул. Машиностроителей 11/3</p><br>
				<h4>ТЕЛЕФОН</h4>
				<a href="tel:+77077777988">+77077777988</a>
				<a href="tel:+77077777988">8(707)777-79-88</a>
				<h4>E-mail</h4>
				<a href="mailto:spbt@mail.ru">spbt@mail.ru</a>
				<a href="mailto:spbt@mail.ru">spbt@mail.ru</a>
				<a href="mailto:spbt@mail.ru">spbt@mail.ru</a>
				<h4>ГРАФИК РАБОТЫ</h4>
				<p>ПН-ПТ: 09:00-18:00</p>
				<p>СБ: 09:00-16:00</p>
				<p>ВС-ВЫХОДНОЙ</p>
				<h4>ТЕХНИЧЕСКАЯ ПОДДЕРЖКА</h4>
				<a href="tel:+77077777988">+77077777988</a>
				<h4>ОТДЕЛ МАРКЕТИНГА</h4>
				<a href="tel:+77077777988">8(707)228-16-20</a>
			</div>
		</div>
		</div>	
	</footer>
</div>
<link rel="manifest" href="/manifest.json">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script>
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