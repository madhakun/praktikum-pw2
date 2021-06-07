<?php
$nama_file = $_FILES['gambar']['name'];
$nama_sementara = $_FILES['gambar']['tmp_name'];
$tipe_file = $_FILES['gambar']['type'];
$folder_tujuan = 'gambar/';
echo mime_content_type($nama_sementara) . '<br>';
$nama = date('Ymds') . basename($nama_file);

move_uploaded_file($nama_sementara, $folder_tujuan . $nama);