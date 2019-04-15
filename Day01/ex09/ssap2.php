#!/usr/bin/php
<?PHP
function split($str)
{
    $parts = preg_split("/[\s]+/", $str); //preg_split — 通过一个正则表达式分隔字符串(Split string by a regular expression)
    //使用逗号或空格(包含" ", \r, \t, \n, \f)分割字符串，每个被分割出来的单词组成一个数组。
	return $parts;
}

function ssap2($aword, $bword) //处理两个单词
{
	$achars = str_split($aword); //把这个单词的每个字母组成一个数组
    $bchars = str_split($bword);
    $i = 0;
	while ($i < count($achars))
	{
		if ($achars[$i] != $bchars[$i])  //如果同一位置两个字符不相同的情况下,比较两个字符
            return (compare($achars[$i], $bchars[$i]));
        $i++;
	}
}

function compare($a, $b)
{
	if (is_numeric($a)) //如果是数字的话就+128
		$a = $a + 130;
	else if (ctype_alpha($a)) //如果是因为字母的话，改成小写
		$a = strtolower($a); //strtolower — Make a string lowercase
	else
	{
		$a = ord($a);  //ord — Convert the first byte of a string to a value between 0 and 255
		$a = $a + 150;
	}
	if (is_numeric($b))
		$b = $b + 130;
	else if (ctype_alpha($b))
		$b = strtolower($b);
	else
	{
		$b = ord($b);
		$b = $b + 150;
	}
	return ($a >= $b); //返回比较后的值 字母范围97-122，数字范围130-139，其他字符150之后
}


    $i = 1;
    $sorted_array = [];
	while ($i < $argc)
	{
		$arr = split($argv[$i]);//把每个输入字符串作为一个数组，每个数组里是这个字符串的每个单词
		$a = 0;
		while ($a < count($arr))
		{
			if (!ctype_space($arr[$a]) && $arr[$a] != "") //ctype_space检查这个单词是否全是空白效果的单词 && 这个单词是空的情况（因为之前是用空格来分割单词，如果字符串结尾是空格的话，最后会分隔出来一个空的数组）
				array_push($sorted_array, $arr[$a]);//把每个字符串里面的合法单词都放入orted_array
			$a++;
		}
	$i++;
	}
	usort($sorted_array, "ssap2"); //usort运用自定义函数sort数组
    foreach ($sorted_array as $word) 
		echo $word."\n";
?>