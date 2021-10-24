<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre>
<?php
echo "<------------Task 1 --------------><br>";
echo "1) Написать программу, которая выводит простые числа, т.е. делящиеся без oстатка только на себя и на 1.";

$arrRes = [1, 2];
$maxNumber = 12;
$i = 3;

for ($i = 3; $i <= $maxNumber; $i++) {
    for ($count = 0; $arrRes[$count]; $count++) {/*count array*/
    };
    $addToArr = true;
    for ($k = 1; $k < $count; $k++) {
        if ($i % $arrRes[$k] == 0) {
            $addToArr = false;
            break;
        };
    }
    if ($addToArr) $arrRes[] = $i;
}
$arrRes = [1, 2];
$i = 3;
while ($i < $maxNumber) {
    $count = 0;
    while ($arrRes[$count]) {
        $count++;
    };
    $addToArr = true;
    $k = 2;
    while ($k < $count) {
        if ($i % $arrRes[$k] == 0) {
            $addToArr = false;
            break;
        };
        $k++;
    }
    if ($addToArr) {
        $arrRes[] = $i;
    }

    $i++;
}
$arrRes = [1, 2];
$i = 3;
do {
    $count = 0;
    do {
        $count++;
    } while ($arrRes[$count]);
    $addToArr = true;
    $k = 1;
    do {
        if ($i % $arrRes[$k] == 0) {
            $addToArr = false;
            break;
        };
        $k++;
    } while ($k < $count);
    if ($addToArr) {
        $arrRes[] = $i;
    }
    $i++;
} while ($i < $maxNumber);
$arrRes = [1, 2];
for ($i = 3; $i <= $maxNumber; $i++) {
    $count = 0;
    foreach ($arrRes as $item) {
        if ($item) {
            $count++;
        }
    }
    $addToArr = true;
    for ($k = 1; $k < $count; $k++) {
        if ($i % $arrRes[$k] == 0) {
            $addToArr = false;
            break;
        };
    }
    if ($addToArr) $arrRes[] = $i;
}

echo "<br> Max number $maxNumber, result:";
print_r($arrRes);
?>
    <?php
    echo "<br><------------Task 2 --------------><br>";
    echo "2) Сгенерируйте 100 раз новое число и выведите на экран количество четных чисел из этих 100.";
    $res = 0;
    for ($i = 1; $i <= 100; $i++) {
        if (rand(1, 100) % 2) {
            $res++;
        }
    };
    $res = 0;
    $i = 0;
    while ($i <= 100) {
        if (rand(1, 100) % 2) {
            $res++;
        }
        $i++;
    }
    $res = 0;
    $i = 0;
    do {
        if (rand(1, 100) % 2) {
            $res++;
        }
        $i++;
    } while ($i <= 100);
    //    <-------------------->
    $newArr = [];
    $res = 0;
    for ($i = 0; $i <= 100; $i++) {
        $newArr[] = rand(1, 2);
    }
    foreach ($newArr as $item) {
        $res += ($item == 1) ? 1 : 0;
    }
    echo "<br>Из 100 случайных чисел четных - $res<br>";
    ?>
    <?php
    echo "<br><------------Task 3 --------------><br>";
    echo "3) Сгенерируйте 100 раз число от 1 до 5 и выведите на экран сколько раз сгенерировались эти 
числа (1, 2, 3, 4 и 5).<br>";
    $arrRes = [];
    for ($i = 1; $i <= 100; $i++) {
        $number = rand(1, 5);
        $arrRes[$number]++;
    };
    $i = 0;
    $arrRes = [];
    while ($i <= 100) {
        $number = rand(1, 5);
        $arrRes[$number]++;
        $i++;
    }
    $i = 0;
    $arrRes = [];
    do {
        $number = rand(1, 5);
        $arrRes[$number]++;
        $i++;
    } while ($i <= 100);
    //    <-------------------->
    $newArr = [];
    $arrRes = [];
    $res = 0;
    for ($i = 1; $i <= 100; $i++) {
        $newArr[] = rand(1, 5);
    }
    foreach ($newArr as $item) {
        $arrRes[$item]++;
    }

    echo "Числа от 1 до 5 генерировались следующим образом:";
    print_r($arrRes);
    ?>
    <?php
    echo "<br><------------Task 4 --------------><br>";
    echo "4) Используя условия и циклы сделать таблицу в 5 колонок и 3 строки (5x3), отметить разными цветами часть ячеек." ?>
<style>
    table, td {
        border: 2px solid black;
    }
</style>
<table>
    <?php for ($row = 1; $row <= 3; $row++): ?>
        <tr>
            <?php for ($col = 1; $col <= 5; $col++): ?>
                <?php $randColor = "rgb(" . rand(0, 255) . "," . rand(0, 255) . "," . rand(0, 255) . ")"; ?>
                <td style="background-color:<?= $randColor ?>"><?= "$col" . "$row" ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
