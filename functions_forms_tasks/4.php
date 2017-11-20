<?php
//4. Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.</p>
function path ($folder){

    //read the folder and delete "." and ".."
    $array = array_slice((scandir($folder)),2);

    foreach ($array as $value) {
        echo "$value <br>";
    }
}
$nameFolder = "3";
path("$nameFolder");
