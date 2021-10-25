<?php
echo "<----------------1-------------------><br>";
//1. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф-я rand). Далее, вычислить произведение
//тех элементов, которые больше нуля и у которых четные индексы. После вывести на экран элементы, которые больше нуля
// и у которых нечетный индекс.
function dd($arg)
{
    echo "<pre>";
    print_r($arg);
    echo "</pre>";
}

function createArrRand(int $num): array
{
    $newArr = [];
    while ($num >= 1) {
        $newArr[] = rand(-5, 5);
        $num--;
    }
    return $newArr;
}

function multiplyPossitiveElem(array $arr): int
{
    $res = 1;
    foreach ($arr as $key => $item) {
        if ($key % 2 == 0 && $item > 0) {
            $res *= $item;
        }
    }
    return $res;
}

function printEvenPossitiveElem(array $arr): bool
{
    foreach ($arr as $key => $item) {
        if ($key % 2 == 1 && $item > 0) {
            echo "Элемент $key значение $item ;<br>";
        }
    }
    return true;
}

$newArray = createArrRand(10);
dd(multiplyPossitiveElem($newArray));
printEvenPossitiveElem($newArray);
echo "<----------------2-------------------><br>";
//2.Даны два числа. Найти их сумму и произведение. Даны два числа. Найдите сумму их квадратов.
$a = rand(1, 10);
$b = rand(1, 10);

function calcMultiply(...$arg): int
{
    $res = 1;
    foreach ($arg as $item) {
        $res *= $item;
    }
    return $res;
}

function calcSum(...$arg): int
{
    $res = 0;
    foreach ($arg as $item) {
        $res += $item;
    }
    return $res;
}

function calcSumSquare(...$arg): int
{
    $res = 0;
    foreach ($arg as $item) {
        $res += $item ** 2;
    }
    return $res;
}

echo "Умножине чисел $a * $b = " . calcMultiply($a, $b) . "<br>";
echo "Сумма чисел $a + $b = " . calcSum($a, $b) . "<br>";
echo "Сумма квадратов чисел $a и $b = " . calcSumSquare($a, $b) . "<br>";

echo "<----------------3-------------------><br>";
//3. Даны три числа. Найдите их среднее арифметическое.
function calcAvarage(int ...$arg): float
{
    $res = 0;
    foreach ($arg as $item) {
        $res += $item;
    }
    $res /=  (count($arg));
    return $res;
}

echo "Среднее арифметическое из чисел $a и $b = " . calcAvarage($a, $b) . "<br>";

echo "<----------------4-------------------><br>";
//4. Дано число. Увеличьте его на 30%, на 120%.

function increaseThirty(int $num): float
{
    return $num * 1.3;
}

function increaseFifty(int $num): float
{
    return $num * 2.2;
}


echo "Число $a увеличенное на 30% - " . increaseThirty($a) . "<br>";
echo "Число $a увеличенное на 120% - " . increaseFifty($a) . "<br>";

echo "<----------------5-------------------><br>";
//5 Пользователь выбирает из выпадающего списка страну (Турция, Египет или Италия), вводит количество дней для отдыха
// и указывает, есть ли у него скидка (чекбокс). Вывести стоимость отдыха, которая вычисляется как произведение
//   количества дней на 400. Далее это число увеличивается на 10%, если выбран Египет, и на 12%, если выбрана Италия.
// И далее это число уменьшается на 5%, если указана скидка.
?>

<form name="countryForm" action="index.php" method="post">
    <select name="county">
        <label name="county"> Веберите страну /label>
            <option value="turkey">Турция</option>
            <option value="egipt">Египет</option>
            <option value="italy">Италия</option>
    </select><
    <br>
    <label for="days">Введите количество дней:</label>
    <input type="number" name="days" min="1" max="31" value="10">
    <br>
    <label for="discount"> Есть ли у Вас скидка?</label><br>
    <input type="checkbox" name="discount" checked>
    <br>
    <input type="checkbox" name="countFormSent" checked style="display: none">

    <button type="submit">OK</button>
</form>
<?php
if ($_POST["countFormSent"]) {
    function calcSumCounties(int $price, int $days, float $kCounties, float $kDiscount): float
    {
        $res = $price * $days * $kCounties * $kDiscount;
        return $res;
    }

    $quantityDays = $_POST["days"];

    if ($_POST["county"] == "turkey") $kCounties = 1;
    if ($_POST["county"] == "egipt") $kCounties = 1.1;
    if ($_POST["county"] == "italy") $kCounties = 1.12;

    $kDiscount = ($_POST["discount"] == "on") ? 0.95 : 1;

    echo "Стоимость соглаcно расчетам =" . calcSumCounties(400, $quantityDays, $kCounties, $kDiscount) . "<br></p>";
}
echo "<----------------6-----------------><br>";
//6. Пользователь вводит свой имя, пароль, email. Если вся информация указана, то показать эти данные после
// фразы 'Регистрация прошла успешно', иначе сообщить какое из полей оказалось не заполненным.
?>
<form name="loginForm" action="index.php" method="post">
    <label for="name"> Ваше имя </label>
    <input type="text" name="name" value="Имя">
    <br>
    <label for="password">Ваш пароль</label>
    <input type="password" name="password" value="password">
    <br>
    <label for="email">Ваш email</label>
    <input type="email" name="emailLogin" value="antons@ukr.net">
    <input type="checkbox" name="loginFormSent" checked style="display: none">
    <br>
    <button type="submit">OK</button>
</form>
<?php

