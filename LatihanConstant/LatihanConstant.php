<?php

// const CHECK_STATUS = 'HADIR';

const NAMA_GORENGAN = [
// Constant dengan Nilai Array Biasa
'TAHU ISI', 'BALA-BALA', 'BAKWAN'
];

const STUDENTS = [
// Constant dengan Nilai Array Asosiasi
'name' => 'Arief',
'age' => 17,
'role' => 'Students',
'is_active' => true
];

const USER = [
// Const dengan Nilai Multi Dimensi
[
'name' => 'Arip',
'age' => 17,
'role' => 'Students',
'is_active' => true
],
[
'name' => 'Agus',
'age' => 17,
'role' => 'Guru',
'is_active' => true
],
[
'name' => 'Wills',
'age' => 17,
'role' => 'Students',
'is_active' => false
]
];

$index = 1;

// foreach (NAMA_GORENGAN as $key => $value) {
// echo $key + 1 . '. ' . $value . '<br>';
// }
// var_dump(STUDENTS);
// Check Nilai Seluruh Array
// var_dump(USER[0]);
foreach (USER as $key => $value) {
    echo 'No' . '. ' . $index++ . '<br>';
    echo 'Nama: ' . $value['name'] . '<br>';
    echo 'Umur: ' . $value['age'] . '<br>';
    echo 'Role: ' . $value['role'] . '<br>';
    echo 'Status: ' . $value['is_active'];
    echo '<hr>';
    }
    
    // Nilai Constant Menggunakan Method Define dengan 1 Nilai
    define('CHECK_STATUS', 'Hadir');
    // Menampilkan Nilai
    var_dump(CHECK_STATUS);