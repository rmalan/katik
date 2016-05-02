<?php
    $diagonal1 = $_POST['diagonal1'];
    $diagonal2 = $_POST['diagonal2'];
    $luas = ($diagonal1 * $diagonal2)/2;
    echo "<br/>L = 1/2 x (d1 + d2)<br/>L = 1/2 x ($diagonal1 x $diagonal2)<br>L = $luas";
?>