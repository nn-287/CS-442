<?php 
require_once ('lib/nusoap.php'); 

function Deposit(int $idinitial)
{
    $cost=array(

        '200'=>20000,
        '2021'=>23000,
        '2022'=>25000,
        '2023'=>26000
    );

    foreach($cost as $c=>$p)
    {
        if($cost==$c)
        {
            $price=$p;
        }
    }
    return "The cost needed to be deposited according to your id initials is".$price;
}



function Discount(int $GPA)
{
    $DiscountPrct=array(

        '3.6'=>2,
        '3.7'=>3,
        '3.75'=>3.5,
        '3.8'=>4,
        '3.9'=>5
    );

    foreach($DiscountPrct as $D=>$prct)
    {
        if($DiscountPrct==$D)
        {
            $percentage=$prct;
        }
    }
    return "The discount % according to your GPA is".$percentage;


}



function BusRoute(string $route)
{
    $Routes=array(

        'SheikhZayed'=>5000,
        'October1'=>2500,
        'October2'=>3000,
        'Mohandseen'=>6000,
        'Tagamo3'=>10000
    );


    foreach($Routes as $R=>$prc)
    {
        if($Routes==$R)
        {
            $Price=$prc;
        }
    }
    return "The price based on your destination route".$Price;
}


function FoodDelieveryService(string $restaurantname)
{
    $Restaurants=array(

        'Macdonalds'=>5,
        'Hardees'=>4,
        'KFC'=>4,
        'Willys'=>3,
        'Mince'=>3
    );


    foreach($Restaurants as $Rt=>$perct)
    {
        if($Restaurants==$Rt)
        {
            $Percentage=$perct;
        }
    }
    return "The discount % according to the restaurant discount offers".$Percentage;
}
?> 