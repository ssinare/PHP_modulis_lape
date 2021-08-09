<?php

/*
2.	Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu
kintamuoju nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus
GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono
spalva pasidarytų tokios spalvos.*/

echo '<br>';
echo '<br>2. uzdavinio sprendimas ---------------<br>';
echo '<br>';

$spalva = 'black';
if (isset($_GET['color'])) {
    $spalva= $_GET['color'];
}
?>

<head>
    <title>Input color</title>
</head>

<body style="background-color: <?=$spalva?>; ">
    <h1>
        <a style="color: green" href="./nd9-2uzd.php">BLACK</a>
        <br>
    </h1>
</body>

</html>
<?php


/*
3.	Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį
 ir ją išsiųsti mygtuku GET metodu formoje.
*/	
echo '<br>';
echo '<br>3. uzdavinio sprendimas ---------------<br>';
echo '<br>';

$spalva = 'black';
if (isset($_GET['color'])) {
    $spalva= '#'.($_GET['color']);
} 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3uzd</title>
</head>

<body>
    <form method="get">
        <input type="text" name="color" value=><br>
        <input type="submit" value="Ivesk spalva">
    </form>
</body>

</html>
<?php