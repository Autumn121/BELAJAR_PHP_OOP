<?php
include "Fuel.php";
class kendaraan implements Fuel
{
    public function getName($type = "pertamax turbo") : string
    {
        // $str = "ini dari interface fuel";
        return $type;
    }

    
}

$kendaraan = new kendaraan();
echo $kendaraan->getName(type: "solar");