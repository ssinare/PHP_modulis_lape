<?php

//include_once __DIR__ . '/functions.php'; //visada include turi buti virsuje
//kad nebutu includeinta kelis kartus, failas include_once

require __DIR__ . '/functions.php'; //grieztas reikalavimas siam failui iskviesti. jei jo nera - nebevykdo kodo
//echo __DIR__;
setBebrai(['juodieji' => 30, 'rudieji' => 120]);
getBebrai();

$bebrai = getBebrai();


if ('POST' == $_SERVER['REQUEST_METHOD']) {
    $bebrai = getBebrai();
    if ('prideti - juodus' == $_POST['ka daryt?']) {
    }
}
setBebrai($bebrai);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebru Užtvanka JS</title>
    <script src="http://localhost/lape/11/bebrai.js.php" defer></script>
    <script>
    const postURL = 'http: //localhost/lape/11/BebruUztvanka.php'
    </script>
</head>

<body>
    <h2>Juodieji: <?= $bebrai['juodieji'] ?></h2>
    <h2>Rudieji: <?= $bebrai['rudieji'] ?></h2>
    <form action="" method="post">
        <input type="text" name="juodas_plius">
        <div>
            <label for="">Prideti juodus: </label><input type="text" name="bebrai" id="">
            <button type="submit" name="ka daryt?" value="prideti-juodus">+</button>
        </div>

        <div>
            <label for="">Atimti juodus: </label><input type="text" name="bebrai" id="">
            <button type="submit" name="ka daryt?" value="atimti-juodus">+</button>
        </div>

        <div>
            <label for="">Prideti rudus: </label><input type="text" name="bebrai" id="">
            <button type="submit" name="ka daryt?" value="prideti-rudus">-</button>
        </div>

        <div>
            <label for="">Atimti rudus: </label><input type="text" name="bebrai" id="">
            <button type="submit" name="ka daryt?" value="atimti-rudus">-</button>
        </div>

    </form>
</body>

</html>

<?php
?></div>