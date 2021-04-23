<?php
// Pertemuan 2 - PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

// echo "Ramadhan<br> ";
// print "Ramadhan<br> ";
// print_r("Ramadhan<br> ");
// var_dump("Ramadhan");


// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP


// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $nama = "Ramadhan";
// echo "Halo. nama saya $nama";

// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x + $y;

// Penggabungan string / concatenation / concat
// .
// $nama_depan = "Rama";
// $nama_belakang = "dhan";
// echo $nama_depan . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "Rama";
// $nama .= "dhan";
// echo $nama;

// Perbandingan
// <, >, <=, >=, ==, !=
// var_dump(1 == "1");

// Identitas
// ===, !==
// var_dump(1 === "1");

// Logika
// &&, ||, !
$x = 30;
var_dump($x < 20 || $x %2 == 0)
?>