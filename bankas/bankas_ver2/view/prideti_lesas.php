<?php
require __DIR__ . '/virsus.php';
require __DIR__ . '/functions.php';


function pridetiLesu(string $saskNumeris, int $suma): int
{
    $esamosSaskaitos = getSaskaitos();
    $esamosSaskaitos[$saskNumeris]['Likutis'] += $suma;

    $esamosSaskaitos = json_encode($esamosSaskaitos);
    file_put_contents(__DIR__ . '/nauja_saskaita.json', $esamosSaskaitos);
    return $suma;
}

$saskaitos = getSaskaitos();


?>
<?php

if ('POST' == $_SERVER['REQUEST_METHOD']) {
    $saskaitosNr = $_GET['saskaita'];
    $suma = $_POST['Suma'];
    $suma = pridetiLesu($saskaitosNr, $suma);

    header('Location: http://localhost/Lape/bankas/bankas_ver1/saskaitu_sarasas.php?suma=' . $suma . '&saskaitosNumeris=' . $saskaitosNr);
    die;
}
if ('GET' == $_SERVER['REQUEST_METHOD']) :
    $saskaitosNr = $_GET['saskaita'];
?>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prideti lėšas</title>
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
</style> -->

<body>
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
            <label>Pridėti lėšų: </label>
        </div>

        <div>
            <input type="text" name="Suma" pattern="[0-9]+"><button type="submit" name="Prideti" value="prideti_lesu">Pridėti</button>
        </div>
    </form>
</body>

</html><?php
        endif;