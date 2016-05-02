<?php
    $sisi1 = $_POST['sisi1'];
    $sisi2 = $_POST['sisi2'];
    $tinggi = $_POST['tinggi'];
    $luas = (($sisi1 + $sisi2) * $tinggi)/2;
    echo "<br/>L = 1/2 x (S1 + S2) x t<br/>L = 1/2 x ($sisi1 + $sisi2) x $tinggi<br>L = $luas";
?>