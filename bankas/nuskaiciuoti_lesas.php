<?php
require __DIR__ . '/functions.php';

function atimtiLesas(string $saskNumeris, int $suma): int
{
    $esamosSaskaitos = getSaskaitos();
    if ($suma <= $esamosSaskaitos[$saskNumeris]['Likutis']) {
        $nuskaiciuota = $suma;
        $esamosSaskaitos[$saskNumeris]['Likutis'] -= $suma;
    } else {
        $nuskaiciuota = $esamosSaskaitos[$saskNumeris]['Likutis'];
        $esamosSaskaitos[$saskNumeris]['Likutis'] = 0;
    }
    $esamosSaskaitos = json_encode($esamosSaskaitos);
    file_put_contents(__DIR__ . '/nauja_saskaita.json', $esamosSaskaitos);
    return $nuskaiciuota;
}


$saskaitos = getSaskaitos();


?>
<?php

if ('POST' == $_SERVER['REQUEST_METHOD']) {
    $saskaitosNr = $_GET['saskaita'];
    $suma = $_POST['Suma'];
    $nuskaiciuota = atimtiLesas($saskaitosNr, $suma);

    header('Location: http://localhost/Lape/bankas/saskaitu_sarasas.php?suma=-' . $nuskaiciuota . '&saskaitosNumeris=' . $saskaitosNr);
    die;
}
if ('GET' == $_SERVER['REQUEST_METHOD']) :
    $saskaitosNr = $_GET['saskaita'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuskaičiuoti lėšas</title>
</head>
<style>
div {
    display: inline-block;
    margin: 5px;
    padding: 5px;
    border: 1px solid #ccc;
    width: 400px;
    text-decoration: none;
    text-align: justify;
}
</style>

<body>
    <h2>Nuskaičiuoti lėšas iš sąskaitos nr: <?= $saskaitosNr ?></h2>
    <form action="" method="post">
        <div>
            <label>Vardas: <?= $saskaitos[$saskaitosNr]['Vardas'] ?></label>
        </div>
        <div>
            <label>Pavardė: <?= $saskaitos[$saskaitosNr]['Pavardė'] ?></label>
        </div>
        <div>
            <label>Likutis: <?= $saskaitos[$saskaitosNr]['Likutis'] ?></label>
        </div>
        <div>
            <label>Nuskaičiuoti lėšas: </label>
        </div>

        <div>
            <input type="text" name="Suma" pattern="[0-9]+"><button type="submit" name="Prideti" value="atimiti_lesu">Nuskaičiuoti</button>
        </div>
    </form>
</body>

</html><?php
        endif;