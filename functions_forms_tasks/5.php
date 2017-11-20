<?php
/*5. Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.
  Директория и искомое слово задаются как параметры функции.*/
//Description
//Выбрана папка под именем "9" в которой находится 9е задание.
function findDir ($dir, $findString){
    $array = array_slice(scandir($dir),2);

    for($i = 0; $i < count($array)-1; $i++){
        $string = file_get_contents($dir."/".$array[$i]);
        $result = strpos($string,$findString);
        if($result !==false){
            echo "Строка ".$findString." найдена в файле  ".$array[$i];
        }
    }

}
$dir = "9";
$findString ='style';
findDir($dir,$findString);

