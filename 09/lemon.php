<?php


/*
4. Sukurkite du puslapius lemon.php ir orange.php. Jų fonus nuspalvinkite
atitinkamom spalvom. Į lemon.php puslapį įdėkite kodą, kuris naršyklę
visada peradresuotų į puslapį orange.php. Pademonstruokite veikimą.
*/	
echo '<br>';
echo '<br>4 -lemon. uzdavinio sprendimas ---------------<br>';
echo '<br>';	

if (isset($_GET['color'])) {
    $spalva= '#'.$_GET['color'];
} 
else {
    $spalva = 'fff44f';
}
if (isset($_GET['click'])&& $_GET['click']=='go') {
    header('Location: http://localhost/lape/09/orange.php');
    die;
}
?>

<head>
    <title>Lemon</title>
</head>

<body style="background-color: <?=$spalva?>; ">
    <h1>LEMON<br></h1>
    <form action="./orange.php?=go" method="get"> <br>
        <input type="submit" value="Peradresuok i orange">
    </form>

</body>

</html>
<?php