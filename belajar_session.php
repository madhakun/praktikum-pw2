<?php

session_start();

$_SESSION['nama'] = 'Madha';
$_SESSION['alamat'] = 'Kuala Dua';
$_SESSION['nohp'] = '083141537896';


echo "Alamat saya adalah pada " . $_SESSION['alamat'];
