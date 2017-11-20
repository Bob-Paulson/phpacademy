<?php

if(!isset($_POST['text'])||empty($_POST['text'])){
    die("Текст не был введён через форму.Введите текст в форму кликнув на эту <a href = 10.html>ссылку<a>");

}


$array = explode(" ",trim($_POST['text']));
$result = array_fill_keys(array_unique($array),0);
$count = 0;


//Count unique elements;
foreach ($array as $value ){
    $result[$value]++;
    }
foreach ($result as $value) {
    if($value == 1){
        $count++;
    }
}

echo "Колличество уникальных слов в тексте - $count";