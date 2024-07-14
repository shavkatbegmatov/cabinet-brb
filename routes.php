<?php

get('/', function() {
    render('index');
});

get('/coming_soon', function() {
    render('coming_soon');
});

get('/credits', function() {
    render('credits/index');
});

get('/credits/avtokredit', function() {
    render('credits/avtokredit');
});

get('/credits/avtokredit/agreement', function() {
    render('credits/avtokredit_agreement');
});

get('/credits/avtokredit/agreement/view', function() {
    render('credits/avtokredit_agreement_view');
});

get('/credits/avtokredit/agreement/new', function() {
    render('credits/avtokredit_agreement_new');
});

get('/credits/avtokredit/prescoring', function() {
    render('credits/avtokredit_prescoring');
});

get('/credits/avtokredit/calculation', function() {
    render('credits/avtokredit_calculation');
});

get('/credits/avtokredit/oformleniye', function() {
    render('credits/avtokredit_oformleniye');
});

get('/credits/avtokredit/payment', function() {
    render('credits/avtokredit_payment');
});

get('/credits/avtokredit/payment/insurance', function() {
    render('credits/avtokredit_payment_insurance');
});

get('/credits/avtokredit/confirm', function() {
    render('credits/avtokredit_confirm');
});

get('/credits/avtokredit/complete', function() {
    render('credits/avtokredit_complete');
});

get('/credits/avtokredit/prescoring/result/:result', function($result) {
    render('credits/avtokredit_prescoring_result', ['result' => $result]);
});

get('/credits/mikrozaym', function() {
    render('credits/mikrozaym');
});

get('/credits/overdraft', function() {
    render('credits/mikrozaym');
});

get('/account', function() {
    render('account/index');
});

get('/account/register', function() {
    render('account/register', 'auth');
});

get('/account/login', function() {
    render('account/login', 'auth');
});

get('/account/logout', function() {
    render('account/logout');
});

get('*', function() {
   render('404');
});

dispatch();