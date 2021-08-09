<?php
/*
11. Suprogramuokite žaidimą. Žaidimas prasideda dviem laukeliais, 
kuriuose žaidėjai įveda savo vardus ir mygtuku “pradėti”. Šone yra 
rodomas žaidėjų rezultatas. Paspaudus “pradėti” turi atsirasti pirmo 
žaidėjo vardas ir mygtukas “mesti kauliuką”. Jį nuspaudus skriptas 
automatiškai sugeneruoja skaičių nuo 1 iki 6 ir jį prideda prie žaidėjo 
rezultato, o pirmo žaidėjo vardas pakeičiamas antro žaidėjo vardu (parodo 
kieno eilė “mesti kauliuką”). Žaidimas tęsiamas iki tol, kol kažkuris žaidėjas 
surenka 30 taškų. Tada parodomas pranešimas apie laimėjimą ir vėl leidžiama
 suvesti žaidėjų vardus ir pradėti žaidimą iš naujo.
*/
echo '<br>';
echo '<br>11. uzdavinio sprendimas ---------------<br>';
echo '<br>';

$nameFirst='';
$nameSecond='';
$scoreFirst=0;
$scoreSecond=0;
$namePlayed='';
$score=0;
$score=1;
$mygtukas='Pradeti';
$newGame= 0;
$nameInputDisplay='block';
if(isset($_POST['mygtukas'])) {
    $nameFirst=($_POST['nameFirst']);
    $nameSecond=($_POST['nameSecond']);
    if($nameFirst!=='' && $nameSecond!=='' ){
        if($_POST['newGame']==1){
            $nameFirst='';
            $nameSecond='';
            $scoreFirst=0;
            $scoreSecond=0;
            $namePlayed='';
            $score=0;
            $mygtukas='Pradeti';
            $nameInputDisplay='block';
            $newGame= 0;  
        } 
        else{
            $nameInputDisplay= 'none';
            $mygtukas='Mesti kauliuka';
            $namePlayed=($_POST['namePlayed']);
            if($namePlayed==''){
                $namePlayed = $nameFirst;
                echo $nameFirst.' surinko: '.$scoreFirst.'<br>';
                echo $nameSecond.' surinko: '.$scoreSecond.'<br><br>';
            }
            else {
                $score=rand(1, 6);
                $scoreFirst=($_POST['scoreFirst']);
                $scoreSecond=($_POST['scoreSecond']);
                if($namePlayed == $nameFirst) {
                    $scoreFirst+=$score;
                    $namePlayed = $nameSecond;
                }
                else{    
                    $scoreSecond+=$score;
                    $namePlayed = $nameFirst;  
                }
                echo $nameFirst.' surinko: '.$scoreFirst.'<br>';
                echo $nameSecond.' surinko: '.$scoreSecond.'<br><br>';
                if($scoreFirst>= 30) {
                    echo 'Laimejo: '.$nameFirst.'<br>';
                    $mygtukas = 'Zaisti is naujo';
                    $newGame=1;
                }
                elseif($scoreSecond >= 30) {
                    echo 'Laimejo: '.$nameSecond.'<br>';
                    $mygtukas = 'Zaisti is naujo';
                    $newGame=1;
                }
                else{
                    echo 'Meta kauliuka: '.$namePlayed.'<br>';
                }
            }
        }  
    }   

}
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11 uzd</title>
</head>

<body>
    <form method="post">
        <input style="display:<?=$nameInputDisplay?>" type="text" name="nameFirst" placeholder="Enter first name" value=<?=$nameFirst;?>><br>
        <input style="display:<?=$nameInputDisplay?>" type="text" name="nameSecond" placeholder="Enter second name" value=<?=$nameSecond;?>><br>
        <input type="submit" value="<?=$mygtukas?>" name="mygtukas">
        <input style="display:none" type="text" name="scoreFirst" value=<?=$scoreFirst;?>><br>
        <input style="display:none" type="text" name="scoreSecond" value=<?=$scoreSecond;?>><br>
        <input style="display:none" type="text" name="namePlayed" value=<?=$namePlayed;?>><br>
        <input style="display:none" type="text" name="newGame" value=<?=$newGame;?>><br>
    </form>

</body>

</html>



<?php
session_start();
// session_unset();
$round = 0;
$p1result = 0;
$p2result = 0;

//Vardu issaugojimas
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_SESSION['player1'])){
    // Nustato varda jeigu neužrašo nieko
    if($_POST['firstplayer'] == ""){
        $_POST['firstplayer'] = "Pirmas žaidėjas";
    }
    if($_POST['secondplayer'] == ""){
        $_POST['secondplayer'] = "Antras žaidėjas";
    }
    //Išsaugo kintamuosius iš post masyvo paspaudus pradėti
    $_SESSION['player1'] = $_POST['firstplayer'];
    $_SESSION['player2'] = $_POST['secondplayer'];
    $_SESSION['result1'] = $p1result;
    $_SESSION['result2'] = $p2result;
    $_SESSION['round'] = $round;
    //Peradresuoja i ta pačia svetaine
    header('Location:http://localhost/Projektas/Webas/vienuolikta.php');
    die;
}
//Kintamuju priskyrimas
if (isset($_SESSION['player1'])){
    $player1 = $_SESSION['player1'];
    $player2 = $_SESSION['player2'];
    $p1result = $_SESSION['result1'];
    $p2result = $_SESSION['result2'];
    $round = $_SESSION['round'];
}

// echo "GETAS:<br>";
// print_r($_GET);
// echo "<br>POSTAS:<br>";
// print_r($_POST);
// echo "<br>SESIJA:<br>";
// print_r($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Žaidimas</title>
</head>

<body>
    <?php if ( !isset($_SESSION['player1'])) : ?>
    <form action="" method="POST">
        1 Žaidėjas: <input type="text" name="firstplayer"><br>
        2 Žaidėjas: <input type="text" name="secondplayer"><br>
        <button type="submit">Pradėti</button>
    </form>
    <?php
  
    if(isset($_SESSION['win'])){
        echo $_SESSION['win'];
    }
    ?>
    <?php endif ?>

    <?php if ( isset($_SESSION['player1'])) : ?>

    <?php if ( $round % 2 == 0) : ?>
    <br><?= $player1.", rezultatas: ".$_SESSION['result1']?>
    <form action="" method="POST">
        <br><button type="submit">Mesti kauliuką</button>
        <?php
        $_SESSION['result1'] += rand(1,6);
        $_SESSION['round']++;
        
        if($_SESSION['result1'] > 30){
            session_unset();
            $_SESSION['win'] = $player1." laimėjo!";
            header('Location:http://localhost/Projektas/Webas/vienuolikta.php');
            die;
        } 
        ?>
        <?php else: ?>
        <br><?= $player2.", rezultatas: ".$_SESSION['result2']?>
        <form action="" method="POST">
            <br><button type="submit">Mesti kauliuką</button>
            <?php 
        $_SESSION['result2'] += rand(1,6);
        $_SESSION['round']++;
        if($_SESSION['result2'] > 30){
            session_unset();
            $_SESSION['win'] = $player2." laimėjo!";
            header('Location:http://localhost/Projektas/Webas/vienuolikta.php');
            die;
        }
        ?>
        </form>
        <?php endif ?>
        <?php endif ?>
</body>

</html>