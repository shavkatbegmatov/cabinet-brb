<div class="ui two column stackable grid">
    <h1 class="column" style="display: flex; align-items: center; font-weight: 400;"><a href="/credits" style="display: flex; align-items: center; color: #000; margin-right: 4px;"><i class="bx bx-left-arrow-alt"></i> Назад</a></h1>
</div>

<div class="ui fluid very padded segment">
    <div class="ui four column stackable grid" style="margin-bottom: 16px;">
        <div class="centered seven wide column">
            <img class="ui image" src="/views/layouts/assets/img/car.jpg" alt="" />
            <p style="font-weight: 400; font-size: 16px; color: #555; text-align: center; margin-top: 10px;">С нами ваша мечта мечта о новом автомобиле станет реальностью!</p>
        </div>
        <div class="three wide column" style="text-align: center;">
            <img class="ui tiny centered image" src="/views/layouts/assets/img/icons/card-money.png" alt="" style="margin-bottom: 24px;" />
            <b>Boshlang'ich badal</b>
            <p style="font-weight: 300; margin-top: 4px;">15% dan boshlab</p>
        </div>
        <div class="three wide column" style="text-align: center;">
            <img class="ui tiny centered image" src="/views/layouts/assets/img/icons/Time-icon.png" alt="" style="margin-bottom: 24px;" />
            <b>Muddati</b>
            <p style="font-weight: 300; margin-top: 4px;">60 oygacha</p>
        </div>
        <div class="three wide column" style="text-align: center;">
            <img class="ui tiny centered image" src="/views/layouts/assets/img/icons/Percent-icon.png" alt="" style="margin-bottom: 24px;" />
            <b>Yillik foiz stavkasi</b>
            <p style="font-weight: 300; margin-top: 4px;">23% dan boshlab</p>
        </div>
    </div>
    <button class="ui basic button" style="display: inline-flex; align-items: center; gap: 6px;" onclick="$('#togglebox').toggle();">Подробно <i class="bx bx-chevron-down" style="font-size: 22px;"></i></button>
    <div id="togglebox" style="margin-top: 24px;">
        <div class="ui fluid styled accordion">
            <div class="title">
                <b style="font-size: 20px; font-weight: 400;">Основные условия</b>
            </div>
            <div class="content">
                <p>Цель кредита — кредит выделяется для приобретения легкового автотранспортного средства на первичном рынке, а также на выплату страховых премий.</p>
                <p>Срок кредита — до 60 месяцев.</p>
                <p>Льготный период — 6 месяцев (при дифференцированном методе).</p>
                <p>Сумма кредита — до 85% от суммы, указанной в договоре купли-продажи.</p>
                <p>Первоначальный взнос — 15%.</p>
                <p>Метод погашения: аннуитетный (равными суммами через равные промежутки времени) или
                дифференцированный (сумма, размер которой с каждым разом уменьшается).</p>
                <p>Обеспечение кредита: Полис страхования риска невозврата кредита до принятия в залог автомобиля, приобретаемого в кредит.</p>
            </div>
            <div class="title">
                <b style="font-size: 20px; font-weight: 400;">Процентная ставка</b>
            </div>
            <div class="content">
                <table></table>
            </div>
            <div class="title">
                <b style="font-size: 20px; font-weight: 400;">Требования к получателю кредита</b>
            </div>
            <div class="content">
                <ul>
                    <li>Заемщик - гражданин Республики Узбекистан, достигший 18-летнего возраста и не старше 65 лет в день обращения за кредитом.</li>
                    <li>Отсутствие просроченной задолженности по ранее полученным кредитам и другим обязательствам.</li>
                    <li>Постоянный доход в течении последних 6 месяцев.</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="ui fluid very padded segment">
    <div class="steps">
      <div class="line"></div>
      <div class="step">
        <div class="circle">1</div>
        <div class="description">Получайте договор для автомобиля через нас</div>
      </div>
      <div class="step">
        <div class="circle">2</div>
        <div class="description">Узнайте свой лимит и отправьте заявку для получения автокредита</div>
      </div>
      <div class="step">
        <div class="circle">3</div>
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
    <a href="/credits/avtokredit/agreement" class="ui red button" style="font-weight: 400;">Начать оформление</a>
</div>

<script>
    $('#togglebox').hide();
    $('.ui.accordion').accordion();
</script>