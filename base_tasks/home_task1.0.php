<?php
//1. Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик
echo"Task 1.<br /><br />";

$arr = ['html','css','php','js','jq'];
foreach($arr as $key=>$value){
	echo $value,"<br/>";
}

echo"<br /><br />";
//2. Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.
echo"Task 2.<br /><br />";

$mas = [1,20,15,17,24,35];
$result = 0;
foreach($mas as $key => $value){
	$result += $value;
}
	echo $result,"<br/>";

echo"<br /><br />";
//3.Дан массив с элементами 26, 17, 136, 12, 79, 15. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.
echo"Task 3.<br /><br />";

$scope = [26,17,136,12,79,15];
foreach($scope as $key => $value){
	$result += $value * $value;
}
	echo $result,"<br/>";

echo"<br /><br />";
//4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго — столбец элементов. $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
echo"Task 4.<br /><br />";

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
echo"<table border=1px><th>keys</th>";
foreach($arr as $key => $value){
	echo "<tr><td>$key</td></tr>";
}
echo"</table>";
echo "<br />";
echo"<table border=1px><th>values</th>";
foreach($arr as $key => $value){
	echo "<tr><td>$value</td></tr>";
}
echo"</table>";

echo"<br /><br />";
//5. Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'. С помощьюцикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200 долларов.'.
echo"Task 5.<br /><br />";

$mas = ['Коля' => 200, 'Вася' => 300, 'Петя' => 400 ];
echo"<table border=1px><th>Name</th><th>Salary</th>";
foreach($mas as $key => $value){
	echo "<tr><td>$key</td><td>зарплата $value долларов</td></tr>";
}
echo"</table>";