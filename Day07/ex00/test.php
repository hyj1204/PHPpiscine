<?php

class Lannister {
	public function __construct() {   
		print("A Lannister is born !" . PHP_EOL);  //构造函数
	}
	public function getSize() {
		return "Average";
	}
	public function houseMotto() {
		return "Hear me roar!";
	}
}

include('Tyrion.class.php');

$tyrion = new Tyrion(); //这个时候会执行构造函数

print($tyrion->getSize() . PHP_EOL);
print($tyrion->houseMotto() . PHP_EOL);
?>
