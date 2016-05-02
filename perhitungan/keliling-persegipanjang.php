<?php
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $keliling = 2 * ($panjang + $lebar);
    echo "<br/>K = 2 (P + L)<br/>K = 2 ($panjang + $lebar)<br>K = $keliling";
?>