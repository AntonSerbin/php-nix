<?php

function dd($arg)
{
    echo "<pre>";
    print_r($arg);
    echo "</pre>";
}

//1. Найти минимальное и максимальное среди 3 чисел
echo "<--------------------1--------------------><br>";

$calcAverage = function (...$arg) {
    $i = 0;
    $sum = 0;
    while ($arg[$i]) {
        $sum += $arg[$i];
        $i++;
    }
    return $sum / $i;
};

$calcAverage2 = fn($a, $b, $c) => ($a + $b + $c) / 3;

dd($calcAverage(1, 2, 3));
dd($calcAverage2(3, 4, 5));


//2. Найти площадь
echo "<--------------------2--------------------><br>";

$calcSquare = function (float $a, float $b): float {
    return $a * $b;
};

$calcSquare2 = fn(float $a, float $b): float => $a * $b;

dd($calcSquare(2, 3));
dd($calcSquare2(3, 4));

//3. Теорема Пифагора
echo "<--------------------3--------------------><br>";

$findGipot = function (float $a, float $b): float {
    return sqrt($a * $a + $b ** 2);
};
$findGipot2 = fn(float $a, float $b): float => $a * $a + $b ** 2;

dd($findGipot(2, 3));
dd($findGipot2(3, 4));

//4. Найти периметр
echo "<--------------------4--------------------><br>";

$calcPerim = function (...$arg) {
    $sum = 0;
    $i = 0;
    while ($arg[$i]) {
        $sum += $arg[$i];
        $i++;
    }
    return $sum;
};
$calcPerim2 = fn($a, $b, $c) => $a + $b + $c;
dd($calcPerim(1, 2, 3, 4, 5));
dd($calcPerim2(1, 2, 3));

//5. Найти дискриминант
echo "<--------------------5--------------------><br>";

$calcDiscr = function (float $a, float $b, float $c): float {
    return $b * $b - 4 * $a * $c;
};
$calcDiscr2 = fn($a, $b, $c) => $b ** 2 - 4 * $a * $c;

dd($calcDiscr(1, 2, 3));
dd($calcDiscr2 (2, 3, 4));

echo "<-------------------6+7-------------------><br>";
//5 Создать только четные числа до 100
//6 Создать нечетные числа до 100
$makeArrEven = function (int $num, string $evenOrOdd = "even") {
    $newArr = [];
    for ($i = 0; $i < $num; $i++) {
        if ($i & 1 && $evenOrOdd == "even") $newArr[] = $i;
        if (!($i & 1) && $evenOrOdd == "odd") $newArr[] = $i;
    }
    return $newArr;
};

dd($makeArrEven(10, "even"));
dd($makeArrEven(10, "odd"));


$makeArrEvenStrel = fn($num, $type) => $makeArrEven($num, $type);
dd($makeArrEvenStrel (10, "even"));
dd($makeArrEvenStrel (10, "odd"));

echo "<-------------------8--------------------><br>";
//Определите, есть ли в массиве повторяющиеся элементы.

$arr = [13, 5, 2, 2, 3];
$checkEqual = function (array $arr): string {
    foreach ($arr as $key => $item) {
        foreach ($arr as $key2 => $item2) {
            if ($item2 == $item && $key != $key2) {
                return "Есть повторяющиеся элементы в массиве <br>";
            }
        };
    };
    return "Нет поторящихся элементов в массиве <br>";
};
dd($arr);
echo "function exponent:  ".$checkEqual ($arr);

$checkEqualArrow = function (array $arr) {
    $findEqual = fn($key, $item, $key2, $item2) => ($item2 == $item && $key != $key2) ? true : false;
    foreach ($arr as $key => $item) {
        foreach ($arr as $key2 => $item2) {
            $result = $findEqual ($key, $item, $key2, $item2);
            if ($result) {
                return "Есть повторяющиеся элементы в массиве <br>";
            }
        }
    };
    return "Нет поторящихся элементов в массиве <br>";
};

echo "function arrow:  ".$checkEqualArrow($arr);

echo "<-------------------9--------------------><br>";
//Сортировка из прошлого задания

$sortArray = function (array $arr, string $direction):array {
    switch ($direction) {
        case "AZ":
            sort($arr);
            break;
        case "ZA":
            rsort($arr);
            break;
    };
    return $arr;
};
dd($sortArray($arr, "AZ"));

$sortArrayAZ = fn(&$array1) => sort($array1);
$sortArrayZA = fn(&$array1) => rsort($array1);

$sortArrayZA($arr);
dd($arr);