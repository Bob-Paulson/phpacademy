<?php
/* Smarty version 3.1.30, created on 2017-10-29 01:27:53
  from "Z:\XAMPP\htdocs\functions_forms_tasks\3\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f512793b60e9_29110076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d4d011383303964569d5d0d8ce466bbc5995ca3' => 
    array (
      0 => 'Z:\\XAMPP\\htdocs\\functions_forms_tasks\\3\\templates\\index.tpl',
      1 => 1509233210,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f512793b60e9_29110076 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPEhtml>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <form method="POST" action="../3/3.1.php">
        <h3>Задайте длину слов, которые Вы хотите удалить из файла</h3>
        <input type="number" name="count" required placeholder="Введите число">
        <input type="submit" value="Отправить">
    </form>
</body>
</html><?php }
}
