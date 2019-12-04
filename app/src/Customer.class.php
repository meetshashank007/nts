<?php

class Customer{
    
    private $account_bal;
    
    public function __construct(int $amt = 0){
        $this->account_bal = $amt;
    }

    public function showAcountBal() : Customer {
        //show account bal
        echo "Current Account Bal : ", $this->account_bal, '<br>';
        return $this;
    }
    
    public function getAcountBal() : int {
        //get account bal amount
        return $this->account_bal;
    }

    function updateAccBal(int $amt) : Customer {
        //function to update the account bal of the current customer
        $this->account_bal += $amt;
        return $this;
    }
}