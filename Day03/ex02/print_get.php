<?PHP
    foreach ($_GET as $key => $value) //把所有以get方法提交的数据作为一个键值对
        echo $key.": ".$value."\n"; //显示所有的键值信息
?>