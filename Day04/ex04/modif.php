<?php
    if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] && $_POST['submit'] === "OK")
    {
        $account = unserialize(file_get_contents('../private/passwd')); //取出原来的session信息
        if ($account) //如果原来有用户信息的话
        {
            $exist = 0;
            foreach ($account as $k => $v) //查找账户信息
            {
                if ($v['login'] === $_POST['login'] && $v['passwd'] === hash('whirlpool', $_POST['oldpw'])) 
                {
                    $exist = 1;   //找到原来用户的情况下
                    $account[$k]['passwd'] =  hash('whirlpool', $_POST['newpw']); //放入新密码
                }
            }
            if ($exist) //如果改了密码
            {
                file_put_contents('../private/passwd', serialize($account)); //把新的session信息（需要序列化之后）放入
                echo "OK\n";
                header('Location: index.html'); //返回主页让用户登陆
                exit();
            } else
                echo "ERROR\n";
        }
        else
            echo "ERROR\n";
    }
    else
     echo "ERROR\n";

?>