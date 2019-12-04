<?php
require_once(__DIR__ . '/../../src/Cashier.class.php');

use PHPUnit\Framework\TestCase;

class CashierTest extends TestCase{
    
    protected $customer;
    protected $cashier;

    protected function setUp() : void {
        parent::setUp();
        $this->customer = new Customer();
        $this->cashier = new Cashier();
    }

    public function testThatDepositRightAmountToCustomerAccountBal(){
        $baseAmount = $this->customer->getAcountBal();
        $this->cashier->deposite($this->customer, 999);
        $this->assertEquals($this->customer->getAcountBal(), $baseAmount + 999);
    }
    
    public function testThatRightAmountWthdrawFromCustomerAccountBal(){
        $baseAmount = $this->customer->getAcountBal();
        $this->cashier->deposite($this->customer, - 9);
        $this->assertEquals($this->customer->getAcountBal(), $baseAmount - 9);
    }
}