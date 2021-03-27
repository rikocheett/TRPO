<?php
class A{

}

class B extends A{
	public function __construct($a){
		$this->a = $a;
	}

	protected $a;
}

class C extends B{
	public function __construct($a, $b){
		$this->b = $b;
		parent::__construct($a);
	}

	protected $b;
}

$a1 = new A();
$b2 = new B($a1);
$b3 = new B($b2);
$b4 = new B($b3);
$c6 = new C($a1, $b4);