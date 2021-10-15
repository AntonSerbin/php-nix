<?php
print "\n ----------Task1-3-----------\n";

//Даны два числа. Найти их сумму и произведение.
//Даны два числа. Найдите сумму их квадратов.
//Даны три числа. Найдите их среднее арифметическое.

$a=2; $b=4;
echo "Numbers a= $a , b = $b \n";
echo "Sum and multiply: ".($a+$b)." ".($a*$b)."\n";
echo "Sum of their squares: ".(pow($a,2) + $b**2)."\n";
echo "Arithmetical mean: ".(($a+$b)/2)."\n";

print "\n ----------Task4-----------\n";

//Даны три числа x,y и z. Найдите (x+1)−2(z−2x+y)
$x=0;$y=1;$z=0;
echo "Numbers x= $x , y = $y , z = $z \n";
echo "(x+1)−2(z−2x+y)= ".(($x+1)-2*($z-2*$x+$y))."\n";

print "\n ----------Task5-----------\n";
//Дано натуральное числа. Найдите остатки от деления этих чисел на 3 и на 5. Дано число. Увеличьте его на 30%, на 120%.

$a = rand(1,20);
echo "remainder of division of $a by 3 is ".($a%3)."\n";
echo "remainder of division of $a by 5 is ".($a%5)."\n";
echo "increased number $a by 30% is ".($a*1.3)."\n";
echo "increased number $a by 120% is ".($a*2.2)."\n";

print "\n ----------Task6-----------\n";
//Дано два числа. Найдите сумму 40% от первого числа и 84% от второго числа.
// Дано трехзначное числа. Найдите сумму его цифр.
$a = rand(1,20); $b=rand (1,20);
echo "40% of number $a is ".($a*0.4)."\n";
echo "84% of number $b is ".($b*0.84)."\n";
echo "Their sum is ".(($a*0.4)+($b*0.84))."\n";

$number = rand(100,999);
$strFromNubmer = (string)$number;
$res = $strFromNubmer[0]+$strFromNubmer[1]+$strFromNubmer[2];
echo "Sum of all numbers in $number is $res \n";

print "\n ----------Task7-----------\n";
//Дано трехзначное числа. Поменяйте среднюю цифру на ноль. Найдите число, полученное выписыванием в обратном порядке
// цифр данного трехзначного натурального числа.
echo "Number $number with 0 in the center - $strFromNubmer[0]0$strFromNubmer[2] \n";
echo "Sum of all numbers in this number is ".($strFromNubmer[0]+$strFromNubmer[2])." \n";

print "\n ----------Task8-----------\n";

//задача деление по модулю. определить какое число четное или не четное. Реализовать через тернарную операцию.
$a = rand(-10,1); $b = rand(-10,1);
echo "Abs divide $a / $b = ".(abs($a/$b))."\n";
$x=rand(1,20);
echo ($x%2==1)?"the $x is odd": "the $x is even number";
