<style>
  #servise {text-align: center;}   
    #servise img {
    	margin-top: -20px;
      border-radius: 4px;
      transition: 0.3s;    
      width: 250px;    
    }  
    #servise img:hover {
      transform: scale(1.1) rotate(10deg);     
      box-shadow: 0px 0px 6px 3px #0000008f;   
    }
@media screen and (max-width: 768px){
	.s-item {margin: 2%;}
}
@media screen and (min-width: 768px) {
	.s-card{
		border-radius: 4px;
    width: calc(50% - 10px);
	}
}
	 #servise .gear {width: 32px;}
	 .s-item {list-style: none;}
	 .s-item-l .gear {float: left;}
	 .s-item-l .t-p {float: left;}
	 .s-item-r .gear {float: right;}
	 .s-item-r .t-p {float: right;}
	#s_items_wrap {
		padding: 0;
	}
	.s-item {padding: 14px 0;}
	.s-card {
	color: #fff;
	background-color: #2d2d2d;
	margin: 5px;
	margin-bottom: 29px;
}
</style>
<div id="servise" class="container">
		<h2>Мы предоставляем услуги</h2>
		<div class="row">
			<div class="col-md-6 col-sm-6 s-card">
				<img src="assets/img/servise/gbo.jpg" alt="Установка газобалонного оборудования">
				<h3>Установка газобалонного оборудования</h3>
				<div class="s-t">Качественная и профессиональная установка польского и итальянского оборудования фирмы STAG и DIGITRONIC </div>
				<ul id="s_items_wrap">
					<li class="s-item s-item-l">
						<i class="gear fa fa-cogs"></i>
						<span class="t-p"> Диагностика ГБО</span>
						<br>
					</li>
					<li class="s-item s-item-l">
						<i class="gear fa fa-cogs"></i>
						<span class="t-p">Замена участка трубопровода ГБО</span>
						<br>
					</li>
					<li class="s-item s-item-l">
						<i class="gear fa fa-cogs"></i>
						<span class="t-p">Демонтаж ГБО</span>
						<br>
					</li>
				</ul>
			</div>
			<div class="col-md-6 col-sm-6 s-card">
				<img src="assets/img/servise/ballon.jpg" alt="Установка газового баллона">
				<h3>Установка газового баллона</h3>
				<div class="s-t">Газобалонное оборудование четвертого и пятого поколения - надёжное и простое smart-решение для вашего автомобиля</div>
					<ul id="s_items_wrap">
					<li class="s-item s-item-l">
						<i class="gear fa fa-cogs"></i>
						<span class="t-p">Замена электроклапана</span>
						<br>
					</li>
					<li class="s-item s-item-l">
						<i class="gear fa fa-cogs"></i>
						<span class="t-p">Корректировка форсунок</span>
						<br>
					</li>
					<li class="s-item s-item-l">
						<i class="gear fa fa-cogs"></i>
						<span class="t-p">Настройка ГБО</span>
						<br>
					</li>
				</ul>
				
				
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6 s-card">
				<img src="assets/img/servise/klapan.jpg" alt="Замена мультиклапана">
				<h3>Замена мультиклапана</h3>
			</div>
			<div class="col-md-6 col-sm-6 s-card">
				<img src="assets/img/servise/gaz.jpg" alt="Реализация газа в баллонах, оптом">
				<h3>Реализация газа в баллонах, оптом</h3>
			</div>
		</div>
	</div>