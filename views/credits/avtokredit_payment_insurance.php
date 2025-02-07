<div class="ui two column stackable grid">
    <h1 class="column" style="display: flex; align-items: center; font-weight: 400;"><a href="/credits/avtokredit/payment" style="display: flex; align-items: center; color: #000; margin-right: 4px;"><i class="bx bx-left-arrow-alt"></i> Назад</a></h1>
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
    <div class="circle">5</div>
    <div class="description">Подпишите договор и получайте автокредит</div>
    </div>
</div>

<div class="ui very padded segment" style="margin-top: 32px">
    <form class="ui form" action="/credits/avtokredit/prescoring/result">
        <div class="ui two column stackable internally celled grid">
            <div class="column" style="display: flex; flex-direction: column; gap: 16px;">
                <h1 style="font-weight: 400; margin-bottom: 24px; font-size: 20px; text-align: center;">Пожалуйста оплатите страховую комиссию</h1>
                <div class="field">
                    <label>Страховая комиссия</label>
                    <select>
                        <option>SQB Insurance</option>
                    </select>
                </div>
                <div class="field">
                    <label>Процент страховой комиссии</label>
                    <div class="ui right labeled input">
                        <input type="number" value="1" min="1" max="100">
                        <div class="ui basic label">
                            %
                        </div>
                    </div>
                </div>
                <div class="field">
                    <label>Сумма страховой комиссии (UZS)</label>
                    <input type="text" value="1 570 800">
                </div>
                <div class="field">
                    <label>Детали платежа</label>
                    <textarea rows="3">Страховая комиссия для автокредита Ахматова Маруфа по договору 1-216-2024-07867UZ</textarea>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden">
                    <label>Я прочитал и согласен с <a href="#">условиями оферты</a></label>
                    </div>
                </div>
            </div>
            <div class="column" style="display: flex; flex-direction: column; gap: 16px;">
                <div class="ui top attached tabular menu">
                <a class="item" data-tab="first">Быстрая оплата</a>
                <a class="item" data-tab="second">Оплата через QUANT</a>
                </div>
                <div class="ui bottom attached basic tab segment" data-tab="first">
                    <div style="width: 100%; display: flex; align-items: center; flex-direction: column; gap: 12px;">
                        <?php if (!isset($_GET['waiting_for_code']) && !isset($_GET['payment_complete'])): ?>
                            <h1 style="font-size: 24px; font-weight: 400;">Платеж</h1>
                            <div class="field">
                                <label>Номер банковской карты</label>
                                <input type="text" id="credit_card" placeholder="**** **** **** ****" style="width: 350px;">
                            </div>
                            <div class="field">
                                <label>Срок действия</label>
                                <input type="text" id="credit_card" placeholder="ММ/ГГ" style="width: 350px;">
                            </div>
                            <p style="color: #555; font-weight: 400; font-size: 12px;">Мы не гарантируем безопастность ваших данных. Вам придет смс с кодом. <br> Не сообщайте никому код.</p>
                            <div>
                                <p style="margin-bottom: 8px;">Хотите платить первоначальный взнос?</p>
                                <a class="ui button" href="/" style="font-weight: 400;" href="">Отмена</a>
                                <a class="ui red button" href="/credits/avtokredit/payment/insurance?waiting_for_code=true" style="font-weight: 400;" href="">Оплатить</a>
                            </div>
                        <?php elseif (isset($_GET['waiting_for_code'])): ?>
                            <h1 style="font-size: 24px; font-weight: 400;">Подтверждение</h1>
                            <p style="color: #555; font-weight: 400; font-size: 12px; margin-bottom: 32px;">На номер +998 ** *** ** 94 отправлено СМС с кодом.</p>
                            <div style="display: flex; justify-content: space-between; align-items: center; gap: 8px;">
                                <input type="text" class="ui column input" maxlength="1">
                                <input type="text" class="ui column input"  maxlength="1">
                                <input type="text" class="ui column input"  maxlength="1">
                                <input type="text" class="ui column input"  maxlength="1">
                                <input type="text" class="ui column input"  maxlength="1">
                                <input type="text" class="ui column input"  maxlength="1">
                            </div>
                            <div style="margin-top: 32px;">
                                <p style="margin-bottom: 8px;">Подтвердить</p>
                                <a class="ui button" href="/" style="font-weight: 400;" href="">Отмена</a>
                                <a class="ui red button" href="/credits/avtokredit/payment/insurance?payment_complete=true" style="font-weight: 400;" href="">Оплатить</a>
                            </div>
                        <?php elseif (isset($_GET['payment_complete'])): ?>
                            <h1 style="font-size: 24px; font-weight: 400;">Оплачено</h1>
                            <img src="/views/layouts/assets/img/check.jpg" width="100">
                            <p style="color: #555; font-weight: 400; font-size: 12px; margin-bottom: 32px; text-align: center;">
                                Первоначальный взнос для автокредита <br> Ахматова Маруфа по договору 1-216-2024-07867UZ <br> Оплачено на транзитный счет 20206 000 7000 0103 7200
                            </p>
                            <a class="ui small basic button" href="/" style="font-weight: 400; border-radius: 50px;" href="">Чек</a>
                            <div style="margin-top: 32px;">
                                <a class="ui button" href="/" style="font-weight: 400;" href="">Отмена</a>
                                <a class="ui red button" href="/credits/avtokredit/confirm" style="font-weight: 400;" href="">Продолжить</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="ui bottom attached basic tab segment active" data-tab="second">
                    <div style="width: 100%; display: flex; align-items: center; flex-direction: column; gap: 12px;">
                        <h1 style="font-size: 24px; font-weight: 400;">Платить через QUANT</h1>
                        <p style="color: #555; font-weight: 400; font-size: 12px;">Платите первоначальный взнос через мобильное приложение QUANT</p>
                        <ol style="color: #555; font-weight: 400; font-size: 12px;">
                            <li>Сканируйте QR код</li>
                            <li>Откройте мобильное приложение QUANT</li>
                            <li>Выбирайте "Пункт оплаты"</li>
                            <li>Выбирайте "Финансовые услуги"</li>
                            <li>Оплата через реквизиты</li>
                        </ol>
                        <div style="display: flex; justify-content: space-between; align-items: center; gap: 6px;">
                            <div>
                                <img style="width: 100%; margin: 24px 0px;" src="/views/layouts/assets/img/qr.jpg">
                            </div>
                        </div>
                        <div style="display: flex; justify-content: center; align-items: center; gap: 6px;">
                            <span class="ui big label" href="/" style="font-weight: 400;" href="">Не оплачено</span>
                            <a class="ui red button" href="/credits/avtokredit/payment/insurance" style="font-weight: 400;" href="">Проверить статус платежа</a>
                        </div>
                        <a class="ui basic button" href="/credits/avtokredit/payment/insurance" style="font-weight: 400; margin-top: 24px;" href="" disabled>Продолжить</a>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>

<script>
    $('.menu .item').tab();
    $('.ui.checkbox').checkbox();
</script>