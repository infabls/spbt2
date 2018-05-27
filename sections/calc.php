
<script>
    function calcc(form) {
        var GAZ = document.getElementById("GAZ").value;
        var BENZIN = document.getElementById("BENZIN").value;
        var ROZHOD = document.getElementById("ROZHOD").value;
        var PROBEG = document.getElementById("PROBEG").value;
        var EKONOM = Math.ceil((((BENZIN-GAZ)*ROZHOD*PROBEG)/100)*12);
        if (EKONOM > 0) {
             document.getElementById("demo").innerHTML = EKONOM;
        document.getElementById("calc_result").removeAttribute("style");
        }
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
                    <form class="form-horizontal calculator_form text-center" onsubmit="calcc(this)" method="post"">
                        <input type="hidden" name="GDO" id="myText" value="120000">
                        <div class="input-group">
                            <span class="input-group-addon" style="width: 50% !important">1 л бензина</span>
                            <input class="form-control" type="number" value="160" id="BENZIN" placeholder="тенге" inputmode="numeric" pattern="\d*" tabindex="1">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" style="width: 50% !important">1 л газа</span>
                            <input class="form-control" type="number" value="110" id="GAZ" placeholder="тенге" inputmode="numeric" pattern="\d*" tabindex="2">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" style="width: 50% !important">Расход на 100 км</span>
                            <input class="form-control" type="number" value="10" id="ROZHOD" placeholder="литров" inputmode="numeric" pattern="\d*" tabindex="3">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" style="width: 50% !important">Пробег в месяц</span>
                            <input class="form-control" type="number" value="500" id="PROBEG" placeholder="километров" inputmode="numeric" pattern="\d*" tabindex="4">
                        </div>
                        <br>
                       <input onclick="calcc(this)" type="button" class="btn btn-primary" value="Подсчитать">
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="profit plan text-center featured" id="calc_result" style="display: none;">
                            <span class="plan-name">Экономия после установки ГБО</span>
                            <p class="plan-price">
                                <strong id="demo">500 000</strong>                    
                                <sup class="currency">тг</sup>
                                <span>в год</span>
                            </p>
                            <h5>Оставьте заявку и мы перезвоним вам</h5>
                            <form class="form-horizontal order-form" action="mail.php" method="POST">
                                    <div class="form-group">
                                        <h4 class="success-order black" style="display: none">Спасибо за заявку</h4>
                                        <input required class="form-control phone-number text-center" type="text" name="phone" placeholder="Ваш телефон" inputmode="numeric">
                                    </div>
                                    <button class="btn btn-primary solid cd-btn">Оформить заявку</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </section>