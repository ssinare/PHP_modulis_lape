<?php
/*
$pirmas = 'bla bla';
echo $pirmas;

echo '<br>';
echo "bla $pirmas bla";
$trecias = "'<br> pradzia \n\n\n\n\n\n\n labas \n\n\n galas";
echo $trecias;

1.	Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus).
 Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius
  atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".
*/
echo '<br>1. uzdavinio sprendimas ---------------<br>';
$vardas = 'Ieva';
$pavarde = 'Maciuliene';
$gimimoMetai = 1999;
$sieMetai = date("Y");

$amzius = $sieMetai - $gimimoMetai;
echo '<br>';
echo "<br>Aš esu $vardas $pavarde. Man yra $amzius metai(ų). <br>";

/*
2.	Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems 
priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite 
rezultatą jį suapvalinę iki 2 skaičių po kablelio.
*/
echo '<br>2. uzdavinio sprendimas ---------------<br>';
$pirmas = rand(0, 4); 
$antras = rand(0, 4); 

echo '<pre>'; 
echo "$pirmas<br>";
echo "$antras<br>";

if ($pirmas > $antras && $antras !==0) {
    echo round(($pirmas/$antras), 2);
 }
elseif (($antras > $pirmas && $pirmas !==0)) {
    echo round(($antras/$pirmas), 2);
}
elseif ($antras == $pirmas) {
    echo 'skaiciai yra vienodi, neskaiciuosiu';
}
else {
    echo 'dalmuo yra 0, neskaiciuosiu';
}
echo '<br>';
/*
3.	Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() 
jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį
 vidurinę reikšmę.
 */
echo '<br>3. uzdavinio sprendimas ---------------<br>';
echo '<br>';
echo $kintamasisVienas = rand(0, 25); 
echo '<br>';
echo $kintamasisDu = rand(0, 25);
echo '<br>';  
echo $kintamasisTrys = rand(0, 25);
echo '<br>'; 
$viduriniojiReiksme = '';
if (($kintamasisVienas > $kintamasisDu && $kintamasisVienas < $kintamasisTrys) || ($kintamasisVienas < $kintamasisDu && $kintamasisVienas > $kintamasisTrys)){
echo "<br> vidurinioji reiksme yra $viduriniojiReiksme = $kintamasisVienas, <br>";
}
elseif (($kintamasisDu > $kintamasisTrys && $kintamasisDu < $kintamasisVienas) || ($kintamasisDu < $kintamasisTrys && $kintamasisDu > $kintamasisVienas)){
echo "<br> vidurinioji reiksme yra $viduriniojiReiksme = $kintamasisDu, <br>";
}
else {
    echo "<br> vidurinioji reiksme yra $viduriniojiReiksme = $kintamasisTrys, <br>";
}
echo '<br>';


/*
4.	Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite rand() funkcija nuo 1 iki 10). 
Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 
*/
echo '<br>4. uzdavinio sprendimas ---------------<br>';
echo '<br>'; 
echo $a = rand(1, 10);
echo '<br>'; 
echo $b = rand(1, 10);
echo '<br>'; 
echo $c = rand(1, 10);
echo '<br>';
if ($a+$b>$c && $a+$c>$b && $b+$c>$a) {
    echo '<br> Duotos krastines gali sudaryti trikampi! <br>';
}
else {
    echo '<br> Duotos krastines negali sudaryti trikampio! <br>';
}
echo '<br>'; 
echo '<br>';
/*
5.	Sukurkite keturis kintamuosius ir rand() funkcija sugeneruokite jiems 
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).
*/
echo '<br>5. uzdavinio sprendimas ---------------<br>';
echo '<br>'; 
echo $x = rand(0, 2);
echo '<br>'; 
echo $y = rand(0, 2);
echo '<br>'; 
echo $w = rand(0, 2);
echo '<br>';
echo $z = rand(0, 2);
echo '<br>';
$nuliai = null;
$one = null;
$two = null;
if ($x == 0){
$nuliai++;
}
elseif ($x == 1){
$one++;    
}
elseif ($x == 2){
$two++;    
}
if ($y == 0){
$nuliai++;
}
elseif ($y == 1){
$one++;    
}
elseif ($y == 2){
$two++;    
}
if ($w == 0){
$nuliai++;
}
elseif ($w == 1){
$one++;    
}
elseif ($w == 2){
$two++;    
}
if ($z == 0){
$nuliai++;
}
elseif ($z == 1){
$one++;    
}
elseif ($z == 2){
$two++;    
}
echo "nuliu yra: $nuliai";
echo '<br>'; 
echo "vienetu yra: $one";
echo '<br>'; 
echo "dvejetu yra: $two";
echo '<br>';
// echo '-----------------------'
// $var1 = rand(0, 2);
// $var2 = rand(0, 2);
// $var3 = rand(0, 2);
// $var4 = rand(0, 2);

// $zeroes = 0;
// $ones = 0;
// $twos = 0;

// $check1 = match ($var1) {
//     0 => $zeroes++,
//     1 => $ones++,
//     2 => $twos++,
// };
// $check2 = match ($var2) {
//     0 => $zeroes++,
//     1 => $ones++,
//     2 => $twos++,
// };
// $check3 = match ($var3) {
//     0 => $zeroes++,
//     1 => $ones++,
//     2 => $twos++,
// };
// $check4 = match ($var4) {
//     0 => $zeroes++,
//     1 => $ones++,
//     2 => $twos++,
// };
// echo '--------------------------------------'
/*
6.	Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite
 atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>
*/
echo '<br>6. uzdavinio sprendimas ---------------<br>';
echo '<br>';
echo $skaicius = rand(1, 6);
echo '<br>'; 
echo "<h$skaicius>$skaicius</h$skaicius>";
echo '<br>'; 

