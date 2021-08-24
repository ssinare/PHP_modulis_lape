<?php

//$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
require __DIR__ . '/virsus.php';
require __DIR__ . '/functions.php';


if ('POST' == $_SERVER['REQUEST_METHOD']) :

    $trinamaSaskaita =  $_POST['Trinti'];
    $istrinta = istrintiSaskaita($trinamaSaskaita);
    if ($istrinta == true) {
        header('Location: http://localhost/Lape/bankas/bankas_ver1/saskaitu_sarasas.php?istrinta=taip&istrintaSaskaita=' . $trinamaSaskaita);
        //header('Location: ' . $actual_link . '?istrintaSaskaita=' . $trinamaSaskaita);
    } elseif ($istrinta == false) {
        header('Location: http://localhost/Lape/bankas/bankas_ver1/saskaitu_sarasas.php?istrinta=ne&istrintaSaskaita=' . $trinamaSaskaita);
        die;
    } else {
        header('Location: http://localhost/Lape/bankas/bankas_ver1/saskaitu_sarasas.php');
        die;
    }


endif;
//alertai
if ('GET' == $_SERVER['REQUEST_METHOD']) :

    $saskaituSarasas = getSaskaitos();
    $zinute = '';
    if (isset($_GET['suma'])) {
        if ($_GET['suma'] < 0) {
            $zinute = 'Nuo sąskaitos nr: ' . $_GET['saskaitosNumeris'] . ' buvo nuskaičiuota ' . -$_GET['suma'];
        } elseif ($_GET['suma'] > 0) {
            $zinute = 'Prie sąskaitos nr: ' . $_GET['saskaitosNumeris'] . ' buvo pridėta ' . $_GET['suma'];
        }
    }
?>


<!-- <!DOCTYPE html>
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
    width: 400px;
    text-decoration: none;
    text-align: justify;
}

a {
    display: inline-block;
    color: grey;
    background-color: lightgray;
    margin: 5px;
    padding: 5px;
    border: 1px solid #ccc;
    width: 200px;
    text-decoration: none;
    text-align: center;
}
</style> -->

<body>
    <h4>
        <a href="http://localhost/Lape/bankas/bankas_ver1/meniu.php">Meniu</a>
    </h4>
    <?php
        if ($zinute != '') {
        ?>
    <div>
        <?= $zinute ?>
    </div>
    <?php

        }
        if (isset($_GET['istrinta'])) {
            if ($_GET['istrinta'] == 'ne') {
            ?>
    <div>
        Yra lėšų. Negalima ištrinti sąskaitos nr: <?= $_GET['istrintaSaskaita'] ?>
    </div>
    <?php
            } elseif ($_GET['istrinta'] == 'taip') {
            ?>
    <div>
        Buvo ištrinta sąskaita nr: <?= $_GET['istrintaSaskaita'] ?>
    </div>
    <?php
            }
        }
        if (count($saskaituSarasas) != 0) {
            ?>
    <form action="" method="post">
        <?php
                foreach ($saskaituSarasas as $saskaita) {
                ?>
        <div>
            <label><?= $saskaita['Vardas'] . ' ' . $saskaita['Pavardė'] . ' ' . $saskaita['Sąskaita'] . ' ' . $saskaita['Likutis'] ?> </label>
            <button type="submit" name="Trinti" value="<?= $saskaita['Sąskaita'] ?>">Trinti</button>
            <a href="./prideti_lesas.php?saskaita=<?= $saskaita['Sąskaita'] ?>">Pridėti lėšų</a>
            <a href="./nuskaiciuoti_lesas.php?saskaita=<?= $saskaita['Sąskaita'] ?>">Nuskaičiuoti lėšas</a>
        </div>
        <?php
                }
                ?>
    </form>
    <?php
        } else {
            echo 'Nėra sukurta sąskaitų';
        ?>
    <h4>
        <a href="http://localhost/Lape/bankas/bankas_ver1/nauja_saskaita.php">Sukurti naują sąskaitą</a>
    </h4>
    <?php
        }
        ?>



</body>

</html>
<?php
endif;