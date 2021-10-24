<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<pre>
<?php
//<------------Task 1 -------------->
//while, do while, for, foreach
//Дан массив ['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya'] Развернуть этот массив в обратном направлении
$arr = ['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya'];

$i = 0;
$count = 0;
while ($arr[$count]) {
    $count++;
};
while ($i < $count) {
    $arrRes[$i] = $arr[$count - $i - 1];
    $i++;
};

$i = 0;
$arrRes = [];
$count = 0;
do {
    $count++;
} while ($arr[$count]);
do {
    $arrRes[$i] = $arr[$count - $i - 1];
    $i++;
} while ($i < $count);

$arrRes = [];
$i = 0;
for ($count = 0; $arr[$count]; $count++) {
};
for ($i = 0; $i < $count; $i++) {
    $arrRes[$i] = $arr[$count - $i - 1];
}
$arrRes = [];
$count = 0;
foreach ($arr as $key => $item) {
    $count = $key;
};
foreach ($arr as $key => $item) {
    $arrRes[$count - $key] = $item;
}

print_r($arrRes);

//<------------Task 2 -------------->
//Дан массив [44, 12, 11, 7, 1, 99, 43, 5, 69] Развернуть этот массив в обратном направлении
$arr2 = [44, 12, 11, 7, 1, 99, 43, 5, 69];
$i = 0;
$count = 0;
$arrRes = [];
while ($arr2[$count]) {
    $count++;
};
while ($i < count($arr2)) {
    $arrRes[$i] = $arr2[$count - $i - 1];
    $i++;
};

$i = 0;
$arrRes = [];
$count = 0;
do {
    $count++;
} while ($arr2[$count]);
do {
    $arrRes[$i] = $arr2[$count - $i - 1];
    $i++;
} while ($i < count($arr2));

$arrRes = [];
$i = 0;
for ($count = 0; $arr2[$count]; $count++) {
};
for ($i = 0; $i < $count; $i++) {
    $arrRes[$i] = $arr2[$count - $i - 1];
};

$arrRes = [];
$count = 0;
foreach ($arr2 as $key => $item) {
    $count = $key;
};
foreach ($arr2 as $key => $item) {
    $arrRes[$count - $key] = $item;
};

print_r($arrRes);
//<------------Task 3 -------------->
//3. Дана строка let str = 'Hi I am ALex' развенуть строку в обратном направлении.
$str = "let str = 'Hi I am ALex'";
$i = 0;
$count = 0;
$strRes = "";
while ($str[$count]) {
    $count++;
};
while ($i <= $count) {
    $strRes .= $str[$count - $i];
    $i++;
}
$i = 0;
$strRes = "";
$count = 0;
do {
    $count++;
} while ($str[$count]);
do {
    $strRes .= $str[$count - $i];
    $i++;
} while ($i <= $count);

$strRes = "";
for ($count = 0; $str[$count]; $count++) {
};
for ($i = 0; $i <= $count; $i++) {
    $strRes .= $str[$count - $i];
}

$i = 0;
$strRes = "";
$count = 0;
$chars = str_split($str);
foreach ($chars as $key => $item) {
    $count = $key;
};
foreach ($chars as $key => $item) {
    $strRes .= $chars[$count - $key];
}
echo $strRes;

//<------------Task 4 -------------->
//Дана строка. готовую функцию toUpperCase() or tolowercase() let str = 'Hi I am ALex' сделать ее с с маленьких букв
echo "<br><br>";
//тренеруемся в разворачивании кода массива-алфавитов, чтоб понять что код оличается на 32
//$arrLower=explode(",","a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z");
//$arrUpper=explode(",","A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z");
//foreach ($arrLower as $key=>$item) {
//    echo ord($item);
//    echo "<br>";
//}
//foreach ($arrUpper as $key=>$item) {
//    echo ord($item);
//    echo chr(ord($item));
//    echo "<br>";
//}

$str = "let str = 'Hi I am ALex'";
$i = 0;
$strRes = "";
$count = 0;
while ($str[$count]) {
    $count++;
};
while ($i <= $count) {
    $oneChar = ord($str[$count - $i]);
    if ($oneChar >= 65 && $oneChar <= 90) {
        $oneChar += 32;
    };
    $strRes .= chr($oneChar);
    $i++;
}

$i = 0;
$strRes = "";
$count = 0;
do {
    $count++;
} while ($str[$count]);
do {
    $oneChar = ord($str[$count - $i]);
    if ($oneChar >= 65 && $oneChar <= 90) {
        $oneChar += 32;
    };
    $strRes .= chr($oneChar);
    $i++;
} while ($i <= $count);

