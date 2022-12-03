<?php

require_once ('lib/nusoap.php'); 
 
$server = new soap_server(); 



$server->configureWSDL("MSA WebService");
$server->register(

    "Tuition Fees.Deposit",
    array("cost"=>'string'),
    array("price"=>'int')
);

$server->register(

    "Tuition Fees.Discount",
    array("DiscountPrct"=>'string'),
    array("percentage"=>'int')
);

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA:'';
$server->service($HTTP_RAW_POST_DATA);

?>  