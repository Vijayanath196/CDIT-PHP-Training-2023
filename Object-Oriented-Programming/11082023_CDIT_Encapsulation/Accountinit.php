<?php

include("AccountService.php");

$accountService = new AccountService();

$account = $accountService->createAccount();

$amountToDeposit = 500;
$accountService->deposit($account, $amountToDeposit);

$amountToWithdraw = 200;
$accountService->withdraw($account, $amountToWithdraw);

?>
