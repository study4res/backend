<?php

echo "Hello world!";

 
// - тег не закривати, якщо в файлі крім пхп нічого немає

// в будь яку змінну можна присвоювати любі значення

/* 
	$ - оголошення змінної
	psr2 - стандарт кода по камел-кейс
	кастування типів - стаття на пхп.нет
*/

//$myArray = [];

//$someTestVariable = "help";
//$var_dump($someTestVariable);

error_reporting(E_ALL); //всі помилки відображати, але ніби треба підключити дебаг
echo "<br>";
$test = 15;
echo $test, "<br>";
$test2 = &$test;
$test2 = $test2 + 1;
echo $test, "<br>", $test2, "<br>";

var_dump($test);
echo "<br>";

//phpinfo();

$q = 't';
$t = 'r';
$r = 's';
var_dump($$$q);  // перехід по змінним, підставляючи змінні (динамічна змінна = змінна змінна)

//PHP_EOL - це для термінала перенесення строки


echo "some string", '1', "second string", '<br>';
print('other string'); // уточнити що робить принт ??виводить значення, але яке?? (див відео)

// '' - одинарні лапки, якщо простий рядок, то вони будуть швидше оброблятись
// "" - працюють так саме, але розуміють html конструкції, в них можна виводити змінні

//heredoc and navdoc 

//треба запушить і посилання на гіт хаб
