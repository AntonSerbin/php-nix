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
echo $name. "\n";
print "$name". "\n";
print_r($name);
echo "\n---------------\n";

$date = 100500;
echo $date. "\n";
print "$date\n";
print_r($date);
echo "\n---------------\n";


$dataPi=M_PI;
echo $dataPi. "\n";
print $dataPi."\n";
print_r($dataPi);
echo "\n---------------\n";

$names1=['alex', 'vova', 'tolya'];
$names2=['alex', 'vova', 'tolya', ['kostya', 'olya']];
$names3=['alex', 'vova', 'tolya', ['kostya', 'olya'], ['gosha', 'mila']];
$names4=[['alex', 'vova', 'tolya'], ['kostya', 'olya'], ['gosha', 'mila']];
for ($i = 1; $i <= 4; $i++) {
//    echo "\n" .${"names".$i}. "\n";
//    print ${"names".$i}. "\n";
    print_r(${"names".$i});
};
?>
