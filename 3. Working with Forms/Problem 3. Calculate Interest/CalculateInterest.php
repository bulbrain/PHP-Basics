<?php
require "CalculateInterest.html";
if(isset($_GET['submit'])){
    $amount = htmlentities($_GET['amount']);
    $currency = htmlentities($_GET['currency']);
    $compound = 100 + htmlentities($_GET['compound']) / 12 ;
    $months = htmlentities($_GET['months']);
    for($i = 0; $i < $months; $i++) {
        $amount = $amount * $compound / 100;
    }
    echo $currency . number_format($amount, 2);
}
?>