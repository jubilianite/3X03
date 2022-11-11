<?php
use PHPUnit\Framework\TestCase;
require 'checkpassword.php';

//class GumballMachineTest extends TestCase {
//
//	public $gumballMachineInstance;
//	
//	public function setup():void {
//		
//		$this->gumballMachineInstance = new GumballMachine();
//	}
//	
//	public function testIfWheelWorks() {
//		
//		$this->gumballMachineInstance->setGumballs(100);
//		
//		$this->gumballMachineInstance->turnWheel();
//		
//		$this->assertEquals(99, $this->gumballMachineInstance->getGumballs());
//	}
//}

class MyScriptTest extends TestCase {
    public function testMyFunction() {
        //include_once 'checkpassword.php';
        $result = checkpassword("password");
        $this->assertTrue($result == "Bad Password");
    }
}