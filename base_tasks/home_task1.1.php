<?php
//6 Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские — в массив $ru.$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'); $en = array('green', 'red','blue'); $ru = array('зеленый', 'красный', 'голубой');
echo "Task 6.<br /><br />";
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = [];
$ru = [];
foreach($arr as $key => $value){
	$en [] = $key;
	$ru [] = $value;
}
print_r($en);
echo"<br />";
print_r($ru);

echo "<br /><br />";
//7. Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.
echo "Task 7.<br /><br />";

$arr =[2,5,9,15,0,4];
foreach($arr as $key => $value){
	if($value > 3 && $value < 10){
		echo $value,"  ";
	}
}

echo "<br /><br />";
//8.Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку '­1­2­3­4­5­6­7­8­9­'.
echo "Task 8.<br /><br />";

$mas = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach($mas as $key => $value){
	echo"-$value";
}
echo"-";

echo "<br /><br />";
//Циклы while и for
//9 Выведите столбец чисел от 1 до 100.
echo "Task 9.<br /><br />";

echo "<table border=1px>";
	echo"<tr>";
		for($i = 1; $i <= 100; $i++){
			echo"<td>$i</td>";
				if($i == 50){
					echo "</tr><tr>";
				}
		}
		echo"</tr>";
		echo"</table>";

echo "<br /><br />";		
//10. Выведите столбец чисел от 11 до 33.
echo "Task 10.<br /><br />";

echo "<table border=1px>";
	echo"<tr>";
for($i = 11; $i <= 33; $i++)
{
	echo "<td>$i</td></tr>";
}

echo "</table>";