$strRes = "";
for ($count = 0; $str[$count]; $count++) {
};
for ($i = 0; $i <= $count; $i++) {
    $oneChar = ord($str[$count - $i]);
    if ($oneChar >= 65 && $oneChar <= 90) {
        $oneChar += 32;
    };
    $strRes .= chr($oneChar);
}

$strRes = "";
$chars = str_split($str);
foreach ($chars as $key => $item) $count = $key;
foreach ($chars as $key => $item) {
    $oneChar = ord($chars[$count - $key]);
    if ($oneChar >= 65 && $oneChar <= 90) {
        $oneChar += 32;
    };
    $strRes .= chr($oneChar);
}

echo  $strRes . "<br>";


////<------------Task 5 -------------->
////5. Дана строка let str = 'Hi I am ALex' сделать все буквы большие

$str = "let str = 'Hi I am ALex'";
$i = 0;
$strRes = "";
$count = 0;
while ($str[$count]) {
    $count++;
};
while ($i <= $count) {
    $oneChar = ord($str[$count - $i]);
    if ($oneChar >= 65 + 32 && $oneChar <= 90 + 32) {
        $oneChar -= 32;
    };
    $strRes .= chr($oneChar);
    $i++;
}
$i = 0;
$strRes = "";
$count = 0;
do {
    $count++;
} while ($str[$count]);
do {
    $oneChar = ord($str[$count - $i]);
    if ($oneChar >= 65 + 32 && $oneChar <= 90 + 32) {
        $oneChar -= 32;
    };
    $strRes .= chr($oneChar);
    $i++;
} while ($i <= $count);

$strRes = "";
for ($count = 0; $str[$count]; $count++) {
};
for ($i = 0; $i <= $count; $i++) {
    $oneChar = ord($str[$count - $i]);
    if ($oneChar >= 65 + 32 && $oneChar <= 90 + 32) {
        $oneChar -= 32;
    };
    $strRes .= chr($oneChar);
}

$strRes = "";
$chars = str_split($str);
foreach ($chars as $key => $item) {
    $count = $key;
};
foreach ($chars as $key => $item) {
    $oneChar = ord($chars[$count - $key]);
    if ($oneChar >= 65 + 32 && $oneChar <= 90 + 32) {
        $oneChar -= 32;
    };
    $strRes .= chr($oneChar);
}

echo "<br>" . $strRes . "<br><br>";

////<------------Task 6 -------------->

//6. Дана строка let str = 'Hi I am ALex' развернуть ее в обратном направлении
$str = "let str = 'Hi I am ALex'";
//echo "<br>. См. задание 3";
$i = 0;
$count = 0;
$strRes = "";
while ($str[$count]) {
    $count++;
};
while ($i <= $count) {
    $strRes .= $str[$count - $i];
    $i++;
}
$i = 0;
$strRes = "";
$count = 0;
do {
    $count++;
} while ($str[$count]);
do {
    $strRes .= $str[$count - $i];
    $i++;
} while ($i <= $count);

$strRes = "";
for ($count = 0; $str[$count]; $count++) {
};
for ($i = 0; $i <= $count; $i++) {
    $strRes .= $str[$count - $i];
}

$i = 0;
$strRes = "";
$count = 0;
$chars = str_split($str);
foreach ($chars as $key => $item) {
    $count = $key;
};
foreach ($chars as $key => $item) {
    $strRes .= $chars[$count - $key];
}
echo $strRes;


////<------------Task 7 -------------->
//7. Дан массив ['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya'] сделать все буквы с маленькой
$arr = ['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya'];
$i = 0;
$strRes = "";

$arrRes = [];
$count = 0;
$countArr = 0;
while ($arr[$countArr]) {
    $countArr++;
};
while ($i <= $countArr) {
    if (is_string($arr[$i])) {
        while ($str[$count]) {
            $count++;
        };
        $k = 0;
        $strRes = "";
        while ($k <= $count) {
            $oneChar = ord($arr[$i][$k]);
            if ($oneChar >= 65 && $oneChar <= 90) {
                $oneChar += 32;
            };
            $strRes .= chr($oneChar);
            $k++;
        }
        $arrRes[$i] = $strRes;
    }
    $i++;
}

