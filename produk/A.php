<?php

class A{
    public function __construct()
    {
        echo 'ini dari class' . static::class . '<br>';
    }
}