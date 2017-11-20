<?php
/* Smarty version 3.1.30, created on 2017-11-16 01:44:18
  from "Z:\XAMPP\htdocs\functions_forms_tasks\7\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0cdf626587f4_85301523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f11093aa91e9008530d259dff1ede7d30c39412f' => 
    array (
      0 => 'Z:\\XAMPP\\htdocs\\functions_forms_tasks\\7\\templates\\index.tpl',
      1 => 1510792640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0cdf626587f4_85301523 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>7</title>
</head>
<body>
<p>Введите текст в форму</p>
<form action = "7.1.php"method="post">
    <textarea rows="10" cols="45" name="text" placeholder="Максимальная длина отзыва 30 символов." required style="resize:none" ></textarea>
    <input type="submit" value="Отправить">
</form>
</body>
</html><?php }
}
