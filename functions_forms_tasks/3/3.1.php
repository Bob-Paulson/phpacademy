<?php
/**
 * Accepting and processing data from Form -->index.tpl
 */
header('Content-Type: text/html; charset=utf-8');

if(!isset($_POST['count']) || !is_numeric ((int)$_POST['count']) || ($_POST['count'] <= 0)){
    die("Данные не были отправлены через форму.Либо не было отправлено положительное число больше 0.Обновите страницу и повторите ввод!");
}

$count = (int)$_POST['count'];
$file = trim(file_get_contents("file.txt"));
$array = explode(" ",$file);
$reNewArr = [];


// We compare length of every word in array with the length from  Form

foreach($array as $value){
    if ($count >= mb_strlen($value, 'utf-8')){
        $reNewArr[] = $value;
    }
}
file_put_contents("file.txt",implode(",",$reNewArr));
echo "Файл успешно обновлён, согласно Вашему вводу. Всего хорошего!";

$url = 'http://localhost/functions_forms_tasks/3/3.php';
header("Location: $url");
