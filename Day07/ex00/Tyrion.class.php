<?PHP

class Tyrion extends Lannister //表明类Tyrion继承于Lannister
{
    function __construct()
    {
        parent::__construct(); //调用父类构造方法。PHP 不会在子类的构造方法中自动的调用父类的构造方法。要执行父类的构造方法，需要在子类的构造方法中调用 parent::__construct() 
        print("My name is Tyrion" . PHP_EOL);
    }

    function getSize()
    {
        print("Short");
    }
}
 
?>