<?php
//Common function to handle Transaction for users account

trait BankTransferCommon {

    //check user bal fro withdraw
    function chkBal(Customer $user, int $amount) : bool {

        if($user->getAcountBal() < $amount){
            return false;
        }
        return true;
    }
}