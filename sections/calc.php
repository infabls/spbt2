
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
        </div>
    </section>