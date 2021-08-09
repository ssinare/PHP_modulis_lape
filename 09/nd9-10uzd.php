<?php
/*
9.	Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis 
kiekis (3-10) checkbox su raidėm A,B,C… Padarykite taip, kad paspaudus mygtuką,
 fono spalva pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, rodantis kiek
  buvo pažymėta checkboksų (ne kurie, o kiek). 
  10.	Pakartokite 9 uždavinį. Padarykite taip, kad atsirastų du skaičiai. 
  Vienas rodytų kiek buvo pažymėta, o kitas kiek iš vis buvo jų sugeneruota.
*/
echo '<br>';
echo '<br>10. uzdavinio sprendimas ---------------<br>';
echo '<br>';

$color='black';
$visibility='visible';
$raidesViso=0;
$raide = range('A', 'J');
echo '<pre>';
    $skaicius= 0;
    if (isset($_POST['MYGTUKAS'])) {
        $color='white';
        $visibility='none';
        if(!empty($_POST['raide'])) {
        echo 'Pazymeta: <h1>'.count($_POST['raide']).'</h1>';
        echo '<br>';
        echo 'Sugeneruota raidziu: <h1>'.$_POST['raidziuSk'].'</h1>';
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10 uzd</title>
</head>

<body style="background-color:<?=$color?>;">
    <form style="display:<?=$visibility?>; color: pink;" method="post">
        <?php
    foreach(range(1, rand(3, 10)) as $value) { 
        $raidesViso++;
        ?><input type="checkbox" name="raide[]"> <label><?=$raide[$value-1];?></label>

        <?php  
    }?>
        <input type="text" style="display: none" name="raidziuSk" value="<?=$raidesViso;?>">
        <input type="submit" value="MYGTUKAS" name="MYGTUKAS"><br>
    </form>
</body>

</html>