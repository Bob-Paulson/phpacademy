<?php
include '8.php';

if(!isset($_POST['text'])){
    die("Текст не был отправлен через форму");
}

$text = (trim($_POST['text']))."\n";
$text = strip_tags($text,'<b></b>');

//our forbidden words
$forbiddenWords =["hi","урод","мудило"];

$lengthForbiddenWords = count($forbiddenWords);
$forbiddenWordFound = false;

for($i = 0; $i < $lengthForbiddenWords; $i++) {

       $result = strpos(mb_strtolower($text), $forbiddenWords[$i]);

    if ($result !== false) {
        $forbiddenWordFound = true;
        $url = 'http://localhost/functions_forms_tasks/8/error/error.html';
        header("Location: $url");

    }
}

if ($forbiddenWordFound == false) {
    $handle = fopen("book.txt", 'a+');
    fwrite($handle, $text);
    fclose($handle);
    $url = 'http://localhost/functions_forms_tasks/8/8.php';
    header("Location: $url");
}
