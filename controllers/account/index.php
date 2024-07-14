<?php

$title = 'Аккаунт';

if (!isset($_SESSION['user'])) {
    redirect('/account/login');
}

$user = R::findOne('user', 'id = ?', [$_SESSION['user']]);

// Test