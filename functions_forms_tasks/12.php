<?php
/*12. Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что предложения идут в обратном порядке.
Пример:
Входная строка:
'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';
Строка, возвращенная функцией :
'А там хоть трава не расти. А ларчик просто открывался. А король-то — голый. А вы друзья как ни садитесь, все в музыканты не годитесь. А воз и ныне там.А Васька слушает да ест.'
*/
$string = "А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти...";

$array = explode(".",$string);


//Checking if in the end of out string exist pointers.Then we delete them because pointers create an empty value in array
//because we used pointers like delimiter

while(empty($array[sizeof($array)-1])){
    unset($array[sizeof($array)-1]);
}


//Delete the spaces if they exist

foreach ($array as &$key) {
    $key = trim($key);
}


//Adding the point in the last element in our array

$array = array_reverse($array);
$array[sizeof($array)-1] .=".";


$newString = implode(". ",$array);
print($newString);