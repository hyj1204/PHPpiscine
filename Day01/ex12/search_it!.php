#!/usr/bin/php
<?PHP
if ($argc >= 3)
{
	$i = 2;
	while ($i < $argc)
	{
        if ($i == 2)
            $str = $argv[2];
        else
            $str .= $argv[$i]; 

		if ($i + 1 != $argc) //不是最后一个的话就在后面加&号
			$str.= "&";
		$i++;
	}
	$str = str_replace(":", "=", $str); //把所有的冒号变为等号
	parse_str($str, $tab); //parse_str会把每个用&连接的键值对应存放
	if (array_key_exists($argv[1], $tab)) //array_key_exists — Checks if the given key or index exists in the array
	{
		$result = $tab[$argv[1]];
		echo $result."\n";
	}
}
?>