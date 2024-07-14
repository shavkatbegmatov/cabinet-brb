<?php

function debug($data) {
    echo '<pre>' . $data . '</pre>';
}

function redirect($url) {
    header('Location: ' . $url);
}

function user() {
    if (isset($_SESSION['user'])) {
        return R::findOne('user', 'id = ?', [$_SESSION['user']]);
    }
}