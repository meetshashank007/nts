<?php

include_once('./src/BankTransact.interface.php');
include_once('BankTransfer.traits.php');

/*
* Managing customers transactions with associated user account
*/

class AtmCdm implements BankTransact {

    use BankTransferCommon;
    
    //deposite
    function deposite(Customer $user, int $amount) : Customer {
        //This function is called to deposite the amount in the account holder
        echo 'ATM/CDM depositing Amount ' . $amount . ' to Customer Account <br>';
        $user->updateAccBal($amount);
        return $user;
    }
    
    //withdraw
    function withdraw(Customer $user, int $amount) : Customer {
        //This function is called to withdraw the amount in the account holder
        if($this->chkBal($user, $amount)){
            $user->updateAccBal(- $amount);
            echo 'ATM/CDM withdrawing Amount ' . $amount . ' from Customer Account <br>';
        }else{
            echo 'Insufficent Bal in the user account! <br>';
        }
        return $user;
    }

}