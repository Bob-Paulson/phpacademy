 <form action='2.php' method='POST'>
 <textarea name="words" rows="5" cols="35" style = "resize:none" required placeholder="Введите слова через пробел"></textarea>
 <input type="submit" value="OТПРАВИТЬ">
 <br>

<?php
header('Content-Type: text/html; charset=utf-8');
/*Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции*/

//if we get less then 3 words -> exit, another -> we calculate the length of words

 function check ($string){
    $alphabet = "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя";
	if(str_word_count($string,0,$alphabet) < 3){
		return true;
	}


	//!!!!!!Вот тут внимание, ф-я str_word_count не пашет с кириллицей, в инете нахоботил вот такой костылище...= ( но оно работает!! Храни Бог документацию!
    //make array from string from $_POST

     $array = str_word_count($string,1,$alphabet);


    //calculate the lenght of words in array and push result in a different array $res

     $res =[];
	foreach ($array as $value) {
		$res[$value] = strlen($value);
	}

    //takes 3 biggest words from array $res, and push it to array $keys

     arsort($res);
	$keys = array_keys(array_slice($res,0,3));


    //output our words;

     echo "<br>TOP 3 your biggest words :".implode(' ',$keys);
	 return 0;
}

//checking $_POST on empty and count words less then 3

if(empty($_POST["words"]) || check(trim($_POST["words"]))){
	die("Enter minimum 3 words pLeeeeeese!");
}

