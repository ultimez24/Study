<?php
session_start();

$_SESSION['bank_details'] = ["account_name"=>"shwetha" , "bank_name"=>"SBI" , "account _number"=>"123456789" , "ifsc_code"=>"SBIN000123" , "branch"=>"Hubli" ,"account_type"=>"savings"];
echo "Bank details stored successfully in session.";
?>
