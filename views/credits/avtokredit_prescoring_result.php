<div class="ui two column stackable grid">
    <h1 class="column" style="display: flex; align-items: center; font-weight: 400;"><a href="/credits/avtokredit/prescoring" style="display: flex; align-items: center; color: #000; margin-right: 4px;"><i class="bx bx-left-arrow-alt"></i> Назад</a></h1>
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

<div class="ui center aligned container" style="display: flex; justify-content: center; margin-top: 32px;">
    <div class="ui very padded form segment" style="max-width: 500px; width: 100%; display: flex; justify-content: center; align-items: center; flex-direction: column;">
        <?php if ($data_result == 0): ?>
            <img src="/views/layouts/assets/img/check.jpg" class="ui small centered image">
            <h1 style="font-size: 24px; font-weight: 400;">Вы можете получить автокредит до 600 000 000 сум</h1>
            <p style="margin-top: 8px; color: #555; font-weight: 300">
                У вас хорошие лимиты для получения автокредита. <br>
                Хотите получить автокредит? <br>
                Нажимайте кнопку "Начать оформление"
            </p>
            <a class="ui red button" style="font-weight: 400; margin-top: 24px;" href="/credits/avtokredit/calculation">Начать оформление</a>
        <?php elseif ($data_result == 1): ?>
            <img src="/views/layouts/assets/img/warning.jpg" class="ui small centered image">
            <h1 style="font-size: 24px; font-weight: 400;">Ваш лимит на получание автокредита - 100 000 000 сум</h1>
            <p style="margin-top: 8px; color: #555; font-weight: 300">
                К сожалению, у вас слишком низкий лимит. <br>
                Вы можете получить автокредит указав созаёмщика!
            </p>
            <a class="ui red button" style="font-weight: 400; margin-top: 24px;" href="/credits/avtokredit/start">Начать оформление с созаемщиком</a>
        <?php elseif ($data_result == 2): ?>
            <img src="/views/layouts/assets/img/declined.jpg" class="ui small centered image">
            <h1 style="font-size: 24px; font-weight: 400;">Вы не сможете получить автокредит</h1>
            <p style="margin-top: 8px; color: #555; font-weight: 300">
                Уважаемый клиент у вас плохие оценкой по скорингу. <br>
                К сожалению Вы не можете получить автокредит
            </p>
            <a class="ui red button" style="font-weight: 400; margin-top: 24px;" href="/">Главная страница</a>
        <?php endif; ?>
    </div>
</div>
