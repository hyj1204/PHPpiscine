<?PHP 
function auth($login, $passwd)//检查输入的用户名和密码是否在passwd中
{
    if (!$login || !$passwd)
        return false;
    $account = unserialize(file_get_contents('../private/passwd'));
    if ($account)
    {
        foreach ($account as $k => $v)
        {
            if($v['login'] === $login && $v['passwd'] === hash('whirlpool', $passwd))
            return true;
        }
    }
    return false;
}
?>