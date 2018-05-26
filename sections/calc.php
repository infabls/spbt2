
<script>
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

</script>
<section id="calculator" class="calculator">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12 heading">
                    <span class="title-icon classic pull-left"><i class="fa fa-cogs"></i></span>
                    <h2 class="title classic">Калькулятор</h2>
                    <span class="title-desc">Оцените экономию после установки ГБО</span>
                </div>
            </div> <!-- Title row end -->
            <div class="row">
                <div class="col-md-6">
                    <form class="form-horizontal calculator_form text-center" onsubmit="calc(this)" method="post"">
                        <div class="input-group">
                            <span class="input-group-addon" style="width: 50% !important">1 л бензина</span>
                            <input class="form-control" type="number" name="BENZIN" placeholder="тенге" inputmode="numeric" pattern="\d*" tabindex="1">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" style="width: 50% !important">1 л газа</span>
                            <input class="form-control" type="number" name="GAZ" placeholder="тенге" inputmode="numeric" pattern="\d*" tabindex="2">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" style="width: 50% !important">Расход на 100 км</span>
                            <input class="form-control" type="number" name="ROZHOD" placeholder="литров" inputmode="numeric" pattern="\d*" tabindex="3">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" style="width: 50% !important">Пробег в месяц</span>
                            <input class="form-control" type="number" name="PROBEG" placeholder="километров" inputmode="numeric" pattern="\d*" tabindex="4">
                        </div>
                        <br>
                       <input onclick="calc(this)" type="button" class="btn" value="Подсчитать">
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="profit plan text-center featured" id="calc_result" style="display: none;">
                            <span class="plan-name">Экономия после установки ГБО</span>
                            <p class="plan-price">
                                <strong>500 000</strong>                    
                                <sup class="currency">тг</sup>
                                <span>в год</span>
                            </p>
                            <h5>Оставьте заявку и мы перезвоним вам</h5>
                            <form class="form-horizontal order-form">
                                    <div class="form-group">
                                        <h4 class="success-order black" style="display: none">Спасибо за заявку</h4>
                                        <input class="form-control phone-number text-center" type="text" name="msisdn" placeholder="Ваш телефон" inputmode="numeric">
                                    </div>
                                    <button class="btn btn-primary solid cd-btn" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Ожидайте">Оформить заявку</button>
                            </form>
                        </div>
                </div>
            </div>
          <!--  <div class="row hidden">
                <div class="col-md-6">
                    <br/>
                    <table class="table table-bordered table-condensed">
                        <caption>Цены на топливо (12.06.2017, Helios)</caption>
                        <thead>
                            <tr>
                                <th>ГАЗ</th>
                                <th>Дт</th>
                                <th>АИ-80</th>
                                <th>АИ-92</th>
                                <th>АИ-95</th>
                                <th>АИ-98</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>71</td>
                                <td>138</td>
                                <td>89</td>
                                <td>144</td>
                                <td>156</td>
                                <td>164</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>-->
        </div>
    </section>


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