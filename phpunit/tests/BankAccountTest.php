<?php
/**
 * Created by PhpStorm.
 * User: Rashid
 * Date: 21/05/2015
 * Time: 12:50
 */
require_once __DIR__ . '/../BankAccount.php';

class BankAccountTest extends PHPUnit_Framework_TestCase
{
	protected $ba;
	protected function setUp()
	{
		$this->ba = new BankAccount;
	}
	/**
	 * @covers BankAccount::getBalance
	 */
	public function testBalanceIsInitiallyZero()
	{
		$this->assertEquals(0, $this->ba->getBalance());
	}
	/**
	 * @covers BankAccount::withdrawMoney
	 */
	public function testBalanceCannotBecomeNegative()
	{
		try {
			$this->ba->withdrawMoney(1);
		} catch (RuntimeException $e) {
			$this->assertEquals(0, $this->ba->getBalance());
			return;
		}
	}
	/**
	 * @covers BankAccount::depositMoney
	 */
	public function testBalanceCannotBecomeNegative2()
	{
		try {
			$this->ba->depositMoney(-1);
		} catch (RuntimeException $e) {
			$this->assertEquals(0, $this->ba->getBalance());
			return;
		}
	}
	/**
	 * @covers BankAccount::getBalance
	 * @covers BankAccount::depositMoney
	 * @covers BankAccount::withdrawMoney
	 */
	public function testDepositWithdrawMoney()
	{
		$this->assertEquals(0, $this->ba->getBalance());
		$this->ba->depositMoney(1);
		$this->assertGreaterThanorEqual(1, $this->ba->getBalance());
		$this->ba->withdrawMoney(1);
		$this->assertEquals(0, $this->ba->getBalance());
	}
}
 