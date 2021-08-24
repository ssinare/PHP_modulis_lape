<?php
/*
S9.	(STATIC) Sukurkite klasę MarsoPalydovas.  Kontroliuokite objekto kūrimą iš 
klasės naudodami statinį metodą. Padarykite taip, kad iš viso būtų galima sukurti
tik du objektus iš šitos klasės. Pirmam sukuriamam objektui įrašykite privačią 
savybę title lygią stringui “Deimas”, o antram tokią pat savybę tik lygią stringui
“Fobas”. Bandant sukurti trečią objektą, turėtų būti grąžinamas vienas iš anksčiau
sukurtų objektų parinktas atsitiktine tvarka.
*/

//use MarsoPalydovas as GlobalMarsoPalydovas;

class MarsoPalydovas
{
    private $title;
    private static $deimas = null;
    private static $fobas = null;

    private function __construct($title)
    {
        $this->title = $title;
    }

    public static function get(): MarsoPalydovas
    {
        if (!self::$deimas) {
            return self::$deimas = new MarsoPalydovas('Deimas');
        } elseif (!self::$fobas) {
            return self::$fobas = new MarsoPalydovas('Fobas');
        } else {
            return ((bool)rand(0, 1)) ? self::$deimas : self::$fobas;
        }
    }
}