<?php
//Дано два числа 42 и 55 определите при помощи тернарной операции какое число больше.
print "\n ----Task1---------\n";
echo (55>42)?55:42;

//Используй вместо статических чисел функцию rand() для задачи (1);
//Пример я ограничил набор случайных чисел от 5 до 15 echo rand(5, 15);

print "\n ----Task2---------\n";
$a=rand(1,5);
$b=rand(1,15);
echo "first number - $a, second number - $b\n";
$res = ($a>$b)?"number $a bigger than $b":"second number is bigger - $b > $a";
echo $res."\n";

//Сокращение Имени и Отчества. Возьмите за основу свою ФИО. У вас будет 3 переменные. (Ф.И.О.) Ваша программа должна
// сократить Имя и Отчество. вот пример:
//(Иванов Иван Иванович) => (Иванов И. И.)
print "\n ----Task3---------\n";
$firstName = "Anton";
$secondName ="Serbin";
$fathersName = "Anatoliyevich";
echo $secondName." ".$firstName[0].". ".$fathersName[0].".\n";


//Вам нужно разработать программу, которая считала бы количество вхождений какой-нибудь выбранной вами цифры в
// выбранном вами числе. Например: цифра 7 в числе 123456789 встречается 1 раза (ограничите себя функцией
// rand(1, 99999) – это ваше случайное число) используй функцию substr_count()
print "\n ----Task4---------\n";
$randNumberString = rand(1, 99999);
$randNumber = rand(0,9);
$res = substr_count($randNumberString,$randNumber);
echo "First number - $randNumberString, requested number - $randNumber, this number used - $res times \n";

//Переменные:
//Создайте переменную $a и присвойте ей значение 3. Выведите значение этой переменной на экран.

print "\n ----Task5---------\n";
$a=3;
echo 'Number 3: '.$a."\n";

//Создайте переменные $a=10 и $b=2. Выведите на экран их сумму, разность, произведение и частное (результат деления).
print "\n ----Task6---------\n";
$a=10; $b=2;
echo "Sum: $a + $b = ".($a+$b)."\n";
echo "Delta: $a - $b =". ($a-$b)." \n";
echo "Multiply: $a * $b =". ($a*$b)." \n";
echo "Quotient: $a % $b =". ($a%$b)." \n";

//Создайте переменные $c=15 и $d=2. Просуммируйте их, а результат присвойте переменной $result. Выведите на экран
// значение переменной $result.
print "\n ----Task6---------\n";
$c=15; $d=2;
$result = $c+$d;
print 'Sum of '.$c.'+'.$d.'='.$result."\n";

//Создайте переменные $a=10, $b=2 и $c=5. Выведите на экран их сумму.
print "\n ----Task7---------\n";
$a=10; $b=2; $c=5;
echo "Sum of $a + $b + $c = ".($a+$b+$c);

//Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и результат присвойте переменной $c.
// Затем создайте переменную $d, присвойте ей значение
//Сложите переменные $c и $d, а результат запишите в переменную $result. Выведите на экран значение переменной $result.
print "\n ----Task8---------\n";
$a=17;$b=10;
$c=$a-$b;
$d=$c;
$result = $c + $d;
print "variables: $a, $b, $c, $d, result = ($a-$b)*2= $result";

//Строки:
//Создайте переменную $text и присвойте ей значение 'Привет, Мир!'. Выведите значение этой переменной на экран.
print "\n ----Task9---------\n";
$text = 'Привет, Мир!';
echo $text;

//Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих переменных и операции сложения строк
// выведите на экран фразу 'Привет, Мир!'.
print "\n ----Task10---------\n";
$text1='Привет, '; $text2='Мир!';
echo $text1.$text2;

//Напишите скрипт, который считает количество секунд в часе, сутках, неделе, месяце из 30 дней.
print "\n ----Task10---------\n";
    $secInMuntes = 60;
    $minInHours = 60;
    $hoursInDay = 24;
    $daysInWeek = 7;
    $daysInMonth = 30;
echo "Sec in one hour = ".$secInMuntes*$minInHours."\n";
echo "Sec in one day = ".$secInMuntes*$minInHours*$hoursInDay."\n";
echo "Sec in one week = ".$secInMuntes*$minInHours*$hoursInDay*$daysInWeek."\n";
echo "Sec in one month(30days) = ".$secInMuntes*$minInHours*$hoursInDay*$daysInMonth."\n";

//Переделайте приведенный код так, чтобы в нем использовались операции +=, -=, *=, /=, ++, --.
// Количество строк кода при этом не должно измениться! Код для переделки:
//<?php
//$var = 1;
//$var = $var + 12;
//$var = $var - 14;
//$var = $var * 5;
//$var = $var / 7;
//$var = $var + 1;
//$var = $var - 1;
//echo $var;
print "\n ----Task11---------\n";

$var = 1;
$var +=  12;
$var -=  14;
$var *= 5;
$var /= 7;
$var ++;
$var --;
echo $var;

?>