#!/usr/bin/php
<?PHP
if ($argc > 1)
{
    $str = trim($argv[1]);
    while ((strpos($str, "  ")) == TRUE)
        $str = str_replace("  ", " ", $str);
    $array = explode(" ", $str);
    $num = count($array); //计算array里面的元素个数

    $i = 1;
    while ($i < $num)
    {
        echo "$array[$i] ";
        $i++;
    }
    echo "$array[0]\n";
}
?>