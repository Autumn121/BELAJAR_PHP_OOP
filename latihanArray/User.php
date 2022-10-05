<?php
class User{
public $gorengan = [
'Tempe Goreng' , 'Tempe Goreng' , 'Molen' , 'Risol' , 'Godok - Godok'
];

public $Data = [
[
'id' => 1,
'name' => 'Suryadi',
'address' => 'Penuin',
'age' => 19
],
[
'id' => 2,
'name' => 'Dion',
'address' => 'lucky',
'age' => 17
],
[
'id' => 3,
'name' => 'David',
'address' => 'Baloi Permai',
'age' => 18
]
];

public $isFound;
public $index = 1;


public function getId(){
foreach ($this->Data as $users => $value) {
echo $value . "<br>";
}
}
// public function getGorengan($name){
// $index = 1;
// echo 'Data didalam gorengan' . '<br>';
// foreach ($this->gorengan as $item) {
// echo $this->index++ .
// }
// }



// public function getGorengan(){
// // melakukan perulangan
// $index = 1;
// foreach ($this->gorengan as $item) {
// echo $index++ . '. ' . $item . '<br>';
// }
// }
}

// Inisialisasi class objek
$user = new User();

echo $user->getId();

// echo $user->getGorengan() . '<br>';
// echo $user->getGorengan();