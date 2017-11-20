<?php
/* Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
Все добавленные комментарии выводятся над текстовым полем.*/
require("../../libs/Smarty.class.php");

$smarty = new Smarty();
$smarty->setTemplateDir('templates');


$file = file_get_contents("book.txt");
echo "<hr>" . $file . "<hr>";

$smarty->display('index.tpl');
