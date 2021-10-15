<?php

print "\n ----------Task1-----------\n";
//Создайте три переменные - час, минута, секунда. С их помощью выведите текущее время в формате 'час:минута:секунда'.
$sec= rand (0,60);
$min = rand (0,60);
$hour = rand (0, 23);
echo "$hour : $min : $sec";


print "\n ----------Task2-----------\n";
//Переделайте этот код так, чтобы в нем использовалась операция .=. Количество строк кода при этом не должно измениться!
//$text = 'Я';
//$text = $text .' хочу' ;
//$text = $text .' знать' ;
//$text = $text .' PHP!' ;
//echo $text;
$text = 'Я';
$text .= ' хочу' ;
$text .= ' знать' ;
$text .= ' PHP!' ;
echo $text;

print "\n ----------Task3-----------\n";
//Задана переменная $foo = 'bar'; Создать переменную bar, в которой будет храниться число 10. Вывести число 10,
// используя только переменную $foo
$foo = 'bar';
$bar = 10;
echo $$foo;

print "\n ----------Task4-----------\n";
//Какой будет результат если
//$a = 2; $b = 4;
//echo $a++ + $b;
//echo $a + ++$b;
//echo ++$a + $b++;
$a = 2; $b = 4;
echo "$a++ + $b = ". ($a++ + $b) ."\n"; //6
$a = 2; $b = 4;
echo "$a + ++$b = ".($a + ++$b) ."\n";//7
$a = 2; $b = 4;
echo "++$a + $b++ = ".(++$a + $b++) ."\n"; //7
//sorry for such solution but this one is a nature one  :-)


print "\n ----------Task5-----------\n";
//Функции для проверки типов данных. Определите что у вас в переменной. Решение должно быть универсальным.
// Используйте тернарную операцию.
//Используй все эти функции:
//isset()
//gettype()
//is_null()
//empty()
//is_integer($a)
//is_double ($a)
//is_string ($a)
//is_numeric($a)
//is_bool($a)
//is_scalar($a)
//is_null($a)
//is_array($a)
//is_object($a)
//
//пример
//$a = ‘asd’;
//echo isset($a) ? ‘переменная существует’ : ‘переменная не существует’;
//пример
//$a = ‘asd’;
//echo is_string($a) ? ‘переменная строка’ : ‘переменная не строка’;
unset($a);
$a=NULL;
echo isset($a) ? "the variable is SET \n" : "the variable has NOT BEEN DEFINED \n";
echo "the type of variable is ".mb_strtoupper(gettype($a))."\n";
echo is_null($a) ?  "the variable is the NULL \n":"the variable is not the NULL \n"; // if ($a===NULL) is faster than is_null()
echo empty($a) ? "the variable is EMPTY\n": "the variable HAS some DATA\n";
echo is_integer($a) ? "the variable is an INTEGER \n":"the variable is not an INTEGER \n";
echo is_double($a) ? "the variable is a DOUBLE\n":"the variable is not a DOUBLE\n";
echo is_string($a) ? "the variable is a STRING \n":"the variable is not a STRING \n";
echo is_numeric($a) ? "the variable is NUMERIC \n":"the variable is not NUMERIC \n";
echo is_bool($a) ? "it is BOOLEAN variable \n":"it is not BOOLEAN variable\n";
echo is_scalar($a) ? "it is one of: int, float, string or bool.\n":"it is one of: array, object, resource, null \n";
echo is_array($a) ? "the variable is an ARRAY\n":"the variable is not an ARRAY\n";
echo is_object($a) ? "the variable is a OBJECT (class/function)\n":"the variable is not an OBJECT\n";
