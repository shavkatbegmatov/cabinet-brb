<div class="ui two column stackable grid">
    <h1 class="column" style="display: flex; align-items: center; font-weight: 400;"><a href="/credits/avtokredit/payment/insurance" style="display: flex; align-items: center; color: #000; margin-right: 4px;"><i class="bx bx-left-arrow-alt"></i> Назад</a></h1>
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
    <div class="circle full">4</div>
    <div class="description">Оплатите первоначальный взнос и комиссию для страхование</div>
    </div>
    <div class="step">
    <div class="circle full">5</div>
    <div class="description">Подпишите договор и получайте автокредит</div>
    </div>
</div>

<div class="ui very padded segment" style="margin-top: 32px">
    <form class="ui form" action="/credits/avtokredit/prescoring/result">
        <div class="ui two column stackable internally celled grid">
            <div class="column" style="display: flex; flex-direction: column; gap: 16px;">
                <h1 style="font-weight: 400; margin-bottom: 24px; font-size: 20px; text-align: center;">Оформление</h1>
                <div class="field">
                    <label>Стоимость автомобиля</label>
                    <input type="text" value="187 040 000,0 UZS" readonly>
                </div>
                <div class="field">
                    <label>Первоначальный взнос</label>
                    <input type="text" value="29 920 006,4 UZS" readonly>
                </div>
                <div class="field">
                    <label>Сумма кредита</label>
                    <input type="text" value="157 080 033,6 UZS" readonly>
                </div>
                <div class="field">
                    <label>Срок кредита</label>
                    <input type="text" value="60 месяцев" readonly>
                </div>
                <div class="field">
                    <label>Страховая комиссия</label>
                    <input type="text" value="1 570 800,0 UZS" readonly>
                </div>
            </div>
            <div class="column" style="display: flex; flex-direction: column; gap: 16px; align-items: center;">
                <h1 style="font-weight: 400; margin-bottom: 24px; font-size: 20px; text-align: center;">Подписание</h1>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" name="terms" tabindex="0" class="hidden">
                        <label><a href="" target="_blank">Ознакомиться</a> и подписать договор</label>
                    </div>
                </div>
                <p style="font-weight: 300; color: #555;">Я ознакомился с публичной оффертой и согласен с условиями офферты</p>
                <a class="ui red button" href="/credits/avtokredit/complete" style="font-weight: 400;">Получить автокредит</a>
            </div>
        </div>
    </form>
</div>

<script>
    $('.ui.checkbox').checkbox();
</script>