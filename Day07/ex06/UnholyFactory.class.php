<?PHP
    class UnholyFactory
{
	public $fighter = Array();
	
	public function absorb($solider) //接收solider
	{
		$type = new ReflectionClass($solider); //先判断接收进来的对象solider是不是
		if ($type->getParentClass()) //获得solider的父类
		{
			$name = $solider->returnName(); //获得solider名字，也就是parent::__construct("foot soldier");这种输入
			if (array_key_exists($name, $this->fighter))//判断这个名字是不是在fighter数组里
				print "(Factory already absorbed a fighter of type " . $name . ")" . PHP_EOL;
			else
			{
				print "(Factory absorbed a fighter of type " . $name . ")" . PHP_EOL;
				$this->fighter[$name] = $solider;//把这个名字放入数组
			}
		}
		else
			print "(Factory can't absorb this, it's not  a fighter)" . PHP_EOL;
	}


	public function fabricate($rfighter)
	{
		if (array_key_exists($rfighter, $this->fighter))//判断这个fighter时候已经在数组里
		{
			print "(Factory fabricates a fighter of type " . $rfighter . ")" . PHP_EOL;
			return ($this->fighter[$rfighter]);
		}
		else
		{
			print "(Factory hasn't absorbed any fighter of type " . $rfighter . ")" . PHP_EOL;
			return (NULL);
		}
	}
}
?>