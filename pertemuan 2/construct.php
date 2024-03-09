<?php 
    class kendaraan{
        public $mesin;
        public $jml_roda;

        function __construct()
        {
            echo "ini adalah method construct";
        }
        // method
        public function nyalakanMesin($harga){
            echo "mesin menyala menggunakan ".$this->mesin;
            echo "<br>Dengan Harga ".$harga;
        }
    }
    //object
    $politron = new kendaraan();
    echo "<br>";
    $politron->mesin = 'listrik';
    $politron->nyalakanMesin($harga);
?>