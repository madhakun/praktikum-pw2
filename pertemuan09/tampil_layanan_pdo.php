<?php 
    require_once('koneksi_pdo.php');

    $stm = $pdo->query('SELECT * FROM layanan');

    $rows = $stm->fetchAll(PDO::FETCH_NUM);

    foreach($rows as $row){
        echo '<h2>'. $row[1] . '</h2>';
        echo $row[2] . '<br>';
    }
?>