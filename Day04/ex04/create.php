<?PHP
 if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] === "OK") 
 {
    if (!file_exists('../private')) //如果文件夹不存在就新建文件夹
        mkdir("../private");
    if (!file_exists('../private/passwd')) //如果account信息不存在，则新建内容
        file_put_contents('../private/passwd', null);
    $account = unserialize(file_get_contents('../private/passwd')); //把原来存储的account信息反序列化出来
    if ($account) //有账户信息的话
    {
        $exist = 0; //初始化检查值
        foreach ($account as $k => $v)
        {
            if ($v['login'] === $_POST['login'])
                $exist = 1;  //如果原来列表里有这个账户的信息的话,就说明这个用户已经存在了
        }
    }
    if($exist == 0)
    {
        $tmp['login'] = $_POST['login'];
        $tmp['passwd'] = hash('whirlpool', $_POST['passwd']);
        $account[] = $tmp;
        file_put_contents('../private/passwd', serialize($account));
        echo "OK\n";
        header('Location: index.html');//返回主页让用户登陆
        exit();
    }
    else
        echo "ERROR\n";
}
else
    echo "ERROR\n";
?>