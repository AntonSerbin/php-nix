<?php
//все переменные выводим через echo/print/print_r
//создать переменную строку ваше имя и вывести на экран
//создать переменную возраст и вывести на экран
//создать переменную и присвоить ей число pi вывести переменную на экран
//создать переменную массив [‘alex’, ‘vova’, ‘tolya’] вести ее на экран
//создать переменную массив [‘alex’, ‘vova’, ‘tolya’, [‘kostya’, ‘olya’]] вести ее на экран
//создать переменную массив [‘alex’, ‘vova’, ‘tolya’, [‘kostya’, ‘olya’, [‘gosha’, mila]]] вести ее на экран
//создать переменную массив [[‘alex’, ‘vova’, ‘tolya’], [‘kostya’, ‘olya’], [‘gosha’, mila]] вести ее на экран


$name="Anton Serbin";
print "$name". "\n";
$date = 100500;
print "age=$date\n";
$dataPi=M_PI;
print $dataPi."\n";
$names1=['alex', 'vova', 'tolya'];
$names2=['alex', 'vova', 'tolya', ['kostya', 'olya']];
$names3=['alex', 'vova', 'tolya', ['kostya', 'olya'], ['gosha', 'mila']];
$names4=[['alex', 'vova', 'tolya'], ['kostya', 'olya'], ['gosha', 'mila']];
for ($i = 1; $i <= 4; $i++) print_r(${"names".$i});
?>
