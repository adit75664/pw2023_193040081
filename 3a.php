<?php 

    $r = 10;

    echo "<h4>Menghitung Luas Lingkaran</h4>";
    function hitungLuasLingkaran($r) {
        $luas = intval( M_PI * $r * $r);
        return "Jari-jari = $r cm <br> Luas Lingkaran = $luas cm²";
      
    }
    
    echo hitungLuasLingkaran(10);

    echo "<hr>";
    
    echo "<h4>Menghitung Keliling Lingkaran</h4>";
    function hitungKelilingLingkaran($r) {
        $keliling = intval( 2 * M_PI * $r);
        return  "Jari-jari = $r cm <br> Keliling Lingkaran = $keliling cm";
     }

    echo hitungKelilingLingkaran(20);

    echo "<hr>";



?>