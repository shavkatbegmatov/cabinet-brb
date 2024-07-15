<script src="https://unpkg.com/imask"></script>

<style>
    .code-input {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
        text-align: center;
        width: 60px;
        height: 60px;
    }
</style>

<div class="ui two column stackable grid">
    <h1 class="column" style="display: flex; align-items: center; font-weight: 400;">
        <a href="/credits/avtokredit/oformleniye" style="display: flex; align-items: center; color: #000; margin-right: 4px;">
            <i class="bx bx-left-arrow-alt"></i> Назад
        </a>
    </h1>
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
                <h1 style="font-weight: 400; margin-bottom: 24px; font-size: 20px; text-align: center;">
                    Пожалуйста оплатите первоначальный взнос
                </h1>
                <div class="field">
                    <label>Первоначальный взнос</label>
                    <input type="text" id="first_payment" value="29 920 006" readonly>
                </div>
                <div class="field">
                    <label>Транзитный счет</label>
                    <input type="text" readonly id="transit" value="20206 000 7000 0103 7200">
                </div>
                <div class="field">
                    <label>Детали платежа</label>
                    <textarea rows="3">Первоначальный взнос для автокредита Ахматова Маруфа по договору 1-216-2024-07867UZ</textarea>
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
                                <input type="text" id="credit_card_number" placeholder="**** **** **** ****" style="width: 350px;">
                            </div>
                            <div class="field">
                                <label>Срок действия</label>
                                <input type="text" id="credit_card_expiry" placeholder="ММ/ГГ" style="width: 350px;">
                            </div>
                            <p style="color: #555; font-weight: 400; font-size: 12px;">
                                Мы не гарантируем безопастность ваших данных. Вам придет смс с кодом. <br> Не сообщайте никому код.
                            </p>
                            <div>
                                <p style="margin-bottom: 8px;">Хотите платить первоначальный взнос?</p>
                                <a class="ui button" href="/" style="font-weight: 400;">Отмена</a>
                                <a class="ui red button" href="/credits/avtokredit/payment?waiting_for_code=true" style="font-weight: 400;">Оплатить</a>
                            </div>
                        <?php elseif (isset($_GET['waiting_for_code'])): ?>
                            <h1 style="font-size: 24px; font-weight: 400;">Подтверждение</h1>
                            <p style="color: #555; font-weight: 400; font-size: 12px; margin-bottom: 32px;">
                                На номер +998 ** *** ** 94 отправлено СМС с кодом.
                            </p>
                            <div style="display: flex; justify-content: space-between; align-items: center; gap: 8px;">
                                <input type="text" class="ui column input code-input" maxlength="1">
                                <input type="text" class="ui column input code-input" maxlength="1">
                                <input type="text" class="ui column input code-input" maxlength="1">
                                <input type="text" class="ui column input code-input" maxlength="1">
                                <input type="text" class="ui column input code-input" maxlength="1">
                                <input type="text" class="ui column input code-input" maxlength="1">
                            </div>
                            <div style="margin-top: 32px;">
                                <p style="margin-bottom: 8px;">Подтвердить</p>
                                <a class="ui button" href="/" style="font-weight: 400;">Отмена</a>
                                <a class="ui red button" href="/credits/avtokredit/payment?payment_complete=true" style="font-weight: 400;">Оплатить</a>
                            </div>
                        <?php elseif (isset($_GET['payment_complete'])): ?>
                            <h1 style="font-size: 24px; font-weight: 400;">Оплачено</h1>
                            <img src="/views/layouts/assets/img/check.jpg" width="100">
                            <p style="color: #555; font-weight: 400; font-size: 12px; margin-bottom: 32px; text-align: center;">
                                Первоначальный взнос для автокредита <br> Ахматова Маруфа по договору 1-216-2024-07867UZ <br> Оплачено на транзитный счет 20206 000 7000 0103 7200
                            </p>
                            <a class="ui basic button" href="/" style="font-weight: 400; border-radius: 50px;">Чек</a>
                            <div style="margin-top: 32px;">
                                <a class="ui button" href="/" style="font-weight: 400;">Отмена</a>
                                <a class="ui red button" href="/credits/avtokredit/payment/insurance" style="font-weight: 400;">Продолжить</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="ui bottom attached basic tab segment active" data-tab="second">
                    <div style="width: 100%; display: flex; align-items: center; flex-direction: column; gap: 12px;">
                        <h1 style="font-size: 24px; font-weight: 400;">Платить через QUANT</h1>
                        <p style="color: #555; font-weight: 400; font-size: 12px;">
                            Платите первоначальный взнос через мобильное приложение QUANT
                        </p>
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
                            <span class="ui big label" style="font-weight: 400;">Не оплачено</span>
                            <a class="ui red button" href="/credits/avtokredit/payment" style="font-weight: 400;">Проверить статус платежа</a>
                        </div>
                        <a class="ui basic button" href="/credits/avtokredit/payment" style="font-weight: 400; margin-top: 24px;" disabled>Продолжить</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    // Initialize IMask for credit card number
    var cardNumberElement = document.getElementById('credit_card_number');
    if (cardNumberElement) {
        var cardNumberMask = IMask(cardNumberElement, {
            mask: '0000 0000 0000 0000'
        });
    }

    // Initialize IMask for credit card expiry date
    var cardExpiryElement = document.getElementById('credit_card_expiry');
    if (cardExpiryElement) {
        var cardExpiryMask = IMask(cardExpiryElement, {
            mask: 'MM/YY',
            blocks: {
                MM: {
                    mask: IMask.MaskedRange,
                    from: 1,
                    to: 12
                },
                YY: {
                    mask: IMask.MaskedRange,
                    from: 0,
                    to: 99
                }
            }
        });
    }

    // Handle automatic focus transition for confirmation code inputs
    var codeInputs = document.querySelectorAll('.code-input');
    codeInputs.forEach((input, index) => {
        input.addEventListener('input', function() {
            if (input.value.length === 1 && index < codeInputs.length - 1) {
                codeInputs[index + 1].focus();
            }
        });

        input.addEventListener('keydown', function(event) {
            if (event.key === 'Backspace' && input.value.length === 0 && index > 0) {
                codeInputs[index - 1].focus();
            }
        });
    });

    // Ensure that inputs are cleared and reset focus on page load
    codeInputs.forEach(input => input.value = '');
    if (codeInputs.length > 0) {
        codeInputs[0].focus();
    }
});

$('.menu .item').tab();



</script>
