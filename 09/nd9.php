<?php

/*
1.	Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. 
Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų 
 perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus 
 ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus 
 ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas.*/

echo '<br>';
echo '<br>1. uzdavinio sprendimas ---------------<br>';
echo '<br>';

$spalva = 'black';
if (isset($_GET['color'])) {
    $spalva= 'red';
}
?>

<head>
    <title>Black</title>
</head>

<body style="background-color: <?=$spalva?>; ">
    <h1 style="color: yellow">
        <a href="./nd9.php">BLACK</a>
        <br>
        <a href="./nd9.php?color=1?">RED</a>
    </h1>
</body>
<?php

/*
<a href="http://localhost/lape/08/nd1.php?color=1">front</a>
<a href="http://localhost/lape/08/nd1.php">pack</a>

<?php  if(1 == ($_GET['color'] ?? '')): ?>

<body style='background-color: red;'></body>
<?php else:  ?>

<body style='background-color: black;'></body>
<?php endif ?>
*/

/*
2. Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu
kintamuoju nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus
GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono
spalva pasidarytų tokios spalvos.*/