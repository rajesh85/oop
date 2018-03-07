<?php
function factorial($number){
    if($number == 1){
        return 1;
    }
    $fact = 1;
    for($current=1;$current<=$number;$current++){
        $fact *= $current;
    }
    return $fact;
}
//echo factorial(6);

function fibo($limit){
    $n01 = 0; $n02 = 1;
    $result = [];
    $result[0] = $n01;
    $result[1] = $n02;
    $rc = 2;
    for($i=0;$i<=$limit;$i++){
        $result[$rc] = $n01 + $n02;
        $n01 = $n02;
        $n02 = $result[$rc];
        $rc++;
    }
    return implode(', ', $result);
}
//echo fibo(10);

function armstrong($num){
    //If the sum of cubes of individual digits of a number is equal to the number itslef  then it is called Armstrong Number.
    $temp = $num;
    $sum = 0;
    while($temp != 0){
        $remainder = $temp%10;
        $sum += $remainder*$remainder*$remainder;
        $temp = $temp/10;
    }
    return ($sum == $num) ? TRUE : FALSE;
}
function reverseNumber($num){
    $reverse = 0;
    while ($num >= 1) {
        $remainder = $num % 10;
        $reverse = ($reverse * 10) + $remainder;
        $num = $num / 10;
    }
    echo $reverse;
}
//reverseNumber(123456789);
$rows = 5;
$sp = $rows;
$d=1;
for($i=1;$i<=$rows;$i++){
    for($j=1;$j<=$sp;$j++){
        echo "&nbsp;&nbsp;";
    }
    $sp--;
    for($k=1;$k<=$d;$k++){
        echo '*';
    }
    $d = $d+2;
    echo '<br>';
}
$sp = 1;
$d = 2*$rows-1;
for($i=1;$i<=$rows;$i++){
    for($j=1;$j<=$sp;$j++){
        echo "&nbsp;&nbsp;";
    }
    $sp++;
    for($k=$d;$k>=1;$k--){
        echo '*';
    }
    $d = $d-2;
    echo '<br>';
}


$rows = 2;
for($i=$rows;$i>=1;--$i)
{
    for($space=0;$space<$rows-$i;++$space)
        echo "  ";
    for($j=$i;$j<=2*$i-1;++$j)
        echo "* ";
    for($j=0;$j<$i-1;++$j)
        echo "* ";
    echo "<br>";
}

$m=1;
for($i=1; $i<=5; $i++) { // iterates over number of rows
    for($j=$i; $j<=4; $j++) {
        echo "&nbsp;&nbsp;";
    }

    for($c=$m; $c>1; $c--) {
        echo "*";
    }
    for($k=1; $k<=$m; $k++)  {
        echo "*";
    }
    echo "<br>";
    $m++;
}
$row = 5;
for($i=1;$i<=$row;$i++)
{
    for($j=1;$j<=$row;$j++)
    {
        echo $j.' ';
    }
    echo "<br />";
}

$row = 10;
$d = 1;
$l = $row;
for($i=1;$i<=$row;$i++)
{
    for($j=$row;$j>=$d;$j--)
    {
        echo $j.' ';
    }
    $d++;
    echo "<br />";
}

