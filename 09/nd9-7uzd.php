<?php
/*
7.	Pakartokite 6 uždavinį. Papildykite jį kodu, kuris 
naršyklę po POST
 metodo peradresuotų tuo pačiu adresu
  (t.y. į patį save) jau GET metodu.
*/
if (isset($_GET['color'])) {
    $spalva = 'green';
} 
//print_r($_SERVER['REQUEST_METHOD']);

if(isset($_POST['color'])){
    $spalva = 'yellow';
    header('Location: http://localhost/lape/09/nd9-7uzd.php?color=');
    die;
}
//print_r($_SERVER['REQUEST_METHOD']);
    

?>
<html>

<body style="background-color: <?=$spalva?>; ">
    <form action="./nd9-7uzd.php" method="<?=$get?>;">
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
<?php