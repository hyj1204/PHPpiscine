#!/usr/bin/php
<?PHP

if ($argc > 1)
{
    $i = 2;
    $str = $argv[1];

    while ($i < $argc)
    {
        $str .= " ".$argv[$i]." "; //把每一个输入的字符串都加起来，前后加空格
        $i++;
    }
    $str = trim($str);
    while ((strpos($str, "  ")) == TRUE)
        $str = str_replace("  ", " ", $str);
    $array = explode(" ", $str);
    sort($array);
    foreach ($array as $word) //把array里面的每一个值作为变量word
        echo "$word\n";
}
?>