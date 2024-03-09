<?php
    class perhitungan{
        public $phi = 3.14;

        function __construct()
        {
            echo "ini adalah kelas perhitungan";
        
        }
        
        //method 
        public function kerucut($jarijari,$garispelukis){
            $luas = $this->phi = $jarijari * ($jarijari * $garispelukis);
            echo "luas kerucut = ".$luas;
        }

        public function kubus($sisi){
            $luas = 6 * $sisi;
            echo "luas kubus =".$luas;
        }

        public function balok($panjang, $luas, $tinggi){
            $luas = 2 * (($panjang * $luas) + ($luas * $tinggi) + ($panjang * $tinggi));
            echo "luas balok =".$luas;
        }



    }

    // objek
    $hasil = new perhitungan();
    echo "<br>";
    $hasil->kerucut(2,19);
    echo "<br>";
    $hasil->kubus(6);
    echo "<br>";
    $hasil->kubus(6,3,4);



?>