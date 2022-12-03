<?php

require_once ('lib/nusoap.php'); 
 
$server = new soap_server(); 



$server->configureWSDL("MSA WebService");
$server->register(

    "BusRoutes",
    array("Routes"=>'string'),
    array("Price"=>'int')
);

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA:'';
$server->service($HTTP_RAW_POST_DATA);

?>  