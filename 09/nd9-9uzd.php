<?php
/*
9.	Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis 
kiekis (3-10) checkbox su raidėm A,B,C… Padarykite taip, kad paspaudus mygtuką,
 fono spalva pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, rodantis kiek
  buvo pažymėta checkboksų (ne kurie, o kiek). 
*/
echo '<br>';
echo '<br>9. uzdavinio sprendimas ---------------<br>';
echo '<br>';

$color='black';
$visibility='visible';
echo '<pre>';
    $skaicius= 0;
    if (isset($_POST['MYGTUKAS'])) {
        $color='white';
        $visibility='none';
        if(!empty($_POST['raide'])) {
        foreach($_POST['raide'] as $value){
            if ($value == 'on'){
                $skaicius++;
            }
        }
        echo '<h1>'.$skaicius.'</h1>';
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9 uzd</title>
</head>

<body style="background-color:<?=$color?>;">
    <form style="display:<?=$visibility?>; color: pink;" action="" method="post">
        <?php
    $raide = range('A', 'J');
    foreach(range(1, rand(3, 10)) as $value) { 
        ?><input type="checkbox" name="raide[]"> <label><?=$raide[$value-1];?></label>
        <?php    
    }?>
        <input type="submit" value="MYGTUKAS" name="MYGTUKAS"><br>
    </form>
</body>

</html>