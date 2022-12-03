<?php

require_once ('lib/nusoap.php'); 
 
$server = new soap_server(); 



$server->configureWSDL("MSA WebService");
$server->register(

    "FoodDelievery",
    array("Restaurants"=>'string'),
    array("Percentage"=>'int')
);

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA:'';
$server->service($HTTP_RAW_POST_DATA);

?>  