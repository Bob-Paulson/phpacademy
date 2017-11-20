<?php
header('Content-Type: text/html; charset=utf-8');

if(!isset($_POST['text'])||(empty($_POST['text']))){
    die("Введите текст в форму на странице <a href =\"9.html\", пожалуйста");
}
$a = $_POST['text'];

function strrev_enc($str)
{
    $str = iconv('utf-8', 'windows-1251', $str);
    $str = strrev($str);
    $str = iconv('windows-1251', 'utf-8', $str);
    return $str;
}

$b = strrev_enc($a);
echo $b;
