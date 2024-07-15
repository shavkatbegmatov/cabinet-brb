<script src="https://unpkg.com/imask"></script>

<form class="ui segment form" method="POST" action="">
    <h1 class="ui centered header">Вход</h1>

    <?php if (isset($_SESSION['error'])): ?>
        <div class="ui visible error message">
            <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
    <?php endif; ?>
    
    <div class="field">
        <label><span id="passport_label">Серийный номер паспорта</span> или <span id="pinfl_label">ПИНФЛ</span></label>
        <input type="text" name="passport" id="passport" placeholder="AA 0000000">
    </div>
    <div class="field">
        <label>День рождения</label>
        <input type="date" name="birth_date" id="birth_date" placeholder="День рождения">
    </div>
    <button type="submit" class="ui fluid red button">Войти</button>
</form>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        let passportLabel = document.getElementById('passport_label');
        let pinflLabel = document.getElementById('pinfl_label');
        let element = document.getElementById('passport');
        
        let maskOptions = {
            mask: [
                {
                    mask: 'AA 0000000',
                    definitions: {
                        'A': /[A-Z]/
                    }
                },
                {
                    mask: '00000000000000'
                }
            ]
        };
        
        let mask = IMask(element, maskOptions);
        
        element.addEventListener('input', function() {
            let value = element.value;
            if (/^[A-Z]{2} \d{7}$/.test(value)) {
                passportLabel.style.color = 'green';
                pinflLabel.style.color = '';
            } else if (/^\d{14}$/.test(value)) {
                pinflLabel.style.color = 'green';
                passportLabel.style.color = '';
            } else {
                passportLabel.style.color = '';
                pinflLabel.style.color = '';
            }
        });
    });
</script>
