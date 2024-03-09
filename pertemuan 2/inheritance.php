<?php
    class kendaraan
    {
        public $mesin;
        public $roda;

        public function menyalakan($kapasitasMesin){
            $this->mesin = $kapasitasMesin;
            echo $this->mesin." dinyalkan";
        }
    }

    class mobil extends kendaraan
    {
        public function berjalanMaju(){
            echo "mobiil berjalan maju";
        }
    }

    $sedan = new mobil();
    $sedan->menyalakan(1500);
?>