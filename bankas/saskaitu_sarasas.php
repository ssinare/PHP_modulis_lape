<?php

function getSaskaitos(): array
{
    if (!file_exists(__DIR__ . '/nauja_saskaita.json')) {
        $saskaita = ['Vardas' => '', 'Pavardė' => '', 'Sąskaita' => 0, 'Asmens_kodas' => 0];

        $saskaita = json_encode($saskaita);
        file_put_contents(__DIR__ . '/nauja_saskaita.json', $saskaita);
    }
    return json_decode(file_get_contents(__DIR__ . '/nauja_saskaita.json'), 1);
}
if ('GET' == $_SERVER['REQUEST_METHOD']) :

    $saskaituSarasas = getSaskaitos();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saskaitu sarasas</title>
</head>
<style>
div {
    display: inline-block;
    margin: 5px;
    padding: 5px;
    border: 1px solid #ccc;
    width: 350px;
    text-decoration: none;
    text-align: justify;
}

a {
    width: 250px;
}
</style>

<body>
    <form action="" method="post">
        <?php
            foreach ($saskaituSarasas as $saskaita) {
            ?> <div>
            <label><?= $saskaita['Vardas'] . ' ' . $saskaita['Pavardė'] . ' ' . $saskaita['Sąskaita'] ?> </label>
            <input type="submit" name="Trinti" value="Trinti" id="<?= $saskaita['Sąskaita'] ?>">
            <a href="./prideti_lesas.php?saskaita=<?= $saskaita['Sąskaita'] ?>">Pridėti lėšų</a>
            <a href="./nuskaiciuoti_lesas.php?saskaita=<?= $saskaita['Sąskaita'] ?>">Nuskaičiuoti lėšas</a>
        </div>
        <?php
            }
            ?>

    </form>

</body>

</html>
<?php
endif;