<?php
/*
7.	Sukurti klasę Grybas. Sukurti klasę Krepsys. Krepsys turi konstantą dydis lygią 500. Grybas 
turi tris privačias savybes: valgomas, sukirmijes, svoris. Kuriant Grybo objektą jo savybės turi
 būti atsitiktinai priskiriamos taip: valgomas- true arba false, sukirmijes- true arba false ir 
 svoris- nuo 5 iki 45. Eiti grybauti, t.y. Kurti naujus Grybas objektus, jeigu nesukirmijęs ir 
 valgomas dėti į Krepsi objektą, kol bus pririnktas pilnas krepšys nesukirmijusių ir valgomų grybų 
 (gali būti biški daugiau nei dydis).
*/
class Grybas
{
    private $valgomas;
    private $sukirmijes;
    private $svoris;


    public function __construct()
    {
        $this->valgomas = rand(0, 1);
        $this->sukirmijes = rand(0, 1);
        $this->svoris = rand(5, 45);
    }

    public function getGryboSvoris()
    {
        return $this->svoris;
    }
    public function getArValgomas()
    {
        return $this->valgomas;
    }
    public function getArSukirmijes()
    {
        return $this->sukirmijes;
    }
}


// class Grybas {
//     private $valgomas, $sukirmijes, $svoris;

//     public function __construct()
//     {
//         $this->valgomas = (bool) rand(0, 1);
//         $this->sukirmijes = (bool) rand(0, 1);
//         $this->svoris = rand(5, 45);
//     }

//     public function __get($prop)
//     {
//         return $this->$prop;
//     }
// }




class Krepsys
{
    public const DYDIS = 500;
    private $svoris;
    private $grybai = [];

    public function __construct()
    {
        $this->svoris = 0;
    }
    public function getSvoris()
    {
        return $this->svoris;
    }
    public function idetiGryba($grybas)
    {
        $this->svoris += $grybas->getGryboSvoris();
        $this->grybai[] = $grybas;
    }
}

// class Krepsys
// {
//     const DYDIS = 500;

//     private $pririnkta = 0;


//     public function deti(Grybas $grybas): bool
//     {
//         if (!$grybas->sukirmijes && $grybas->valgomas) {
//             $this->pririnkta += $grybas->svoris;
//         }
//         return self::DYDIS > $this->pririnkta;
//     }
// }