<table>
    <?php
    $row = 1;
    while ($row <= 3): ?>
        <tr>
            <?php
            $col = 1;
            while ($col <= 5): ?>
                <?php $randColor = "rgb(" . rand(0, 255) . "," . rand(0, 255) . "," . rand(0, 255) . ")"; ?>
                <td style="background-color:<?= $randColor ?>"><?= "$col" . "$row" ?></td>
                <?php
                $col++;
            endwhile;
            ?>
        </tr>
        <?php
        $row++;
    endwhile; ?>
</table>
<table>
    <?php
    $row = 1;
    do { ?>
        <tr>
            <?php
            $col = 1;
            do { ?>
                <?php $randColor = "rgb(" . rand(0, 255) . "," . rand(0, 255) . "," . rand(0, 255) . ")"; ?>
                <td style="background-color:<?= $randColor ?>"><?= "$col" . "$row" ?></td>
                <?php
                $col++;
            } while ($col <= 5);
            ?>
        </tr>
        <?php
        $row++;
    } while ($row <= 3); ?>
</table>
<table>
    <?php
    $arrRow = [1, 2, 3];
    $arrCol = [1, 2, 3, 4, 5];
    foreach ($arrRow as $row) { ?>
        <tr>
            <?php
            $col = 1;
            foreach ($arrCol as $col) { ?>
                <?php $randColor = "rgb(" . rand(0, 255) . "," . rand(0, 255) . "," . rand(0, 255) . ")"; ?>
                <td style="background-color:<?= $randColor ?>"><?= "$col" . "$row" ?></td>
                <?php
                $col++;
            };
            ?>
        </tr>
        <?php
    } ?>
</table>
<?php echo "<br><------------Task 1.1 --------------><br>";
echo "В переменной month лежит какое-то число из интервала от 1 до 12. Определите в какую пору года попадает этот месяц (зима, лето, весна, осень).<br>";
$month = rand(1, 12);
if ($month == 12 || $month == 1 || $month == 2) {
    echo "Выбран месяц $month, это зима";
} elseif ($month == 3 || $month == 4 || $month == 5) {
    echo "Выбран месяц $month, это весна";
} elseif ($month >= 6 && $month <= 8) {
    echo "Выбран месяц $month, это лето";
} else echo "Выбран месяц $month, это осень";
?>

    <?php echo "<br><------------Task 1.2 --------------><br>";
    echo "Дана строка, состоящая из символов, например, 'abcde'. Проверьте, что первым символом этой строки является 
буква 'a'. Если это так - выведите 'да', в противном случае выведите 'нет'.<br>";
    $str = "abcde";
    if ($str[0] == "a") {
        echo "<br>Первая буква строки $str - действительо 'а'";
    }
    ?>

    <?php echo "<br><------------Task 1.3 --------------><br>";
    echo "Дана строка с цифрами, например, '12345'. Проверьте, что первым символом этой строки является цифра 1, 2 или 3.
Если это так - выведите 'да', в противном случае выведите 'нет'.<br>";
    $str = "12345";
    if ($str[0] == "1" || $str[0] == "2" || $str[0] == "3") {
        echo "<br>Первая буква строки $str - действительо или 1 или 2 или 3";
    }
    ?>


    <?php echo "<br><------------Task 1.4 --------------><br>";
    echo "Если переменная test равна true, то выведите 'Верно', иначе выведите 'Неверно'. 
Проверьте работу скрипта при test, равном true, false. Напишите два варианта скрипта - тернарка и if else.<br>";
    $test = rand(0, 1);
    echo ($test == true) ? "<br>Random - true" : "<br>Random - false";
    ?>

    <?php echo "<br><------------Task 1.5 --------------><br>";
    echo "Дано Два массива рус и англ ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс']
Если переменная lang = ru вывести массив на русском языке, а если en то вывести на английском языке. 
Сделат через if else и через тернарку.<br><br>";
    $arrRus = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
    $arrEng = ['mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun'];
    $random = rand(0, 1);
    $arrLanguage = ["ru", "en"];
    print_r(($arrLanguage[$random] == "ru") ? $arrRus : $arrEng);
    ?>
    <?php echo "<br><------------Task 1.6 --------------><br>";
    echo "В переменной cloсk лежит число от 0 до 59 – это минуты. Определите в какую четверть часа попадает это число 
(в первую, вторую, третью или четвертую). тернарка и if else. <br><br>";
    $clock = rand(0, 59);
    echo "Показание минуты $clock попадает в ";
    echo $clock <= 15 ? "первая четверть" :
        ($clock <= 30 ? "вторая четверть" :
            ($clock <= 45 ? "третья четверть" : "четвертая четверть")
        );
    // "Вложенные тернарные операторы взрывают мозг, поэтому их лучше никогда не использовать."
    //https://www.programulin.ru/ternarnyj-operator-v-php :-)
    echo "<br>";
    $clock = rand(0, 59);
    echo "Показание минуты $clock попадает в ";
    if ($clock <= 15) {
        echo "первая четверть";
    } elseif ($clock <= 30) {
        echo "вторая четверть";
    } elseif ($clock <= 45) {
        echo "третья четверть";
    } else {
        echo "четвертая четверть";
    }

    ?>
</pre>
</body>
</html>
