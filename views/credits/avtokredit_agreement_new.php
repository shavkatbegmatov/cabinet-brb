<style>
.checkboxes {
    display: flex;
    justify-content: space-between;
    gap: 24px;
    margin: 8px 0px 36px 0px;
}

.color-checkbox {
    display: flex;
    align-items: center;
    cursor: pointer;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    font-size: 22px;
    user-select: none;
}

.color-checkbox input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}

.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 40px;
    width: 40px;
    border: 1px solid #ddd;
    border-radius: 50%;
    box-sizing: border-box; /* Ensure border is included in the element's dimensions */
}

.color-checkbox input:checked ~ .checkmark {
    border: 3px solid #2196F3; /* Add a thicker border to indicate selection */
}

.color-checkbox.black .checkmark {
    background-color: black;
}

.color-checkbox.white .checkmark {
    background-color: white;
}

.color-checkbox.gray .checkmark {
    background-color: gray;
}

.color-checkbox.dark_blue .checkmark {
    background-color: darkblue;
}

.color-checkbox.purple .checkmark {
    background-color: purple;
}

.color-checkbox input:checked ~ .checkmark.black {
    background-color: black;
}

.color-checkbox input:checked ~ .checkmark.white {
    background-color: white;
}

.color-checkbox input:checked ~ .checkmark.gray {
    background-color: gray;
}

.color-checkbox input:checked ~ .checkmark.dark_blue {
    background-color: darkblue;
}

.color-checkbox input:checked ~ .checkmark.purple {
    background-color: purple;
}

.color-checkbox .checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

.color-checkbox input:checked ~ .checkmark:after {
    display: block;
}

.color-checkbox .checkmark:after {
    left: 15px;
    top: 11px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    transform: rotate(45deg);
}

</style>

<div class="ui two column stackable grid">
    <h1 class="column" style="display: flex; align-items: center; font-weight: 400;"><a href="/credits/avtokredit/agreement" style="display: flex; align-items: center; color: #000; margin-right: 4px;"><i class="bx bx-left-arrow-alt"></i> Назад</a></h1>
</div>

<div class="steps">
    <div class="line"></div>
    <div class="step">
    <div class="circle full">1</div>
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

<div class="ui very padded segment" style="margin-top: 32px">
    <div class="ui stackable two column grid">
        <div class="column" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <img class="ui large image" src="/views/layouts/assets/img/car2.jpg" alt="">
            <div>
                <h1 style="text-align: center; font-weight: 500; margin-top: 32px;">187 000 000 UZS</h1>
                <p style="text-align: center; font-weight: 400;">Стоимость автомобиля</p>
            </div>
        </div>
        <div class="column">
            <form class="ui form" action="/avtokredit/agreement/view" style="display: flex; flex-direction: column; gap: 16px;">
                <h1 style="color: #d00; font-weight: 400;">Получить новый договор</h1>
                <div class="field">
                    <label>Выберите тип автомобиля</label>
                    <select>
                        <option>Chevrolet</option>
                        <option>BYD</option>
                        <option>Kia</option>
                        <option>Mercedes-Benz</option>
                        <option>Hyundai</option>
                    </select>
                </div>
                <div class="field">
                    <label>Выберите дилера</label>
                    <select>
                        <option value="drivers-village">DRIVER'S VILLAGE MCHJ</option>
                        <option value="green-cars-motors">GREEN CARS MOTORS MCHJ</option>
                        <option value="luckycar">LUCKYCAR (Olam Avto) MCHJ</option>
                        <option value="mega-oil-biznes">MEGA OIL BIZNES MCHJ</option>
                        <option value="oscar-motorcars">OSCAR MOTORCARS MCHJ</option>
                        <option value="poytaxt-avto-tex-savdo">POYTAХT AVTO TEХ SAVDO MCHJ</option>
                        <option value="sergeli-avtotexxizmat">SERGELI-AVTOTEХХIZMAT MCHJ</option>
                        <option value="toshkent-avtomarkaz">TOSHKENT AVTOMARKAZ MCHJ</option>
                        <option value="turon-avto">TURON AVTO MCHJ</option>
                        <option value="uchtepa-avtosavdo">UCHTEPA AVTOSAVDO MCHJ</option>
                        <option value="xumo-avtosavdo">XUMO-AVTOSAVDO MCHJ</option>
                        <option value="yunus-obod-avto-savdo">YUNUS-OBOD AVTO SAVDO MCHJ</option>
                        <option value="euroaziya-motors">EUROAZIYA MOTORS MCHJ</option>
                        <option value="vehicle-valley">VEHICLE VALLEY MCHJ</option>
                        <option value="favorite-cars-service">FAVORITE-CARS-SERVICE MCHJ</option>
                    </select>
                </div>
                <div class="field">
                    <label>Выберите модель автомобиля</label>
                    <select>
                        <option value="chevrolet-tahoe">Chevrolet Tahoe</option>
                        <option value="chevrolet-traverse">Chevrolet Traverse</option>
                        <option value="chevrolet-equinox">Chevrolet Equinox</option>
                        <option value="chevrolet-captiva">Chevrolet Captiva</option>
                        <option value="chevrolet-tracker">Chevrolet Tracker</option>
                        <option value="chevrolet-malibu-xl">Chevrolet Malibu XL</option>
                        <option value="chevrolet-lacetti">Chevrolet Lacetti</option>
                        <option value="chevrolet-onix" selected>Chevrolet Onix</option>
                        <option value="chevrolet-cobalt">Chevrolet Cobalt</option>
                        <option value="chevrolet-damas">Chevrolet Damas</option>
                        <option value="chevrolet-labo">Chevrolet Labo</option>
                    </select>
                </div>
                <div class="field">
                    <label>Выберите модификацию автомобиля</label>
                    <select>
                        <option>LS MT</option>
                        <option>1LT MT</option>
                        <option>3LT MT</option>
                        <option>LTZ Turbo AT</option>
                        <option>Premier 1 Turbo AT</option>
                        <option selected>Premier 2 Turbo AT</option>
                        <option>Premier 2 Turbo AT PLUS</option>
                        <option>TURBO AT REDLINE</option>
                    </select>
                </div>
                <div class="field">
                    <label>Выберите цвет автомобиля</label>
                    <div class="checkboxes">
                        <label class="color-checkbox black">
                            <input type="radio" name="color" value="black">
                            <span class="checkmark"></span>
                        </label>
                        <label class="color-checkbox white">
                            <input type="radio" name="color" value="white">
                            <span class="checkmark"></span>
                        </label>
                        <label class="color-checkbox gray">
                            <input type="radio" name="color" value="gray">
                            <span class="checkmark"></span>
                        </label>
                        <label class="color-checkbox dark_blue">
                            <input type="radio" name="color" value="dark_blue">
                            <span class="checkmark"></span>
                        </label>
                        <label class="color-checkbox purple">
                            <input type="radio" name="color" value="purple">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>

                <a class="ui fluid red button" href="/credits/avtokredit/agreement/view" style="font-weight: 400;">Получить договор</a>
            </form>
        </div>
    </div>
</div>