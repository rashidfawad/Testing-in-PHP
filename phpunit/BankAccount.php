<?php
/**
 * Created by PhpStorm.
 * User: Rashid
 * Date: 21/05/2015
 * Time: 12:49
 */

class BankAccount
{
	protected $balance = 0;
	private $fh = null;

	public function getBalance()
	{
		return $this->balance;
	}
	protected function setBalance($balance)
	{
		if ($balance >= 0) {
			$this->balance = $balance;
		} else {
			throw new RuntimeException;
		}
	}
	public function depositMoney($balance) {
		$this->setBalance($this->getBalance() + $balance);
		return $this->getBalance();
	}
	public function withdrawMoney($balance)
	{
		$this->setBalance($this->getBalance() - $balance);
		return $this->getBalance();
	}


}