$i = 0;
$count = 0;
$strRes = "";
$arrRes = [];
$countArr = 0;
do {
    $countArr++;
} while ($arr[$countArr]);
do {
    if (is_string($arr[$i])) {
        do {
            $count++;
        } while ($str[$count]);
        $k = 0;
        $strRes = "";
        while ($k <= $count) {
            $oneChar = ord($arr[$i][$k]);
            if ($oneChar >= 65 && $oneChar <= 90) {
                $oneChar += 32;
            };
            $strRes .= chr($oneChar);
            $k++;
        };
        $arrRes[$i] = $strRes;
    };
    $i++;
} while ($i <= $count);

$i = 0;
$count = 0;
$strRes = "";
$arrRes = [];
$countArr = 0;
for ($countArr = 0; $arr[$countArr]; $countArr++) {
};
for ($i = 0; $i <= $countArr; $i++) {
    if (is_string($arr[$i])) {
        for ($count = 0; $str[$count]; $count++) {
        };
        $k = 0;
        $strRes = "";
        while ($k <= $count) {
            $oneChar = ord($arr[$i][$k]);
            if ($oneChar >= 65 && $oneChar <= 90) {
                $oneChar += 32;
            };
            $strRes .= chr($oneChar);
            $k++;
        }
        $arrRes[$i] = $strRes;
    }
}

$strRes = "";
$arrRes = [];
$count = 0;
foreach ($arr as $key => $item) {
    if (is_string($item)) {
        $chars = str_split($item);
        foreach ($chars as $key2 => $item2) {
            $count = $key2;
        };
        $k = 0;
        $strRes = "";
        while ($k <= $count) {
            $oneChar = ord($chars[$k]);
            if ($oneChar >= 65 && $oneChar <= 90) {
                $oneChar += 32;
            };
            $strRes .= chr($oneChar);
            $k++;
        }
        $arrRes[$key] = $strRes;
    }
}
echo "<br> <br> c маленькой:";
print_r($arrRes);

////<------------Task 8 -------------->
//8. Дан массив ['Alex', 'Vanya', 'Tanya', 'Lena', 'Tolya'] сделать все буквы с большой

$arr = ['Alex', 'Vanya', 'Tanya', 'lena', 'Tolya'];
$i = 0;
$strRes = "";

$arrRes = [];
$count = 0;
$countArr = 0;
while ($arr[$countArr]) {
    $countArr++;
};
while ($i <= $countArr) {
    if (is_string($arr[$i])) {
        while ($str[$count]) {
            $count++;
        };
        $k = 0;
        $strRes = "";
        while ($k <= $count) {
            $oneChar = ord($arr[$i][$k]);
            if ($oneChar >= 65 + 32 && $oneChar <= 90 + 32) $oneChar -= 32;
            $strRes .= chr($oneChar);
            $k++;
        };
        $arrRes[$i] = $strRes;
    }
    $i++;
}

$i = 0;
$count = 0;
$strRes = "";
$arrRes = [];
$countArr = 0;
do {
    $countArr++;
} while ($arr[$countArr]);
do {
    if (is_string($arr[$i])) {
        do {
            $count++;
        } while ($str[$count]);
        $k = 0;
        $strRes = "";
        while ($k <= $count) {
            $oneChar = ord($arr[$i][$k]);
            if ($oneChar >= 65 + 32 && $oneChar <= 90 + 32) {
                $oneChar -= 32;
            };
            $strRes .= chr($oneChar);
            $k++;
        }
        $arrRes[$i] = $strRes;
    }
    $i++;
} while ($i <= $count);

$i = 0;
$count = 0;
$strRes = "";
$arrRes = [];
$countArr = 0;
for ($countArr = 0; $arr[$countArr]; $countArr++) {
};
for ($i = 0; $i <= $countArr; $i++) {
    if (is_string($arr[$i])) {
        for ($count = 0; $str[$count]; $count++) {
        };
        $k = 0;
        $strRes = "";
        while ($k <= $count) {
            $oneChar = ord($arr[$i][$k]);
            if ($oneChar >= 65 + 32 && $oneChar <= 90 + 32) {
                $oneChar -= 32;
            };
            $strRes .= chr($oneChar);
            $k++;
        }
        $arrRes[$i] = $strRes;
    }
}
$strRes = "";
$arrRes = [];
$count = 0;
foreach ($arr as $key => $item) {
    if (is_string($item)) {
        $chars = str_split($item);
        foreach ($chars as $key2 => $item2) {
            $count = $key2;
        };
        $k = 0;
        $strRes = "";
        while ($k <= $count) {
            $oneChar = ord($chars[$k]);
            if ($oneChar >= 65 + 32 && $oneChar <= 90 + 32) {
                $oneChar -= 32;
            };
            $strRes .= chr($oneChar);
            $k++;
        }
        $arrRes[$key] = $strRes;
    }
}
echo "<br><br> все большие буквы ";
print_r($arrRes);


