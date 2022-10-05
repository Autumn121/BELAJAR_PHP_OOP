<?php
include "Handphone.php";
class User{

    public function tekanTombol(Handphone $Handphone){
        echo $Handphone->tampilkan();
    }

}
$user = new User ();