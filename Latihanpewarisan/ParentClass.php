<?php


class ParentClass
{
public $name;

public function __construct($name)
{
$this->name = $name;
}

public function display()
{
echo "Nama : " . $this->name;
}
}

$produk = new ParentClass("Ini Class Produk");

echo $produk->display() . "<br>";