////<------------Task 9 -------------->
//9. Дано число let num = 1234678 развернуть ее в обратном направлении см задание 3

$num = 1234678;
$str = $num;
$i = 0;
$count = 0;
$strRes = "";
while ($str[$count]) {
    $count++;
};
while ($i <= $count) {
    $strRes .= $str[$count - $i];
    $i++;
};

$i = 0;
$strRes = "";
$count = 0;
do {
    $count++;
} while ($str[$count]);
do {
    $strRes .= $str[$count - $i];
    $i++;
} while ($i <= $count);

$strRes = "";
for ($count = 0; $str[$count]; $count++) {
};
for ($i = 0; $i <= $count; $i++) {
    $strRes .= $str[$count - $i];
}

$i = 0;
$strRes = "";
$count = 0;
$chars = str_split($str);
foreach ($chars as $key => $item) {
    $count = $key;
};
foreach ($chars as $key => $item) {
    $strRes .= $chars[$count - $key];
}
echo "<br>" . $strRes . "<br><br>";


////<------------Task 10 -------------->
//10. Дан массив [44, 12, 11, 7, 1, 99, 43, 5, 69] отсортируй его в порядке убывания
$dataArr = [44, 12, 11, 7, 1, 99, 43, 5, 69];


$k = 0;
$countArr = 0;
$countCycles = 0;
$arr = $dataArr;
$statusSorted = 0; //Прерываем цикл, если уже весь массив отсортирован, если показатель равен длине массива
$i = 0;
while ($arr[$countArr]) {
    $countArr++;
};
while ($i <= ($countArr - 1) ** 2) {
    $countCycles++;
    $variable1 = $arr[$k];
    $variable2 = $arr[$k + 1];

    if ($variable1 > $variable2) {
        $arr[$k] = $variable2;
        $arr[$k + 1] = $variable1;
        $statusSorted = 0;
    } else $statusSorted++;
    $k++;
    if ($statusSorted == (count($arr) - 1)) break;
    if ($k == (count($arr) - 1)) {
        $k = 0;
    };
    $i++;
}

$arr = $dataArr;
$k = 0;
$statusSorted = 0;
$countCycles = 0;
$i = 0;
$countArr = 0;
do {
    $countArr++;
}
while ($arr[$countArr]);
do {
    $countCycles++;
    $variable1 = $arr[$k];
    $variable2 = $arr[$k + 1];

    if ($variable1 > $variable2) {
        $arr[$k] = $variable2;
        $arr[$k + 1] = $variable1;
        $statusSorted = 0;
    } else $statusSorted++;
    $k++;
    if ($statusSorted == (count($arr) - 1)) break;
    if ($k == $countArr - 1) {
        $k = 0;
    };
    $i++;
} while ($i <= (($countArr - 1) ** 2));

$arr = $dataArr;
$k = 0;
$statusSorted = 0;
$countCycles = 0;
$i = 0;
$countArr = 0;
for ($countArr = 0; $arr[$countArr]; $countArr++) {
};
for ($i = 0; $i <= (count($arr) - 1) ** 2; $i++) {
    $countCycles++;
    $variable1 = $arr[$k];
    $variable2 = $arr[$k + 1];

    if ($variable1 > $variable2) {
        $arr[$k] = $variable2;
        $arr[$k + 1] = $variable1;
        $statusSorted = 0;
    } else $statusSorted++;
    $k++;
    if ($statusSorted == ($countArr - 1)) break;
    if ($k == ($countArr - 1)) {
        $k = 0;
    };

}

//сортировка без прерывания когда уже отсортировано
//    $arr=$dataArr;
//    foreach ($arr as $key=> $item) {
//        foreach ($arr as $key2 => $item2) {
//            $variable1 = $arr[$key2];
//            $variable2 = $arr[$key2 + 1];
//            if (($variable1 > $variable2)&&(($arr[$key2]))&&($arr[$key2 + 1])) {
//                $arr[$key2] = $variable2;
//                $arr[$key2 + 1] = $variable1;
//            }
//        }
//    };


echo "Sorted:";
print_r($arr);
echo "Количество циклов для сортировки " . $countCycles . "  Максимально возможное = " . (($countArr - 1) ** 2);

?>
</pre>
</html>
