<?php
class Balok
{
    // deklarasikan atribut-atribut kelas Balok
    private $p;
    private $l;
    private $t;
    
    // definisikan metode konstruktor, setter ,dan getter
    public function __construct($p, $l, $t)
    {
        $this->p=$p;
        $this->l=$l;
        $this->t=$t;

    }

    public function getP(){
        return $this -> p;
    }

    public function getL(){
        return $this -> l;
    }

    public function getT(){
        return $this -> t;
    }

    // definisikan metode menghitung volume, luas permukaan, 

    public function volume()
    {
        return $volume=$this->p*$this->l*$this->t;
    }

    public function luas(){
        return $luas=2*(($this->p*$this->l)+($this->p*$this->t)+($this->l*$this->t));
    }
}

$balok_1 = new Balok(4, 8, 5);
$balok_2 = new Balok(3, 10, 12);

echo "Balok 1"."<br>";
echo "Volume: ".$balok_1->volume()."<br>";
echo "Luas: ".$balok_1->luas()."<br>"."<br>";
echo "Balok 2"."<br>";
echo "Volume: ".$balok_2->volume()."<br>";
echo "Luas: ".$balok_2->luas()."<br>";

// contoh output: Balok

// Balok 1
// Volume: 160
// Luas Permukaan: 184

// Balok 2
// Volume: 360
// Luas Permukaan: 372