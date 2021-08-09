<?php
/*
6.	Padarykite puslapį su dviem mygtukais. Mygtukus įdėkite į dvi 
skairtingas formas- vieną GET ir kitą POST. Nenaudodami jokių konkrečių 
$_GET ar $_POST reikšmių, nuspalvinkite foną žaliai, kai paspaustas mygtukas
 iš GET formos ir geltonai- kai iš POST.
*/

if (isset($_GET['color'])) {
    $spalva = 'green';
} 
if(isset($_POST['color'])){
    $spalva = 'yellow';
}

?>

<html>

<body style="background-color: <?=$spalva?>; ">

    <form action="./nd9-6uzd.php" method="get">
        <br>
        <input type="text" name="color" style="display:none"><br>
        <input type="submit" value="Get spalva">
    </form>

    <form action="" method="post">
        <br>
        <input type="text" name="color" style="display:none"><br>
        <input type="submit" value="Post spalva">
    </form>

</body>

</html>