<?php
/*
2.	Sukurti klasę Piniginė. Sukurti dvi privačias savybes popieriniaiPinigai ir metaliniaiPinigai. 
Parašyti metodą ideti($kiekis), kuris prideda pinigus į piniginę. Jeigu kiekis nedidesnis už 2, 
tai prideda prie metaliniaiPinigai, jeigu kitaip- prie popieriniaiPinigai. Parašykite metodą 
skaiciuoti(), kuris suskaičiuotų ir atspausdintų popieriniaiPinigai ir metaliniaiPinigai sumą. 
Sukurti klasės objektą ir pademonstruoti veikimą. Nesvarbu kokios popierinės kupiūros ir metalinės 
monetos egzistuoja realiame pasaulyje.
*/

echo '<br>';
echo '<br>2. uzdavinio sprendimas ---------------<br>';
echo '<br>';

class Pinigine
{
    private $popieriniaiPinigai;
    private $metaliniaiPinigai;

    public function __construct()
    {
        $this->popieriniaiPinigai = 0;
        $this->metaliniaiPinigai = 0;
    }

    public function ideti($kiekis)
    {
        if ($kiekis <= 2) {
            $this->metaliniaiPinigai += $kiekis;
        } else {
            $this->popieriniaiPinigai += $kiekis;
        }
    }

    public function skaiciuoti()
    {
        return $this->metaliniaiPinigai + $this->popieriniaiPinigai;
    }
}

/*
8. Patobulinti 2 uždavinio piniginę taip, kad būtų galima skaičiuoti kiek piniginėje
 yra monetų ir kiek banknotų. Parašyti metodą monetos(), kuris skaičiuotų kiek yra piniginėje
  monetų ir metoda banknotai() - popierinių pinigų skaičiavimui.
  */

echo '<br>';
echo '<br>2. uzdavinio sprendimas ---------------<br>';
echo '<br>';

class Pinigas
{
    private $nominalas;

    public function __construct($verte)
    {
        $this->nominalas = $verte;
    }
    public function getVerte()
    {
        return $this->nominalas;
    }
}

class Pinigine2
{
    private $popieriniaiPinigai;
    private $metaliniaiPinigai;

    public function __construct()
    {
        $this->popieriniaiPinigai = [];
        $this->metaliniaiPinigai = [];
    }

    public function ideti($pinigas)
    {
        if ($pinigas->getVerte() <= 2) {
            $this->metaliniaiPinigai[] = $pinigas;
        } else {
            $this->popieriniaiPinigai[] = $pinigas;
        }
    }

    public function monetos()
    {
        return count($this->metaliniaiPinigai);
    }
    public function bannkotai()
    {
        return count($this->popieriniaiPinigai);
    }

    public function skaiciuoti()
    {
        $suma = 0;
        foreach ($this->popieriniaiPinigai as $banknotas) {
            $suma += $banknotas->getVerte();
        }
        foreach ($this->metaliniaiPinigai as $moneta) {
            $suma += $moneta->getVerte();
        }

        return $suma;
    }
}