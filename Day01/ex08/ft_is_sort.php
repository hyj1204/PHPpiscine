<?PHP
function ft_is_sort($arr)
{
    $sorted = $arr;
    sort($sorted);   //注意sort是直接把当前输入的数组里面的元素进行了排序，处理过之后，输出还是原来的数组。（只是顺序变了）
    $flag = 0;
    $i = 0;
    $num = count($arr);
    while ($i < $num)
    {
        if ($arr[$i] != $sorted[$i])
            $flag = 1;
        $i++;
    }
    if ($flag == 1)
        return (0);
    else
        return (1);
    }
?>