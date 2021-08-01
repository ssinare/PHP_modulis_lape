<?php
$masyvas = [];

echo '<pre>';

/*
gali buti belekokie skiciai, ne nuo 0 ir skirtingu tipu
nenaudojame FOR ciklo php
*/
$masyvas['kojines'] = 7;
$masyvas[0] = 88;
$masyvas['belekas'] = 444;
$masyvas[4] = 188;
$masyvas[] = 'lialia lia';
array_push($masyvas,'labas');
print_r($masyvas);

$masyvas = [77=>4, 'uu'=>5, 'labas'];
$colors2 = [];
$colors = ['red', 'green', 'blue', 'yellow'];
foreach ($colors as $kasNori2 => $kasNori) {
    echo 'Reiksme: ' .$kasNori . '<br>';
    echo 'stalcius: ' . $kasNori2 . '<br>';

        $colors[$kasNori2] = 'black';
        unset($colors[$kasNori2]);
    $value = 'black';
}
print_r($colors);

$A = 8;
// $B = $A; //pagal reiksme
$B = &$A; // pagal nuoroda by refference
$C = &$B;

$A = 10;
$B = 22;
$C = 'labas';

for ($i=1; $i<=5; $i++) {
    echo "<br>Skaicius yra $i";
}
foreach(range(1,5) as $i) {
    echo "<br>Skaicius yra $i";
}
 print_r(range(1, 5));
 print_r(range('a', 'z'));


$colors = ['red', 'green', 'blue', 'yellow'];
 print_r($colors);
 $colors = ['red', 'green', 'blue', 'yellow'];
 asort($colors);
 $colors = ['red', 'green', 'blue', 'yellow'];
 usort($colors, fn($a, $b) => $b <=> $a);