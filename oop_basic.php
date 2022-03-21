<?php
class Oop_Basic {
	private $a = 100;

	function test() {
		return $this->a;
	}
}

$test = new Oop_Basic();
echo $test->test();