<?php 
    require_once('koneksi.php');

    $query = 'SELECT * FROM layanan';
    if($res = $con->query($query)){
        echo 'Terdapat ' .$res->num_rows . ' baris<br>';

        while($row = $res->fetch_row()){
            echo '<h2>'. $row[1] . '</h2>';
            echo $row[2] . '<br>';
        }

    } else {
        echo 'Gagal mengambil data';
    }
?>