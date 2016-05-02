<?php
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $luas = ($alas * $tinggi)/2;
    echo "<br/>L = 1/2 x a x t<br/>L = 1/2 x $alas x $tinggi<br>L = $luas";
?>