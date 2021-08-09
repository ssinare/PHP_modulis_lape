<?php
echo '<br>';
echo '<br>5- blue. uzdavinio sprendimas ---------------<br>';
echo '<br>';
/*
5.	Sukurkite du atskirus puslapius blue.php ir red.php Juose 
sukurkite linkus į pačius save (abu į save ne į kitą puslapį!).
 Padarykite taip, kad paspaudus ant  linko puslapis ne tiesiog 
 persikrautų, o PHP kodas (ne tiesiogiai html tagas!) naršyklę 
 peradresuotų į kitą puslapį (iš raudono į mėlyną ir atvirkščiai).
*/
$link = './blue.php';
if (isset($_GET['page'])&& $_GET['page']=='go') {
    header('Location: http://localhost/lape/09/red.php');
    die;
}

?>

<body style="background-color: blue; ">
    <h1><br>
        <a style="color: ivory" href="./blue.php?page=go">BLUE</a>
    </h1>
</body>



<?php
//Manto kodas
if(1 == ($_GET['red'] ?? ''))
{header('Location: http://localhost/lape/ndWebMechanika/5uzd/blue.php');
die;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-color:red;">
    <a style="color:white" href="./red.php?red=1">redirect</a>
</body>

</html>