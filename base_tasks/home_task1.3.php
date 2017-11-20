<?php 

/*16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if выведите на экран столбец элементов массива, как показано на картинке.
1, 2, 3
4, 5, 6
7, 8, 9 */
echo "Task 16.<br /><br />";

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach ($arr as $key => $value){
	echo "$value ";
	if ($value % 3 == 0){
		echo "<br />";
	}

}

echo "<br /><br />";
//17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущиймесяц выведите жирным. Текущий месяц должен храниться в переменной $month.
echo "Task 17.<br /><br />";

$month ='september';
$ar = ['january','february','march','april','may','june','july','augest','september','october','november','december',];

echo"<ul type=\"square\">";
foreach ($ar as $key => $value){
		if($value == $month){
			echo"<li><b>$value</b></li>"; //Подскажите вот тут методом тыка!! понял что нужно ставить  ещё  один </ul> иначе всё сдвигается.
			continue;
		}
		echo"<li>$value</li>";
}
echo"</ul>";

echo"<br /><br />";
//18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,выходные дни следует вывести жирным.
echo"Task 18.<br /><br />";

$array = ['monday','tuesday','wednesday','thursday','friday','saturday','sunday'];
	echo "<ul type=\"square\">";
foreach($array as $key=>$value){
	if($value == "saturday" or $value == "sunday"){
			echo "<li><b>$value</b></li>"; 
			continue;
		}
		echo "<li>$value</li>";
	
}
echo "</ul>";

echo"<br /><br />";
//<p>19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.</p>
echo"Task19. <br /><br />";

$day = 'monday';
$arrayWeek = ['monday','tuesday','wednesday','thursday','friday','saturday','sunday'];
		echo "<ul type=\"cercle\">";
foreach ($arrayWeek as $key => $value) {
		if($value == $day){
			echo "<li><i>$value</i></li>";
			continue;
		}
		echo "<li>$value</li>";
}
echo "</ul>";

echo "<br /><br />";
/*20.Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20 рядов, а не 5.<br><br>
x<br>
xx<br>
xxx<br>
xxxx<br>
xxxxx<br>*/
echo "Task 20.<br /><br />";

for($i = 0; $i <= 20; $i++){
	for($j = 0; $j <= $i; $j++){
		echo "*";
	}
		echo "<br />";
}

echo "<br /><br />";
/*<p>21. Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5.
1<br>
22<br>
333<br>
4444<br>
55555</p>*/
echo "Task 21.<br /><br />";

for($i = 1; $i < 10; $i++){
	for($j = 1; $j <= $i; $j++){
		echo "$i";
	}
	echo "<br />";
}