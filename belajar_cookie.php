<?php

$mahasiswa = [
    'nama' => 'Ramadhan',
    'nim' => 'H1101191035'
];

setcookie('nim', 'H1101191035', time()+(86400*30), '/');

if (isset($_COOKIE['nim'])) {
    echo $_COOKIE['nim'];
} else {
    echo "Cookienya ndak ade";
}
