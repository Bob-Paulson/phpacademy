<?php
require("../../libs/Smarty.class.php");

$smarty = new Smarty();
$smarty->setTemplateDir('templates');


$file = nl2br(file_get_contents("book.txt"));
echo "<hr>" . $file . "<hr>";


$smarty->display('index.tpl');