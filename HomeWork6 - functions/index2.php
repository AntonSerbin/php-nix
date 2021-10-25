<?php
echo "<----------------1----------------><br>";
//1 Создать функцию по нахождению числа в степени

function calcPower($num, $power)
{
    return $num ** $power;
}

$a = rand(1, 5);
$b = rand(1, 5);

echo "$a в степени $b будет равно: " . calcPower($a, $b) . "<br>";
echo "<----------------2----------------><br>";
//2 написать функцию сортировки. Функция принимает массив случайных чисел и сортирует их по порядку. По дефолту
// функция сортирует в порядке возрастания. Но если передать в сторой параметр то функция будет сортировать по убыванию.
function dd($arg)
{
    echo "<pre>";
    print_r($arg);
    echo "</pre>";
}

function createArrRand(int $num): array
{
    $newArr = [];
    while ($num >= 0) {
        $newArr[] = rand(-5, 5);
        $num--;
    }
    return $newArr;
}

function sortArray(array $arr, string $str): array
{
    if ($str == "fromAtoZ") {
        sort($arr);
    }
    if ($str == "fromZtoA") {
        rsort($arr);
    }
    return $arr;
}

$newArr = createArrRand(10);
echo "Массив из случайных чисел:";
dd($newArr);

echo "Сортировка от меньшего к большему :";
$sorterArrayAZ = sortArray($newArr, "fromAtoZ");
dd($sorterArrayAZ);

echo "Сортировка от большего к меньшему :";
$sorterArrayAZ = sortArray($newArr, "fromZtoA");
dd($sorterArrayAZ);

echo "<----------------3----------------><br>";
//3 написать функцию поиска в массиве. Функция будет принимать два параметра. Первый массив, второй поисковое
// число. search(arr, find)

function search(array $arr, int $find): string
{
    $stringRes = "";
    foreach ($arr as $key => $item) {
        if ($item == $find) {
            $stringRes .= $key . ",";
        }
    }
    return $stringRes;
}

dd($newArr);
$find = rand(-5, 5);
$resSting = search($newArr, $find);
echo ($resSting != "") ? "В массиве число $find встречается под номерами: $resSting" : "число $find не встречается в массиве";


