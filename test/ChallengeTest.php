<?php

use PHPUnit\Framework\TestCase;
require('Challenge.php');

final class ChallengeTest extends TestCase{

	public function testNumberDividerThree(){
		$number = 9;		
		$numberFactory = new NumberDividerFactory();
		$result = $numberFactory->validation($number);
		$this->expectOutputString('Linio'.PHP_EOL);
	}

	public function testNumberDividerFive(){
		$number = 20;		
		$numberFactory = new NumberDividerFactory();
		$result = $numberFactory->validation($number);
		$this->expectOutputString('IT'.PHP_EOL);
	}


	public function testNumberDividerFifteen(){
		$number = 15;		
		$numberFactory = new NumberDividerFactory();
		$result = $numberFactory->validation($number);
		$this->expectOutputString('Linianos'.PHP_EOL);
	}

	public function testNumberDividerFailing(){
		$number = 4;		
		$numberFactory = new NumberDividerFactory();
		$result = $numberFactory->validation($number);
		$this->expectOutputString("$number".PHP_EOL);
	}


}

?>