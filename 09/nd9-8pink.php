<?php
/*
8.	Sukurkite du puslapius pink.php ir rose.php. Nuspalvinkite juos
 atitinkamo spalvom. Į pink.php puslapį įdėkite formą su POST metodu ir
  mygtuku “GO TO ROSE”. Formą nukreipkite, kad ji atsidarinėtų rose.php 
  puslapyje. Padarykite taip, kad surinkus naršyklėje tiesiogiai adresą į 
  rose.php puslapį, naršyklė būtų peradresuojama į pink.php puslapį. 
*/

echo '<br>';
echo '<br>8 -pink. uzdavinio sprendimas ---------------<br>';
echo '<br>';

?>

<html>

<body style="background-color: pink; ">


    <form action="http://localhost/lape/09/nd9-8rose.php" method="post">
        <br>
        <input type="text" name="color" style="display:none"><br>
        <input type="submit" value="GO TO ROSE">
    </form>

</body>

</html>
<?php