if ($_POST["loginFormSent"]) {
    function checkLoginForm($name, $password, $email): bool
    {
        if (!$name) {
            echo $name;
            echo "Вы не ввели Имя";
        }
        if (!$password) {
            echo "Вы не ввели пароль";
        }
        if (!$email) {
            echo "Вы не ввели email";
        }
        if ($email && $name && $password) {
            echo "Все данные введены. Регистрация прошла успешно";
        }
        return true;
    }

    $name = $_POST["name"];
    $password = $_POST["password"];
    $email = $_POST["emailLogin"];

    checkLoginForm($name, $password, $email);
    echo "<br>";
}
echo "<----------------7-----------------><br>";
//7. Выведите на экран n раз фразу "Silence is golden". Число n вводит пользователь на форме. Если n некорректно,
// вывести фразу "Bad n".

if ($_POST["silenceIsGoldenForm"]) {
    function printString(string $string, int $n): bool
    {
        $i = 1;
        $res = "";
        do {
            $res .= $i . ") " . $string . ";  ";
            $i++;
        } while ($i <= $n);
        echo $res;
        return true;
    }

    $n = intval($_POST["silenceIsGoldenForm"]);
    $checkingIntOrFloat = false;
    if (is_numeric($_POST["silenceIsGoldenForm"]) && $_POST["silenceIsGoldenForm"] - $n == 0) {
        $checkingIntOrFloat = true;
    }
    if (is_int($n) && $n > 0 && $checkingIntOrFloat) {
        printString("Silence is golden", $n);
    } else {
        echo "Bad n";
    }
}
?>
<form name="silenceIsGoldenForm" action="" method="post">
    <label for="silenceIsGoldenForm"> Сколько раз напечатать "Silence is golden"?</label>
    <br>
    <input type="text" name="silenceIsGoldenForm">
    <input type="submit" value="OK">

</form>
<?php
echo "<----------------8-----------------><br>";
//8 Заполнить массив длины n нулями и единицами, при этом данные значения чередуются, начиная с нуля.
function makeRandomArray(int $length, int $min, int $max): array
{
    $newArr = [0];
    for ($i = 1; $i < $length; $i++) {
        $newArr[] = rand($min, $max);
    }
    return $newArr;
}

$newArr = makeRandomArray(2, 0, 1);
dd($newArr);

echo "<----------------9-----------------><br>";
//9 Определите, есть ли в массиве повторяющиеся элементы.
$res = false;
for ($i = 0; $i < count($newArr); $i++) {
    for ($k = 0; $k < count($newArr); $k++) {
        if ($newArr[$i] == $newArr[$k] && $i != $k) {
            $res = true;
            break(2);
        }
    }
}
echo ($res) ? "Есть повторяющиеся элементы<br>" : "Нет повторяющихся элементов<br>";

echo "<----------------10-----------------><br>";
//10 Найти минимальное и максимальное среди 3 чисел

function findMin(...$arg)
{
    $min = $arg[0];
    foreach ($arg as $item) {
        if ($item <= $min) {
            $min = $item;
        }
    }
    return $min;
}

function findMax(...$arg)
{
    $max = $arg[0];
    foreach ($arg as $item) {
        if ($item >= $max) {
            $max = $item;
        }
    }
    return $max;
}

$a = rand(-10, 10);
$b = rand(-10, 10);
$c = rand(-10, 10);

echo "Из чисел $a, $b, $c минимальное число : " . findMin($a, $b, $c) . "<br>";
echo "Из чисел $a, $b, $c максимальное число : " . findMax($a, $b, $c) . "<br>";

echo "<----------------11-----------------><br>";
//11 Найти площадь
function calcSuqare($a, $b): float
{
    return $a * $b;
}

$a = rand(1, 10);
$b = rand(1, 10);
echo "Длинна: $a, Ширина: $b, Площадь:" . calcSuqare($a, $b) . "<br>";

echo "<----------------12-----------------><br>";
//12 Теорема Пифагора
function calcGiptinuzu($a, $b): float
{
    return sqrt($a ** 2 + $b ** 2);
}

$a = rand(1, 4);
$b = rand(1, 3);
echo "Теорем пифагора: Катет1: $a, Катет2: $b. Ответ гипотинуза =" . calcGiptinuzu($a, $b) . "<br>";

echo "<----------------13-----------------><br>";
//13 Найти периметр
function calcPirimetr(...$arg): float
{
    $res = 0;
    foreach ($arg as $item) {
        $res += $item;
    }
    return $res;
}

$a = rand(1, 4);
$b = rand(1, 4);
$c = rand(1, 4);

echo "Cторона1: $a, Сторона2: $b, Сторона3: $c. Ответ периметр =" . calcPirimetr($a, $b, $c) . "<br>";
echo "<----------------14-----------------><br>";
//14 Найти дискриминант D=b^{2}-4ac.
function calcDiskrimenant($a, $b, $c): float
{
    $res = $b * $b - 4 * $a * $c;
    return $res;
}

$a = rand(1, 4);
$b = rand(1, 4);
$c = rand(1, 4);

echo "а=: $a, b=: $b, c=: $c. Ответ D=b^2-4ac =" . calcDiskrimenant($a, $b, $c) . "<br>";
echo "---------------15 & 16---------------><br>";
//15 Создать только четные числа до 100
//16 Создать не четные числа до 100
function makeArrOddOrEven(int $num, string $str): array
{
    $resArr = [];
    for ($i = 0; $i <= $num; $i++) {
        if ($str == "odd" && $i % 2 == 1) {
            $resArr[] = [$i];
        }
        if ($str == "even" && $i % 2 == 0) {
            $resArr[] = [$i];
        }
    }
    return $resArr;

}

dd(makeArrOddOrEven(100, "even"));
dd(makeArrOddOrEven(100, "odd"));

?>





