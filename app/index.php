<?php
declare(strict_types=1);
include_once('./src/Customer.class.php');
include_once('./src/Cashier.class.php');
include_once('./src/AtmCdm.class.php');

//create new customer
$cunstomer = new Customer();

//check user account bal
$cunstomer->showAcountBal();

//Add amount to users account
$cunstomer->updateAccBal(10)->showAcountBal();


$cashier = new Cashier();
$cashier->deposite($cunstomer, 10)->showAcountBal();
$cashier->withdraw($cunstomer, 50)->showAcountBal();

$atmcdm = new AtmCdm();
$atmcdm->deposite($cunstomer, 15)->showAcountBal();
$atmcdm->withdraw($cunstomer, 5)->showAcountBal();
