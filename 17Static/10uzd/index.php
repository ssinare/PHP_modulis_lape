<?php

require __DIR__ . '/classTenisininkas.php';


$tenisininkas1 = new Tenisininkas('Antanas');
$tenisininkas2 = new Tenisininkas('Petras');

Tenisininkas::zaidimoPradzia();
$tenisininkas1->perduotiKamuoliuka();
$tenisininkas2->perduotiKamuoliuka();
echo '<pre>';
var_dump($tenisininkas1);
var_dump($tenisininkas2);


















// $t1 = new Tenisininkas('Rapolas');
// $t2 = new Tenisininkas('Mykolas');

// Tenisininkas::zaidimoPradzia();

// $t2->perduotiKamuoliuka();
// $t1->perduotiKamuoliuka();
// $t2->perduotiKamuoliuka();
// $t1->perduotiKamuoliuka();


// echo '<pre>';
// var_dump($t1);
// var_dump($t2);