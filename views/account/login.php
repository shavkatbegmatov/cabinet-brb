<form class="ui segment form" method="POST" action="">
    <h1 class="ui centered header">Вход</h1>

    <?php if (isset($_SESSION['error'])): ?>
        <div class="ui visible error message">
            <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
    <?php endif; ?>
    
    <div class="field">
        <label>Серийный номер паспорта, или ЖШШИР</label>
        <input type="text" name="username" placeholder="AD0000000">
    </div>
    <div class="field">
        <label>День рождения</label>
        <input type="date" name="birth_date" id="birth_date" placeholder="День рожления">
    </div>
    <button type="submit" class="ui fluid red button">Войти</button>
</form>