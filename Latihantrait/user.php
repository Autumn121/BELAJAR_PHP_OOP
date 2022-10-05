<?php
include "Servicegreating.php";

class user
{
   use Servicegreating;
}

$user = new user();

echo $user->name;