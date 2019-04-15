#!/usr/bin/php
<?PHP

echo "Enter a number:";

$num = fgets(STDIN); //STDIN标准输入（standard input），只读，用于从控制台输入内容；
$num = trim($num); //删除num前后的所有空格

if (is_numeric($num))
{
    if ($num % 2 == 0)
    echo "The number '$num' is a even\n";
    else 
    echo "The number '$num' is a odd\n";
}
else
{
    if (feof(STDIN)) //feof() 函数检查是否已到达文件末尾（EOF）。如果出错或者文件指针到了文件末尾（EOF）则返回 TRUE，否则返回 FALSE。如果读到终止符，就显示回车并退出程序
    {
        echo "\n";
        exit();
    }
    else
        echo "'$num' is not a number\n";
}

?>