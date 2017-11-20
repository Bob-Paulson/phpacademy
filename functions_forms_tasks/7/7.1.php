<?php
include '7.php';

if(!isset($_POST['text'])){
    die("Текст не был отправлен через форму");
}

$text = $_POST['text']."<br>";


$handle = fopen("book.txt",'a+');
fwrite($handle,$text);
fclose($handle);


$url = 'http://localhost/functions_forms_tasks/7/7.php';
header("Location: $url");