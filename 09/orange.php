<?php
/*
4. Sukurkite du puslapius lemon.php ir orange.php. Jų fonus nuspalvinkite
atitinkamom spalvom. Į lemon.php puslapį įdėkite kodą, kuris naršyklę
visada peradresuotų į puslapį orange.php. Pademonstruokite veikimą.
*/	
echo '<br>';
echo '<br>4 -orange. uzdavinio sprendimas ---------------<br>';
echo '<br>';

if (isset($_GET['color'])&& $_GET['color']!='')  {
    $spalva= $_GET['color'];
} 
else {
    $spalva = 'ffa500';
}
?>

<head>
    <title>Orange</title>
</head>

<body style="background-color: <?=$spalva?>; ">
    <h1 style="color: ivory">ORANGE
        <br>
        <a style="color: ivory" href="./lemon.php">LEMON</a>
        <br>
    </h1>
    <?php