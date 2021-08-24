<?php
require __DIR__ . '/nd7classGrybai.php';
echo '<pre>';

$krepsys = new Krepsys();
do {
    $grybas = new Grybas();
    if ($grybas->getArValgomas() == 1 && $grybas->getArSukirmijes() == 0) {
        $krepsys->idetiGryba($grybas);
    }
} while ($krepsys->getSvoris() <= 500);

_d($krepsys);
print_r($krepsys);

// require __DIR__ . '/Grybas.php';
// require __DIR__ . '/Krepsys.php';


// $kasikas = new Krepsys;

// while ($kasikas->deti(new Grybas)) {
// }

// _d($kasikas);