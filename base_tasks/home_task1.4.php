<?php
/*22. Нарисуйте пирамиду, как показано на рисунке, воспользовавшись циклом for или while.<br><br>
xx<br>
xxxx<br>
xxxxxx<br>
xxxxxxxx<br>
xxxxxxxxxx*/
echo "Task 22.<br /><br />";
for($i = 0; $i <= 10; $i++){
	for($j =0; $j < $i; $j++){
		echo "*";
	}
echo"<br />";
}

echo "<br /><br />";
//<p>25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),найти максимальное и минимальное значение и поменять их местами.</p>
echo "Task 23.<br /><br />";
$arr = [];
for($i = 0; $i < 10; $i++){
$arr[] = rand(0,100);
}

print_r($arr);
echo "<br />";

$min = $arr[0];
$min_index = 0;
$max = $arr[0];
$max_index = 0;


for($i = 0; $i < count($arr); $i++){
	if($min > $arr[$i]){
		$min = $arr[$i];
		$min_index = $i;
	}
	if($max < $arr[$i]){
		$max = $arr[$i];
		$max_index = $i;
	}
}
$buf = $arr[$max_index];
$arr[$max_index] = $arr[$min_index];
$arr[$min_index] = $buf;

print_r($arr);

echo "<br /><br />";
//<p>26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы. 
//После вывести на экран элементы, которые больше ноля и у которых не парный индекс.</p>  ////!!!!!!!!!!Вот тут интересно не ошибка в задании? Дан массив от 1 до 100 и вычисляем произведение элементов к-е больше 0.
echo "Task 26.<br /><br />";

$mas =[];
for($i = 0; $i < 5; $i++){
	$mas[] = rand(1,100);
}

print_r($mas);
echo"<br />произведение тех элементов, которые больше ноля и у которых парные индексы :";

$sub_result = 1;
for($i = 0; $i < count($mas); $i++){
	if($mas[$i] > 0 && $i%2 == 0){
		$sub_result *= $mas[$i];
		
	}
}

echo $sub_result."<br />";

echo "элементы, которые больше ноля и у которых не парный индекс:";
foreach ($mas as $key => $value) {
	if($key > 0 && $key % 2 != 0){
		echo "--$value--";
	}
}

//28. Вывести таблицу умножения с помощью двух циклов for.</p> Таблица уже выведена в задании №13
