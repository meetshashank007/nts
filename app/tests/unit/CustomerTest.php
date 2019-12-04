<?php
require_once(__DIR__ . '/../../src/Customer.class.php');

use PHPUnit\Framework\TestCase;

class CustomerTest extends TestCase{
    
    protected $customer;

    protected function setUp() : void {
        parent::setUp();
        $this->customer = new Customer();
    }

    public function testThatWeCanGetCustomerAccountBal(){
        $this->assertEquals($this->customer->getAcountBal(), 0);
    }

    public function testThatWeCanUpdateCustomerBalance(){
        $initialBalance = $this->customer->getAcountBal();
        $this->customer->updateAccBal(10);
        $this->assertEquals($this->customer->getAcountBal(), $initialBalance + 10);
    }

}