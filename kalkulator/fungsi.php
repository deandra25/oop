<?php

class Kalkulator{

    private $x;
    private $y;

    public function setTambah($x, $y){
        $this->x= $x;
        $this->y = $y; 
        $hasil = $this->x + $this->y;
        return $hasil;

}

public function setkali($x, $y){
    $this->x= $x;
    $this->y = $y; 
    $hasil = $this->x* $this->y;
    return $hasil;

}

public function setkurang($x, $y){
    $this->x= $x;
    $this->y = $y; 
    $hasil = $this->x - $this->y;
    return $hasil;

}

public function setBagi ($x, $y){
    $this->x = $x; 
    $this->y = $y;
    $hasil = $this->x / $this->y;
    return $hasil;

}

}

?>