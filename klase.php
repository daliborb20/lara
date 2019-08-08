<?php
//require "funkcije.php";
class Zadaci
{
    public $opis;
    public $zavrsen = false;

    public function __construct($opis)
    {
        $this -> opis = $opis;
    }
    public function zavrsi()
    {
        $this -> zavrsen = true;
    }
    public function zadatakZavrsen()
    {
        return $this -> zavrsen;
    }
    public function opisZad()
    {
        return $this -> opis;
    }
}

//$zadatak = new Zadaci('Idi u biblioteku i uci');//instanciranje klase - novi objekat
//$zadatak -> zavrsi();
//
$zadace = [
    new Zadaci("Nacui preduzetnistvo"),
    new Zadaci("Nauci komuniciranje"),
    new Zadaci("Kupi knjigu"),
    new Zadaci("Kupi paradajz")
];
//dd($zadaci);
$zadace[0] -> zavrsi();

require "index.klase.php";
//var_dump($zadatak -> zadatakZavrsen());
