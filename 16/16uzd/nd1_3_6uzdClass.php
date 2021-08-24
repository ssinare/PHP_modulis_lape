<?php
/*
1.	Sukurti klasę Kibiras1. Sukurti protected savybę akmenuKiekis. Parašyti šiai savybei metodus 
prideti1Akmeni() pridetiDaugAkmenu($kiekis) ir metodą kiekPririnktaAkmenu(). Sukurti kibiro objektą 
ir pademonstruoti akmenų rinkimą į kibirą ir rezultatų išvedimą.
*/
class Kibiras1
{
    protected $akmenuKiekis;
    public function __construct()
    {
        $this->akmenuKiekis = 0;
    }
    public function prideti1Akmeni()
    {
        $this->akmenuKiekis++;
    }
    public function pridetiDaugAkmenu($kiekis)
    {
        $this->akmenuKiekis += $kiekis;
    }
    public function kiekPririnktaAkmenu()
    {
        return $this->akmenuKiekis;
    }
}
$kibiras = new Kibiras1;
echo '<br>Akmenų kibire yra: ' . $kibiras->kiekPririnktaAkmenu() . '<br>';
$kibiras->prideti1Akmeni();
echo '<br>Pridėtas akmuo<br>';
echo '<br>Akmenų kibire yra: ' . $kibiras->kiekPririnktaAkmenu() . '<br>';
//print_r($kibiras);
$akmenuSk = rand(1, 25);
$kibiras->pridetiDaugAkmenu($akmenuSk);
echo '<br>Pridėta akmenų į kibirą: ' . $akmenuSk . '<br>';
echo '<br>Akmenų kibire yra: ' . $kibiras->kiekPririnktaAkmenu() . '<br>';
//print_r($kibiras);
$kibiras->prideti1Akmeni();
echo '<br>Pridėtas akmuo<br>';
echo '<br>Akmenų kibire yra: ' . $kibiras->kiekPririnktaAkmenu() . '<br>';
//print_r($kibiras);
$akmenuSk = rand(1, 25);
$kibiras->pridetiDaugAkmenu($akmenuSk);
echo '<br>Pridėta akmenų į kibirą: ' . $akmenuSk . '<br>';
echo '<br>Akmenų kibire yra: ' . $kibiras->kiekPririnktaAkmenu() . '<br>';
//print_r($kibiras);

3./*	(STATIC) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras2.
 Patobulinkite pridėdami statinę privačią savybę akmenuKiekisVisuoseKibiruose. 
 Ši savybė turi rodyti kiek akmenų surinkta visuose Kibiras2 objektuose. Sukurkite 
 geterį objekte, ir statinį geterį klasėje, kuris išvestų akmenuKiekisVisuoseKibiruose 
 reikšmę. Sukurkite tris kibirus ir pademonstruokite veikimą.
*/
echo '<br>';
echo '<br>3. uzdavinio sprendimas ---------------<br>';
echo '<br>';

class Kibiras
{
    protected $akmenuKiekis=0;
    protected statis $akmenuKiekisVisuosekibiruose = 0;
   

    public function prideti1Akmeni()
    {
        self::$akmenuKiekisVisuosekibiruose++;
        $this->akmenuKiekis++;
    }
    public function pridetiDaugAkmenu($kiekis)
    {
        self::$akmenuKiekisVisuosekibiruose++;
        $this->akmenuKiekis += $kiekis;
    }
    public function kiekPririnktaAkmenu()
    {
        return $this->akmenuKiekis;
    }
}


/*
S6.	Sukurti klasę Stikline. Sukurti privačią savybę turis ir kiekis. Parašyti metodą 
ipilti($kiekis), kuris keistų savybę kiekis. Jeigu stiklinės tūris yra mažesnis nei pilamas 
kiekis- kiekis netelpa ir būna lygus tūriui. Parašyti metodą ispilti(), kuris grąžiną kiekį. 
Pilant išpilamas visas kiekis, tas kas netelpa, nuteka per stalo viršų. Sukurti tris stiklinės 
objektus su tūriais: 200, 150, 100. Didžiausią pripilti pilną ir tada ją ispilti į mažesnę stiklinę,
o mažesnę į dar mažesnę.
*/

echo '<br>';
echo '<br>6. uzdavinio sprendimas ---------------<br>';
echo '<br>';

class Stikline
{
    private $turis;
    private $kiek = 0;

    public function __construct($turis)
    {
        $this->turis = $turis;
    }

    public function ipilti($kiekis)
    {
        if ($this->turis >= ($kiekis + $this->kiek)) {
            $this->kiek += $kiekis;
        } else {
            $this->kiek = $this->turis;
        }
    }

    public function ispilti()
    {
        $ispilamasKiekis = $this->kiek;
        $this->kiek = 0;
        return $ispilamasKiekis;
    }
}
echo '<pre>';
//objektai
$stikline = new Stikline(200);
$stikline2 = new Stikline(150);
$stikline3 = new Stikline(100);
echo '<br>Sukurtos trys stiklines<br>';
_d('Sukuriau stiklines');
print_r($stikline);
print_r($stikline2);
print_r($stikline3);
_d($stikline);
_d($stikline2);
_d($stikline3);

$stikline->ipilti(250);
echo '<br><br> Pripyiau pirma stikline<br>';
_d('Pripyliau pirma');
print_r($stikline);
print_r($stikline2);
print_r($stikline3);
_d($stikline);
_d($stikline2);
_d($stikline3);

$stikline2->ipilti($stikline->ispilti());
echo '<br><br> Ispyliau pirma i antra<br>';
_d('Ispyliau pirma i antra');
print_r($stikline);
print_r($stikline2);
print_r($stikline3);
_d($stikline);
_d($stikline2);
_d($stikline3);

$stikline3->ipilti($stikline2->ispilti());
echo '<br><br> Ispyliau antra i trecia<br>';
_d('Ispyliau antra i trecia');
print_r($stikline);
print_r($stikline2);
print_r($stikline3);

_d($stikline);
_d($stikline2);
_d($stikline3);