<?php
// require_once 'A.php';
// require_once 'B.php';
// require_once 'C.php';
// require_once 'User.php';

spl_autoload_register(function ( $nameClass){
      require_once 'produk/' . $nameClass . '.php';
});