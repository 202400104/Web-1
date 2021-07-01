<?php

$awal=$_GET['awal'];
$akhir=$_GET['akhir'];
$increment=$_GET['increment'];
    echo "Nilai Awal  : ",$awal,"<br>";
    echo "Nilai Akhir : ",$akhir,"<br>";
    echo "Increment   : ",$increment;
    echo "<br>Tampil  : <br>";
    
    $x=$awal;

    do {
        echo $x,"<br>";
        $x+=$increment;
    } while ($x <= $akhir);

?>