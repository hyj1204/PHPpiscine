<?PHP
    require_once('auth.php');
    session_start();
    if ($_POST['login'] && $_POST['passwd'] && auth($_POST['login'], $_POST['passwd']))
    //如果用户输入的信息通过验证
    {
        $_SESSION['loggued_on_user'] = $_POST['login'];
    } 
    else 
    {
        $_SESSION['loggued_on_user'] = "";
        echo "ERROR\n";
        header('Location: index.html');
    }
?>
<html>
    <head><title>42Chat</title></head>
        <body>
            <iframe name="chat" src="chat.php" width="100%" height="550px"></iframe>
            <iframe name="speak" src="speak.php" width="100%" height="50px"></iframe>
        </body>
</html>