<?php

$title = 'Регистрация';

if (isset($_SESSION['user'])) {
    redirect('/account');
}

if (!empty($_POST)) {
    if ($_POST['passport'] != '' && $_POST['password'] != '') {
        $passport = $_POST['passport'];
        $password = md5($_POST['password']);

        $_SESSION['error'] = 'Этот серийный номер паспорта уже используется. Попробуйте войти.';
    }
}