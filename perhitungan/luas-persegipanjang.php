<?php
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $luas = $panjang * $lebar;
    echo "<br/>L = P x L<br/>L = $panjang x $lebar<br>L = $luas";
?>