<?php
    $alas = $_POST['alas'];
    $miring = $_POST['miring'];
    $keliling = 2 * ($miring + $alas);
    echo "<br/>K = 2 (a + m)<br/>K = 2 ($alas + $miring)<br>K = $keliling";
?>