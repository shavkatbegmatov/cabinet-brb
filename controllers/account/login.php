<?php

$title = 'Авторизация';

if (isset($_SESSION['user'])) {
    redirect('/account');
}

if (!empty($_POST)) {
    $_SESSION['error'] = 'Серийный номер паспорта или пароль введены неверно.';
}