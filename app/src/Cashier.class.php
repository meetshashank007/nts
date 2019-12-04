<?php

include_once('./src/BankTransact.interface.php');
include_once('BankTransfer.traits.php');

/*
* Managing transactions with customers using cash registers
* Collecting payments whether in cash or credit
*/

class Cashier implements BankTransact {

    use BankTransferCommon;
    
    //deposite
    function deposite(Customer $user, int $amount) : Customer{
        //This function is called to deposite the amount in the account holder
        echo 'Cashier depositing Amount ' . $amount . ' to Customer Account <br>';
        $user->updateAccBal($amount);
        return $user;
    }
    
    //withdraw
    function withdraw(Customer $user, int $amount) : Customer {
        //This function is called to withdraw the amount in the account holder
        if($this->chkBal($user, $amount)){
            $user->updateAccBal(- $amount);
            echo 'Cashier withdrawing Amount ' . $amount . ' from Customer Account <br>';
        }else{
            echo 'Insufficent Bal in the user account! <br>';
        }
        return $user;
    }
}