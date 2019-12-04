<?php
include_once('./src/Customer.class.php');
/*
* common interface fro the bank transactions
*/
interface BankTransact {
    public function deposite(Customer $user, int $amount) : Customer;
    public function withdraw(Customer $user, int $amount) : Customer;
    public function chkBal(Customer $user, int $amount) : bool;
}