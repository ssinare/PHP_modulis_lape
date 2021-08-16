<?php

require __DIR__ . '/functions.php';

$saskaitos = getSaskaitos();

if ('POST' == $_SERVER['REQUEST_METHOD']) {

    $saskaita['Vardas'] = (string)$_POST['Vardas']; //router visus situs
    $saskaita['Pavardė'] = (string)$_POST['Pavardė'];
    $saskaita['Sąskaita'] = (string)$_POST['Sąskaita'];
    $saskaita['Asmens_kodas'] = (string)$_POST['Asmens_kodas'];
    $saskaita['Likutis'] = (int)$_POST['Likutis'];

    setSaskaita($saskaita);

    header('Location: http://localhost/Lape/bankas/saskaitu_sarasas.php');
    die;
}

if ('GET' == $_SERVER['REQUEST_METHOD']) :

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nauja sąskaita</title>
</head>
<style>
div,
h4 {
    display: inline-block;
    margin: 5px;
    padding: 5px;
    border: 1px solid #ccc;
    width: 430px;
    text-decoration: none;
    text-align: justify;
}

a {
    display: inline-block;
    color: grey;
    background-color: lightgray;
    margin: 5px;
    padding: 5px;
    border: 1px solid #ccc;
    width: 200px;
    text-decoration: none;
    text-align: center;
}
</style>

<body>
    <h4>
        <a href="http://localhost/Lape/bankas/meniu.php">Meniu</a>
    </h4>

    <form action="" method="POST">

        <div>
            <label>Vardas: </label><input type="text" name="Vardas" placeholder="Įveskite kliento vardą" required pattern="[a-zA-Z]{3,}">
        </div>

        <div>
            <label>Pavardė: </label><input type="text" name="Pavardė" placeholder="Įveskite pavardę" required pattern="[a-zA-Z]{3,}">
        </div>

        <div>
            <label>Sąskata: </label><input type="text" name="Sąskaita" placeholder="Įveskite sąskaitos numerį" required pattern="[A-Z]{2}[0-9]{18}">
        </div>

        <div>
            <label>Asmens kodas: </label><input type="text" name="Asmens_kodas" placeholder="Įveskite asmens kodą" required pattern="[3-6][0-9]{10}">
        </div>
        <div>
            <label>Likutis: </label><input type="text" name="Likutis" value=0 placeholder="Suma" required>
        </div>

        <div>
            <button type="submit" name="Ivesti" value="Suvesti duomenys">Išsaugoti duomenis</button>
        </div>

    </form>

</body>

</html>
<?php endif;