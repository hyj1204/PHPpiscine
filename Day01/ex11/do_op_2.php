#!/usr/bin/php
<?PHP
if ($argc != 2)
{
    echo "Incorrect Parameters\n";
    exit();
}
else 
{
    $cal = str_replace(" ", "", $argv[1]); //清楚字符串中所有的空格
    $num1= intval($cal);  //intval — Get the integer value of a variable获得字符串最开头的数字。intval(12ab)的结果是12
    $op = substr(substr($cal, strlen((string)$num1)), 0, 1); //substr — Return part of a string
    //substr($cal, strlen((string)$num1))是cal中，每个字符串从0开始。例如42,strlen(42)= 2,所以在字符串2位置上的是数字4（位置0）2（位置1）后面那个字符的位置。从这个位置开始的第一个（0位置）取一个字符。就是运算符。
    $num2 = substr(substr($cal, strlen((string)$num1)), 1); //从数字后的运算符位置（0）开始后面一个位置（1）开始到结束
    if (!is_numeric($num1) || !is_numeric($num2)) //如果数字1，2不是数字的话
    {
        echo "Syntax Error\n";
        exit();
    }
    switch ($op) {
        case ("*") :
            echo $num1 * $num2;
            break;
        case ("+") :
            echo $num1 + $num2;
            break;
        case ("-") :
            echo $num1 - $num2;
            break;
        case ("/") :
            echo $num1 / $num2;
            break;
        case ("%") :
            echo $num1 % $num2;
            break;
        default:
            echo "Syntax Error\n";
            exit();
    }
    echo "\n";
}
?>