<?php
//---------------Start file-------------------//


require("../../libs/Smarty.class.php");

$smarty = new Smarty();
$smarty->setTemplateDir('templates');

if($file = file_get_contents("file.txt")){
    echo "Файл есть.Содержмимое файла:<br><br><hr>".$file."<hr>";
}else{
    die("файла нет или он пуст.Укажите корректное имя файла или измените путь.");
}
$smarty->display('index.tpl');




