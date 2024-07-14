<div class="ui two column stackable grid">
    <h1 class="column" style="display: flex; align-items: center; font-weight: 400;"><a href="/credits/avtokredit/calculation" style="display: flex; align-items: center; color: #000; margin-right: 4px;"><i class="bx bx-left-arrow-alt"></i> Назад</a></h1>
</div>

<div class="steps">
    <div class="line"></div>
    <div class="step">
    <div class="circle full">1</div>
    <div class="description">Получайте договор для автомобиля через нас</div>
    </div>
    <div class="step">
    <div class="circle full">2</div>
    <div class="description">Узнайте свой лимит и отправьте заявку для получения автокредита</div>
    </div>
    <div class="step">
    <div class="circle full">3</div>
    <div class="description">Рассчитайте свой кредитоспособность и отправьте заявку</div>
    </div>
    <div class="step">
    <div class="circle">4</div>
    <div class="description">Оплатите первоначальный взнос и комиссию для страхование</div>
    </div>
    <div class="step">
    <div class="circle">5</div>
    <div class="description">Подпишите договор и получайте автокредит</div>
    </div>
</div>

<div class="ui very padded segment" style="margin-top: 32px">
    <form class="ui form" action="/credits/avtokredit/prescoring/result">
        <h1 style="font-weight: 400; margin-bottom: 24px; font-size: 20px; text-align: center;">Выберите подходящие условия для оформления автокредита</h1>
        <div class="ui two column stackable internally celled grid">
            <div class="column" style="display: flex; flex-direction: column; gap: 16px;">
                <div class="field">
                    <label>Первоначальный взнос</label>
                    <input type="text" id="first_payment">
                    <div class="ui bottom aligned green slider" id="slider-1"></div>
                </div>
                <div class="field">
                    <label>Срок кредита (месяцев)</label>
                    <input type="number" readonly id="credit_month" value="12">
                    <div class="ui bottom aligned labeled green slider" id="slider-2"></div>
                </div>
                <div class="field">
                    <label>Выберите филиал</label>
                    <select name="branch" id="branch_select">
                        <option value="1"><b>Andijon BXO</b> - Andijon shahar, Abdurauf Fitrat ko’chasi, 239-uy - 170100</option>
                        <option value="19"><b>Beruniy BXO</b> - Beruniy tumani, Xalqlar do’stligi ko’chasi, 10-uy - 230201</option>
                        <option value="4"><b>Buxoro BXO</b> - Buxoro shahari, M. Iqbol ko’chasi, 3\1-uy - 200117</option>
                        <option value="21"><b>Chimboy BXO</b> - Chimboy shahar, Ernazar Alako’z ko’chasi, 36-uy - 231400</option>
                        <option value="7"><b>Farg'ona BXO</b> - Farg‘ona shahri, Al-Farg‘oniy ko‘chasi, 47-uy - 150100</option>
                        <option value="35"><b>G'azalkent BXO</b> - G’azalkent shahar, Beruniy ko’chasi, 24-uy - 110700</option>
                        <option value="5"><b>Galaosiyo BXO</b> - Galaosiyo shahar, Buyuk ipak yo'li ko’chasi, 25-uy - 200400</option>
                        <option value="25"><b>Guliston BXO</b> - Guliston shahri, Birlashgan ko‘chasi, 31-uy. - 120100</option>
                        <option value="27"><b>Jarq'o'rg'on BXO</b> - N.Boymurodov ko‘chasi, 1a-uy - 190600</option>
                        <option value="10"><b>Jizzax BXO</b> - Jizzax shahri, Navoiy ko‘chasi, 3A - 130100</option>
                        <option value="22"><b>Kattaqo'rg'on BXO</b> - Samarqand viloyati, Kattaqo’rg’on shahri, Amir Temur ko’chasi, 6 А-uy - 140814</option>
                        <option value="17"><b>Ko'kdala BXO</b> - Chiroqchi tumani, Ko’kdala qo’rg’oni, 2 - 181214</option>
                        <option value="6"><b>Kogon BXO</b> - Kogon shahri, Do’stlik ko’chasi, 4-uy - 200100</option>
                        <option value="9"><b>Marg'ilon BXO</b> - Marg’lon shahri, Misgarlik ko’chasi, 53A-uy - 151100</option>
                        <option value="12"><b>Namangan BXO</b> - Namangan shahar, Navoi ko’chasi, 70 А - uy - 160103</option>
                        <option value="15"><b>Navoiy BXO</b> - Navoiy shahar, G’alaba shoh ko’chasi, 149-A-uy - 210100</option>
                        <option value="20"><b>Nukus BXO</b> - Nukus shahri, Qoraqalpog‘iston ko’chasi, 28A-uy - 230100</option>
                        <option value="36"><b>Nurafshon BXO</b> - Nurafshon shahar, Toshkent yo`li ko‘chasi, 143/150-uy - 111500</option>
                        <option value="33"><b>Ohangoron BXO</b> - Ohangaron shahri, Xolmuhamedov ko’chasi, 38/1 uy - 110300</option>
                        <option value="13"><b>Pop BXO</b> - Pop shahar, Navoiy MFY Ziyoratgoh ko’chasi, 7-A uy - 160500</option>
                        <option value="16"><b>Qarshi BXO</b> - Qarshi shahar, O’zbekiston ko’chasi, 44-uy - 180100</option>
                        <option value="8"><b>Qo'qon BXO</b> - Qo’qon shahar, 3- tolzor MFY hududidagi, A.Temur ko‘chasi 30A uy. - 150700</option>
                        <option value="2"><b>Qo'rg'ontepa BXO</b> - Qo’rq’ontepa shahar, Andijon ko’chasi, 2-uy - 170700</option>
                        <option value="26"><b>Qumqo'rg'on BXO</b> - Yangi shahar mahallasi O‘zbekiston shoh ko‘chasi, 5 - 190900</option>
                        <option value="23"><b>Samarqand BXO</b> - Samarqand shahar, Sattepo maskani, Turkiston ko'chasi, 148-A-uy - 140161</option>
                        <option value="28"><b>Sariosiyo BXO</b> - Sariosiyo tumani, Mirzo Ulug’bek ko‘chasi, 18-uy - 133606</option>
                        <option value="30"><b>Sergeli BXO</b> - Toshkent shahar, Yangi Sergeli va Mehrigiyo ko’chalari kesishuvi, 116-uy - 100085</option>
                        <option value="29"><b>Termiz BXO</b> - Termiz shahar, At-Termiziy ko’chasi, 11-uy - 190112</option>
                        <option value="32"><b>Toshkent BXO</b> - Toshkent shahar, Shahrisabz ko’chasi, 38-uy - 100060</option>
                        <option value="14"><b>Uchqo'rg'on BXO</b> - Uchqo’rg’o’n shahar, Do’stlik ko’chasi, 3-uy - 160900</option>
                        <option value="38"><b>Xiva BXO</b> - Xiva shahri, Feruz ko’chasi, 87-uy - 220900</option>
                        <option value="3"><b>Xo’jaobod BXO</b> - Xo’jaobod sh. Navoiy ko’chasi,17 - 170001</option>
                        <option value="37"><b>Xonqa BXO</b> - Nafosat ko‘chasi, 30 uy - 220800</option>
                        <option value="39"><b>Xorazm BXO</b> - Urganch shahar, Al-Xorazmiy ko’chasi, 19/1-uy - 220106</option>
                        <option value="18"><b>Yakkabog' BXO</b> - Yakkabog‘ shahri, Yuksalish ko‘chasi, 2-uy - 181400</option>
                        <option value="31"><b>Yakkasaroy BXO</b> - Toshkent shahar, Shota rustaveli ko'chasi 53B - 111500</option>
                        <option value="11"><b>Yangiobod BXO</b> - Yangiobod shaharchasi, Bunyodkor ko‘chasi, 2-uy - 131300</option>
                        <option value="24"><b>Yangiyer BXO</b> - Yangiyer shahri, Yangi asr ko’chasi, 17-uy - 121003</option>
                        <option value="34"><b>Yangiyo'l BXO</b> - Yangiyo’l shahar, Sh. Rashidov ko’chasi, 1-uy - 112000</option>
                    </select>
                    <div id="branch_adress" style="margin-top: 6px; font-size: 14px; color: #555; font-weight: 300;">Andijon shahar, Abdurauf Fitrat ko’chasi, 239-uy</div>
                </div>
            </div>
            <div class="column" style="display: flex; flex-direction: column; gap: 16px;">
                <div class="field">
                    <label>Стоимость автомобиля</label>
                    <input type="text" value="187000040" readonly id="car_price">
                </div>
                <div class="field">
                    <label>Сумма кредита</label>
                    <input type="text" readonly id="credit_amount">
                </div>
                <div class="field">
                    <label>Годовой процентная ставка</label>
                    <div class="ui right labeled input">
                        <input type="number" value="23" min="1" max="100" id="percent" readonly>
                        <div class="ui basic label">
                            %
                        </div>
                    </div>
                    <div class="ui bottom aligned labeled green slider" id="slider-3"></div>
                </div>
                <div>
                    <p style="margin-bottom: 8px;">Вы хотите получить автокредит на таких условиях?</p>
                    <a class="ui button" href="/" style="font-weight: 400;" href="">Отмена</a>
                    <a class="ui red button" href="/credits/avtokredit/payment" style="font-weight: 400;" href="">Подтвердить</a>
                </div>
            </div>
        </div>

    </form>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const branchSelect = document.getElementById("branch_select");
        const branchAddress = document.getElementById("branch_adress");

        branchSelect.addEventListener("change", function() {
            const selectedOption = branchSelect.options[branchSelect.selectedIndex].text;
            const address = selectedOption.split(" - ")[1];
            branchAddress.textContent = address;
        });
    });

    function formatNumber(num) {
        return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
    }

    function parseFormattedNumber(numStr) {
        return parseInt(numStr.replace(/\s/g, ''), 10);
    }

    $(document).ready(function() {
        // Initialize the slider
        $('#slider-1').slider({
            start: 50,
            min: 1,
            max: 100,
            showThumbTooltip: true,
            tooltipConfig: {
                position: 'bottom center',
                variation: 'mini black visible'
            },
            smooth: true,
            onChange: function(value) {
                let carPrice = parseFormattedNumber($('#car_price').val());
                let firstPayment = Math.round(carPrice / 100 * value);
                $('#first_payment').val(formatNumber(firstPayment));
                $('#credit_amount').val(formatNumber(carPrice - firstPayment));
            }
        });

        $('#slider-2').slider({
            start: 12,
            min: 12,
            max: 60,
            step: 12,
            smooth: true,
            onChange: function(value) {
                $('#credit_month').val(value);
                $('#percent').val(22 + ($('#credit_month').val() / 12));
            }
        });

        // Set initial value for first_payment
        let carPrice = parseFormattedNumber($('#car_price').val());
        let initialFirstPayment = Math.round(carPrice / 100 * 50);
        $('#first_payment').val(formatNumber(initialFirstPayment));
        $('#credit_amount').val(formatNumber(carPrice - initialFirstPayment));

        // Event listener for input field to update the slider
        $('#first_payment').on('input change', function() {
            let carPrice = parseFormattedNumber($('#car_price').val());
            let firstPayment = parseFormattedNumber($(this).val());

            if (!isNaN(firstPayment) && !isNaN(carPrice)) {
                var sliderValue = (firstPayment / carPrice) * 100;
                $('#slider-1').slider('set value', sliderValue);
                $('#credit_amount').val(formatNumber(carPrice - firstPayment));
            }
        });

        // Format car price initially
        $('#car_price').val(formatNumber(parseFormattedNumber($('#car_price').val())));
    });
</script>
