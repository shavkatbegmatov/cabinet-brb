<?php

$title = 'Авторизация';

if (isset($_SESSION['user'])) {
    redirect('/account');
}

if (!empty($_POST)) {
    if ($_POST['passport'] == 'AB 0416871') {
        if ($_POST['birth_date'] == '1983-03-15') {
        $_SESSION['user'] =
            [
            'first_name' => 'asdasd',
            'last_name' => 'asdasd',
                ];
        }
    }
    $_SESSION['error'] = 'Серийный номер паспорта или день рождения введены неверно. ' . $_POST['passport'] . ' ' . $_POST['birth_date'];
}