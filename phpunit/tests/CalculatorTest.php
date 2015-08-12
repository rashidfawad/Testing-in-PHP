<?php
require_once '/../Calculator.php';

class CalculatorTest extends PHPUnit_Framework_TestCase {
	/**
	 * @covers Calculator::addByOne
	 */
	protected $calculator;
	public function setUp() {
		$this->calculator = new Calculator();
	}

	public function testCalculatorCanAddByOne()
	{
		$result = $this->calculator->addByOne();
		$this->assertSame(1, $result);
	}
	/**
	 * @covers Calculator::addByValue
	 * @covers Calculator::subtractByValue
	 * @covers Calculator::multiplyByValue
	 * @covers Calculator::divideByValue
	 */
	public function testCalculatorRefusesNonIntegerValue() {

		$result = $this->calculator->addByValue('foo');
		$this->assertSame(0, $result);
		$result = $this->calculator->subtractByValue('foo');
		$this->assertSame(0, $result);
		$result = $this->calculator->multiplyByValue('foo');
		$this->assertSame(0, $result);
		$result = $this->calculator->divideByValue('foo');
		$this->assertSame(0, $result);

	}
	/**
	 * @covers Calculator::addByValue
	 */
	public function testCalculatorAddsIntegerValue() {

		$result = $this->calculator->addByValue(3);
		$this->assertSame(3, $result);
	}
	/**
	 * @covers Calculator::subtractByValue
	 */
	public function testCalculatorSubtractsIntegerValue()
	{

		$result = $this->calculator->subtractByValue(3);
		$this->assertSame(-3, $result);

	}
	/**
	 * @covers Calculator::multiplyByValue
	 */
	public function testCalculatorMultipliesIntegerValue()
	{

		$result = $this->calculator->multiplyByValue(3);
		$this->assertSame(0, $result);
	}
	/**
	 * @covers Calculator::divideByValue
	 * @expectedException \InvalidArgumentException
	 * @expectedExceptionMessage Division by zero
	 */
	public function testCalculatorRejectsDivisionByZero()
	{

		$result = $this->calculator->divideByValue(0);
		$this->assertSame(0, $result);

	}
	/**
	 * @covers Calculator::divideByValue
	 */
	public function testCalculatorDividesIntegerValue() {

		$result = $this->calculator->divideByValue(3);
		$this->assertSame(0, $result);
	}

	public function testSimpleDivide() {

		$result = $this->calculator->simpleDivide(6,3);
		$this->assertSame(2, $result);
		$result = $this->calculator->simpleDivide(6,0);
		$this->assertSame(0, $result);

	}

	public function tearDown(){
		$this->calculator = null;
	}

}