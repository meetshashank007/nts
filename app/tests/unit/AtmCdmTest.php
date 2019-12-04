<?php
require_once(__DIR__ . '/../../src/AtmCdm.class.php');

use PHPUnit\Framework\TestCase;

class AtmCdmTest extends TestCase{

    protected $customer;
    protected $atmcdm;

    protected function setUp() : void {
        parent::setUp();
        $this->customer = new Customer();
        $this->atmcdm = new AtmCdm();
    }

    public function testThatDepositRightAmountToCustomerAccountBal(){
        $baseAmount = $this->customer->getAcountBal();
        $this->atmcdm->deposite($this->customer, 100);
        $this->assertEquals($this->customer->getAcountBal(), $baseAmount + 100);
    }
    
    public function testThatRightAmountWthdrawFromCustomerAccountBal(){
        $baseAmount = $this->customer->getAcountBal();
        $this->atmcdm->deposite($this->customer, - 9);
        $this->assertEquals($this->customer->getAcountBal(), $baseAmount - 9);
    }
}