<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db_connect.php';
include './lib/template.php';

$PV = ['def' => '', 'def_path' => ''];

if (@$_GET['f']) {

    $PV['def'] = $_GET['f'];
    $PV['def_path'] = "data/$PV[def]/form.php";

    if (is_file($PV['def_path'])) {

        include $PV['def_path'];

    } else {

        http_response_code(400);
        exit();
    }


} else {
    // exit
    http_response_code(400);
    exit();
}


$T = new Template('./template/form.html');

// Params
$T->AddParam('greet', 'Form Booking v7'); // title
$T->AddParam('form_fields', $form['fields']);
$T->AddParam('def', $PV['def']);
$T->EchoOutput();

