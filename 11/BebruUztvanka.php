<?php

//include_once __DIR__ . '/functions.php'; //visada include turi buti virsuje
//kad nebutu includeinta kelis kartus, failas include_once

require __DIR__ . '/functions.php'; //grieztas reikalavimas siam failui iskviesti. jei jo nera - nebevykdo kodo
// echo __DIR__;
//setBebrai(['juodieji' => 30, 'rudieji' => 120]); json faile atsiranda, galima istirinti, arba setiname loocalhoste
getBebrai();




if ('POST' == $_SERVER['REQUEST_METHOD']) {
    $bebrai = getBebrai();
    if ('prideti-juodus' == $_POST['ka daryt?']) {
        $bebrai['juodieji'] += (int)$_POST['j_plus'];
    } elseif ('atimti-juodus' == $_POST['ka daryt?']) {
        $bebrai['juodieji'] -= (int)$_POST['j_minus'];
    } elseif ('prideti-rudus' == $_POST['ka daryt?']) {
        $bebrai['rudieji'] += (int)$_POST['r_plus'];
    } elseif ('atimti-rudus' == $_POST['ka daryt?']) {
        $bebrai['rudieji'] -= (int)$_POST['r_minus'];
    }
    setBebrai($bebrai);
    header('Location: http://localhost/Lape/11/BebruUztvanka.php');
    die;
}
//$bebrai = getBebrai(); // yra pateikstas zemiau funkcijos iskvietimas ife

if ('GET' == $_SERVER['REQUEST_METHOD']) :

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebru Užtvanka</title>
    <style>
    div,
    h2 {
        margin: 15px;
        padding: 7px;
        border: 1px solid #ccc;
    }

    label {
        display: inline-block;
        width: 140px;
    }
    </style>
</head>

<body>
    <h2>Juodieji: <?= getBebrai()['juodieji'] ?></h2>
    <h2>Rudieji: <?= getBebrai()['rudieji'] ?></h2>
    <form action="http://localhost/Lape/11/BebruUztvanka.php" method="post">





        <div>
            <label>Prideti juodus: </label><input type="text" name="j_plius">
            <button type="submit" name="ka daryt?" value="prideti-juodus">+</button>
        </div>

        <div>
            <label>Atimti juodus: </label><input type="text" name="j_minus">
            <button type="submit" name="ka daryt?" value="atimti-juodus">-</button>
        </div>

        <div>
            <label>Prideti rudus: </label><input type="text" name="r_plus">
            <button type="submit" name="ka daryt?" value="prideti-rudus">+</button>
        </div>

        <div>
            <label>Atimti rudus: </label><input type="text" name="r_minus">
            <button type="submit" name="ka daryt?" value="atimti-rudus">-</button>
        </div>

    </form>
</body>

</html>
<?php endif;