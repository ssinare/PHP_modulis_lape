<?php
/*
10.	(STATIC) Sukurti klasę Tenisininkas. Klasė Tenisininkas turi privačią savybę vardas,
 privačią savybę kamuoliukas  (true jei turi ir false jei ne) privačią static savybę zaidejas1, 
 privačią static savybę zaidejas2 (žaidėjų objektams saugoti)  Klasė turi tokius metodus: 
A. Public arTuriKamuoliuka();
B. Public perduotiKamuoliuka() Perduoda kamuoliuką kitam Tenisininkas objektui;
C. Public static zaidimoPradzia() Perduoda kamuoliuką atsitiktiniam žaidėjo objektui;
Sukurti du Tenisininkas objektus. Kamuoliuko neturi nei vienas. Iškviesti statinį metodą 
zaidimoPradzia() ir kažkuriam žaidėjui priskirti kamuoliuką. Žaidėjo objekto metodu perduotiKamuoliuka()
 perduoti kamuoliuką kitam žaidėjui ir grąžinti atgal iš kito žaidėjo objekto. 
*/

class Tenisininkas
{

    private $vardas, $kamuoliukas = false;
    private static $zaidejas1, $zaidejas2;

    public function __construct($vardas)
    {
        $this->vardas = $vardas;
        //  $this->kamuoliukas = false;
        if (!isset(self::$zaidejas1)) { //(false==isset(self::$zaidejas1))
            self::$zaidejas1 = $this;
            return;
        } elseif (!isset(self::$zaidejas2)) {
            self::$zaidejas2 = $this;
            return;
        } else {
            echo 'Sukurti abu žaidėjai<br>';
        }
    }

    public function arTuriKamuoliuka()
    {
        return $this->kamuoliukas;
    }
    public function perduotiKamuoliuka()
    {
        if (self::$zaidejas1->arTuriKamuoliuka()) {
            self::$zaidejas2->kamuoliukas = true;
            self::$zaidejas1->kamuoliukas = false;
        } else {
            self::$zaidejas2->kamuoliukas = false;
            self::$zaidejas1->kamuoliukas = true;
        }
    }
    public static function zaidimoPradzia()
    {
        if (rand(0, 1) == 1) {
            self::$zaidejas1->kamuoliukas = true;
        } else {
            self::$zaidejas2->kamuoliukas = true;
        }
    }
}



// class Tenisininkas
// {

//     private $vardas;
//     private $kamuoliukas = false;
//     private static $zaidejas1;
//     private static $zaidejas2;

//     private static $start = false;

//     public function __construct($name)
//     {
//         $this->vardas = $name;
//         if (self::$zaidejas1 === null) {
//             self::$zaidejas1 = $this;
//             return;
//         }
//         if (self::$zaidejas2 === null) {
//             self::$zaidejas2 = $this;
//             return;
//         }
//         echo '<h3>Tenisas ne futbolas, vartininko nereik.</h3>';
//     }

//     public static function zaidimoPradzia()
//     {
//         if (self::$zaidejas1 === null || self::$zaidejas2 === null) {
//             echo '<h3>Negali pats su savimi žaisti</h3>';
//             die;
//         }
//         rand(0, 1) ?
//             self::$zaidejas1->perduotiKamuoliuka() :
//             self::$zaidejas2->perduotiKamuoliuka();
//         self::$start = true;
//     }


//     public function arTuriKamuoliuka()
//     {
//         return $this->kamuoliukas;
//     }

//     public function __get($prop)
//     {
//         if ($prop == 'vardas') {
//             return $this->vardas;
//         }
//     }

//     public function __set($prop, $val)
//     {
//         if ($prop == 'kamuoliukas') {
//             $this->kamuoliukas = $val;
//         }
//     }


//     public function perduotiKamuoliuka()
//     {

//         if (self::$zaidejas1 === null || self::$zaidejas2 === null) {
//             echo '<h3>Negali pats su savimi žaisti</h3>';
//             die;
//         }
//         if (!$this->kamuoliukas && self::$start) {
//             echo '<h3>Perduoti negali, nes neturi kamuoliuoko</h3>';
//             die;
//         }

//         $this->kamuoliukas = false;
//         // this is 1
//         if ($this->vardas == self::$zaidejas1->vardas) {
//             self::$zaidejas2->kamuoliukas = true;
//         }
//         // this is 2
//         elseif ($this->vardas == self::$zaidejas2->vardas) {
//             self::$zaidejas1->kamuoliukas = true;
//         }
//     }
// }