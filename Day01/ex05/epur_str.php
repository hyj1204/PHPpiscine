#!/usr/bin/php
<?PHP

if ($argc > 1)
{
    $str = trim($argv[1]); ////trim() 函数移除字符串两侧的空白字符或其他预定义字符。
    while ((strpos($str, "  "))== TRUE) //strpos查找字符串在另一字符串中第一次出现的位置（区分大小写）。返回字符串在另一字符串中第一次出现的位置(例如在第一个位置就找到，返回值是0。因为字符串位置从 0 开始，不是从 1 开始）。如果没有找到字符串则返回FALSE。
        $str = str_replace("  ", " ", $str);
    echo("$str\n");
}

?>