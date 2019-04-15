<?php

include('Euron.class.php');

$euron = new Euron();

$euron->announceMotto(); //执行announceMotto()函数，让类euron访问到familyMotto。protected（受保护）：受保护的类成员可以被其自身以及其子类和父类访问。注意这里只有类能访问（通过method)，对象是无法直接访问的。
?>