/*
7.	Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni
 už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. 

 XXXXXXX 
 Parasiau ta pati koda tris kartus. realiai reiktu kazkaip parasyti, kad tris kartus atspausdintu tik
 XXXXXXX
*/
echo '<br>7. uzdavinio sprendimas ---------------<br>';
echo '<br>';
echo $skaicius = rand(-10, 10);
if ($skaicius<0) {
echo "<h3> <font color=green >$skaicius</font></h3>";
}
elseif ($skaicius==0){
echo "<h3> <font color=red >$skaicius</font></h3>";
}
elseif ($skaicius>0){
echo "<h3> <font color=blue >$skaicius</font></h3>";
}
echo '<br>';
echo $skaicius = rand(-10, 10);
if ($skaicius<0) {
echo "<h3> <font color=green >$skaicius</font></h3>";
}
elseif ($skaicius==0){
echo "<h3> <font color=red >$skaicius</font></h3>";
}
elseif ($skaicius>0){
echo "<h3> <font color=blue >$skaicius</font></h3>";
}
echo '<br>';
echo $skaicius = rand(-10, 10);
echo '<br>';
if ($skaicius<0) {
echo "<h3> <font color=green >$skaicius</font></h3>";
}
elseif ($skaicius==0){
echo "<h3> <font color=red >$skaicius</font></h3>";
}
elseif ($skaicius>0){
echo "<h3> <font color=blue >$skaicius</font></h3>";
}

echo '<br>'; 
/*
8.	Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip
 už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą
  kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite rand() funkcija nuo 5 iki 3000.
*/
echo '<br>8. uzdavinio sprendimas ---------------<br>';
echo '<br>';
echo $zvakiuSk = rand(5, 3000);
echo '<br>';
$zvakiuKaina=1;
if ($zvakiuSk<=1000) {
$zvakiuKaina = $zvakiuKaina;
echo $suma = $zvakiuKaina * $zvakiuSk;
echo '<br>';
}
elseif ($zvakiuSk<=2000) {
$zvakiuKaina = $zvakiuKaina * 0.97;
echo $suma = $zvakiuKaina * $zvakiuSk;
echo '<br>';
}
elseif ($zvakiuSk>2000) {
$zvakiuKaina = $zvakiuKaina * 0.96;
echo $suma = $zvakiuKaina * $zvakiuSk;
echo '<br>';
}
/*
9.	Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. 
Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės 
nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.
*/
echo '<br>9. uzdavinio sprendimas ---------------<br>';
echo '<br>';
echo $a = rand(0, 100);
echo '<br>'; 
echo $b = rand(0, 100);
echo '<br>'; 
echo $c = rand(0, 100);
echo '<br>';
echo $vidurkis = ($a + $b + $c)/3;
echo '<br>';
echo round($vidurkis, 2);
echo '<br>';
if ($a < 10 || $a > 90) {
    $a = 0;
}
elseif ($b < 10 || $b > 90) {
    $b = 0;
}
elseif ($c < 10 || $c > 90) {
    $c = 0;
}
echo $vidurkis2 = ($a + $b + $c)/3;
echo '<br>';
echo round($vidurkis2, 2);
echo '<br>';

/*
10.	Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm
 sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės.
  Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo 
  ir pridedamų sekundžių skaičių.
*/
echo '<br>10. uzdavinio sprendimas ---------------<br>';
echo '<br>';
echo $valandos = rand (0, 23);
echo '<br>';
echo $minutes = rand (0, 59);
echo '<br>';
echo $sekundes = rand (0, 59);
echo '<br>';
echo "$valandos:$minutes:$sekundes";
echo '<br>';
echo $seconds1 = rand(0, 300);
echo '<br>'; 
echo $minutes1 = $seconds1 / 60 % 60;
echo '<br>';
echo $seconds1 = $seconds1 % 60;
echo '<br>';
echo $minutes2 = $minutes + $minutes1;
echo '<br>';
echo $seconds2 = $sekundes + $seconds1;
if ($seconds2 >= 60){
$seconds2 = 0;
$minutes2 = $minutes2 + 1;
}
echo '<br>';
if ($minutes2 >= 60){
$minutes2 = 0;
$valandos = $valandos + 1;
}
echo '<br>';
echo "$valandos:$minutes2:$seconds2";
echo '<br>';

/*
11.	Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius su 
atsitiktinem reikšmėm nuo 1000 iki 9999. Atspausdinkite reikšmes 
viename strige, išrūšiuotas nuo didžiausios iki mažiausios, 
atskirtas tarpais. 
*/
echo '<br>10. uzdavinio sprendimas ---------------<br>';
echo '<br>';
echo $kintamasisVienas = rand(1000, 9999);
echo '<br>';	 
echo $kintamasisDu = rand(1000, 9999);
echo '<br>';
echo $kintamasistrys = rand(1000, 9999);
echo '<br>';
echo $kintamasisKeturi = rand(1000, 9999);
echo '<br>';
echo $kintamasisPenki = rand(1000, 9999);
echo '<br>';
echo $kintamasisSesi = rand(1000, 9999);
echo '<br>';

//if ($kintamasisVienas>$kintamasisDu)