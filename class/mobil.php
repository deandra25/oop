<?php

class mobil{
    public $kondisimobil;
    public $merkmobil;
    public $namamobil;
    public $warnamobil;
    public $kecepatanmobil;

    public function setInputData($merkmobil,$namamobil,$warnamobil,$kecepatanmobil){
        $this->merkmobil=$merkmobil;
        $this->namamobil=$namamobil;
        $this->warnamobil=$warnamobil;
        $this->kecepatanmobil=$kecepatanmobil;
    }
    public function setKondisimob($kondisimobil){
        $this->kondisimobil=$kondisimobil;
    }
    public function getCetak(){
        echo "Kondisi Mobil ".$this->kondisimobil;
        echo "<br>";
        echo "Merk Mobil: ".$this->merkmobil;
        echo "<br>";
        echo "Warna Mobil: ".$this->warnamobil;
        echo "<br>";
        echo "Kecepatan Mobil: ".$this->kecepatanmobil;
        echo "<br> =====================================<br>";

    }
}

$mob1 = new mobil();
$mob1->setInputData("Toyota","Fortuner","Hitam","250");
$mob1->setKondisimob("Maju");
$mob1->getCetak();

$mob2 = new mobil();
$mob2->setInputData("Honda","Brio","Hijau","100");
$mob2->setKondisimob("Mundur");
$mob2->getCetak();

?>