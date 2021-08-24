<?php
require __DIR__ . '/nd2_8classPinigine.php';
echo '<pre>';
echo '<br>';
echo '<br>2. uzdavinio sprendimas ---------------<br>';
echo '<br>';

$pinigine = new Pinigine();

$pinigine->ideti(8);
$pinigine->ideti(1);
echo '<br>';
$pinigine->skaiciuoti();
echo '<br>';
print_r($pinigine);
_d($pinigine);

echo '<br>';
echo '<br>8. uzdavinio sprendimas ---------------<br>';
echo '<br>';

$pinigine2 = new Pinigine2();
$sugeneruotiPinigu = rand(1, 25);
echo $sugeneruotiPinigu;
for ($i = 0; $i <= $sugeneruotiPinigu; $i++) { //kiek sugeneruoti pinigu
    $pinigas = new Pinigas(rand(1, 10)); //kiekvienos kupiuros dydis
    $pinigine2->ideti($pinigas);
}
echo '<br>Piniginėje yra monetų: ' . $pinigine2->monetos();
echo '<br>Piniginėje yra banknotų: ' . $pinigine2->bannkotai();
echo '<br>';
print_r($pinigine2);
_d($pinigine2);
echo '<br>';
echo '<br>Viso piniginėje pinigų yra: ' . $pinigine2->skaiciuoti();