<form action="1.php" method="POST">
<textarea rows="10" cols="45" name="array1" style = "resize:none" placeholder="Введите слова через пробел"></textarea>
<br>
<textarea rows="10" cols="45" name="array2" style = "resize:none" placeholder="Введите слова через пробел"></textarea>
<input type=submit value="send">
</form>
<br>

<?php

/*Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.*/


if(empty($_POST["array1"])||empty($_POST["array2"])){
	die("Please fill the field with non-empty values!");
}

//function check the intersections in our arrays
function getCommonWord ($a, $b){
	return (array_intersect($a, $b));
}


$a = explode(" ",trim($_POST["array1"]));
$b = explode(" ",trim($_POST["array2"]));


//call getCommonWord func and output result
if($result = getCommonWord($a,$b)){
	echo "Массивы пересекаются в таких словах :";
	foreach (array_unique($result) as $value) {
		echo "$value ";	
	}
}else{
	echo "Массивы не пересекаются";
}






