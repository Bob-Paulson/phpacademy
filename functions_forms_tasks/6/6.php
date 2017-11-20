<?php
/*6. Создать страницу, на которой можно загрузить несколько фотографий в галерею.
Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы */

$uploads_dir = 'gallery/';

if(!isset($_FILES['foto']['tmp_name']) || empty($_FILES['foto']['tmp_name'][0])) {
    die("File was not send!.Renew page!");
}


for($i = 0;$i < count($_FILES['foto']['name']); $i++){
    move_uploaded_file($_FILES['foto']['tmp_name'][$i],$uploads_dir.$_FILES['foto']['name'][$i]);
}

echo "Файлы успешно сохранениы в папку gallery <br>";
