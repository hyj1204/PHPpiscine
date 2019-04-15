<?PHP
//标准库函数str_split是把字符串中的每一个字符分割开来
function ft_split($str)
{
    $str = explode(" ", $str);  //explode() 函数使用一个字符串分割另一个字符串，并返回由字符串组成的数组.把str用空格分割开来.
    $array = array_filter($str, 'strlen'); //array_filter通过后面的回调函数（这里是strlen）来过滤输入的数组。依次把输入数组中的每个值放入回调函数，如果回调函数返回真（返回值>0)，则把返回值放入到结果数组中。如果失败就不放了。
    sort($array); //默认按照字母顺序排序
    return($array);
}
?>