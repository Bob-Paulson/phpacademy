<?php
/* Smarty version 3.1.30, created on 2017-11-18 12:38:44
  from "Z:\XAMPP\htdocs\functions_forms_tasks\8\templates\error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a101bc4989ef5_12192748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51cff11ed7774a54053bfce9f6010dfa6cda3ca6' => 
    array (
      0 => 'Z:\\XAMPP\\htdocs\\functions_forms_tasks\\8\\templates\\error.tpl',
      1 => 1511004925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a101bc4989ef5_12192748 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>8</title>
</head>
<body>
<?php echo file_get_contents('../book.txt');?>

<hr>
<p><i>***= Не допустимый коментарий =***</i></p>
<p>!!Введите сообщение без не цензурной лексики!!</p>
<p>Введите текст в форму</p>
<form action = "../8.1.php"method="post">
    <textarea rows="10" cols="45" name="text" placeholder="Максимальная длина отзыва 30 символов." required style="resize:none" ></textarea>
    <input type="submit" value="Отправить">
</form>
</body>
</html>
<?php }
}
