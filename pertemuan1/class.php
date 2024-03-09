<?php
    class Motor
    {
        // property
        public $kenalpot = 1;
        public $sepion = 2;
        public $velg = 'palang';
        public $ban = 'batlax';
        
        // method
        public function Jalan()
        {
            echo "Motor sudah berjalan yang memiliki kenalpot sebanyak".$this->kenalpot."<br>";
        }

        public function Mogok()
        {
            echo "Motor mogok cek bensin <br>";
        }

        public function Rem()
        {
            echo "Motor berhenti <br>";
        }
    }

    class Mobil
    {
        // property
        public $kenalpot;
        public $sepion;
        public $velg;
        public $ban;
        
        // method
        public function Jalan()
        {
            echo "Mobil sudah berjalan <br>";
        }

        public function Mogok()
        {
            echo "Mobil mogok cek bensin <br>";
        }

        public function Rem()
        {
            echo "Mobil berhenti <br>";
        }
    }

    //instansiasi => objek
    // $rxking = new Motor();
    // $rxking->Mogok();
    // $rxking->Rem();
    // $rxking->Jalan();

    $vario = new Motor();
    $vario->kenalpot = 10;
    $vario->Jalan();
?>