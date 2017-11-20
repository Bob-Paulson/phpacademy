<?php
/* Smarty version 3.1.30, created on 2017-11-17 21:26:52
  from "Z:\XAMPP\htdocs\functions_forms_tasks\8\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0f460c5c4705_35293034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a73020813d707b63386ee9f08b9734bd275a99f' => 
    array (
      0 => 'Z:\\XAMPP\\htdocs\\functions_forms_tasks\\8\\templates\\index.tpl',
      1 => 1510950327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0f460c5c4705_35293034 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>8</title>
</head>
<body>
<p>Введите текст в форму</p>
<form action = "8.1.php"method="post">
    <textarea rows="10" cols="45" name="text" placeholder="Максимальная длина отзыва 30 символов." required style="resize:none" ></textarea>
    <input type="submit" value="Отправить">
</form>
</body>
</html><?php }
}
