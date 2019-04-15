<?PHP 
    class NightsWatch implements IFighter {

    var $solider = array(); //注意这里声明array是用小括号不是中括号.

        function recruit($who)
        {
            $this->solider[] = $who; //把输入参数依次放入数组
        }

        function fight()
        {
            foreach ($this->solider as $solider) //使用数组里面的每一个值
            {
                if(method_exists(get_class($solider), 'fight'))  //如果solider的类里面有fight函数的话就执行这个函数
                    $solider->fight();
            }
        }
    }
?>