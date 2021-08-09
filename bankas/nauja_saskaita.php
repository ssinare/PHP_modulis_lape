<?php
function getSaskaita(): array
{
    if (!file_exists(__DIR__ . '/nauja_saskaita.json')) { //kai failo nera
        $saskaitos = [];
        $saskaita = ['Vardas' => '', 'Pavardė' => '', 'Sąskaita' => 0, 'Asmens_kodas' => 0];

        $saskaita = json_encode($saskaita);
        file_put_contents(__DIR__ . '/nauja_saskaita.json', $saskaita); //nusiskaitom bebrus. DIR YRA serveris, NE url
    }
    return json_decode(file_get_contents(__DIR__ . '/nauja_saskaita.json'), 1); //kai failas yra ir visada(get contents). kai decode dekoduoja, ji pavercia i objekta. reikia antra argumenta padaryti true, kad nebutu objektas, todel raom 1
}
function setSaskaita(array $saskaita): void
{
    $esamosSaskaitos = getSaskaita();
    array_push($esamosSaskaitos, $saskaita);
    $naujosSaskaita = json_encode($esamosSaskaitos);
    file_put_contents(__DIR__ . '/nauja_saskaita.json', $naujosSaskaita);
}

//setSaskaita(['Vardas' => 'Petras', 'Pavardė' => 'Petraitis', 'Sąskaita' => 'LT00123456789', 'Asmens_kodas' => 38905050397]); //json faile atsiranda, galima istirinti, arba setiname loocalhoste
$saskaitos = getSaskaita();



if ('POST' == $_SERVER['REQUEST_METHOD']) {
    $saskaita = getSaskaita();

    $saskaita['Vardas'] = (string)$_POST['Vardas'];
    $saskaita['Pavardė'] = (string)$_POST['Pavardė'];
    $saskaita['Sąskaita'] = (string)$_POST['Sąskaita'];
    $saskaita['Asmens_kodas'] = (string)$_POST['Asmens_kodas'];


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
</style>

<body>
    <h4>Pridėti vardą: <?= $saskaitos[count($saskaitos) - 1]['Vardas'] ?></h4>
    <h4>Pridėti pavardę: <?= $saskaitos[count($saskaitos) - 1]['Pavardė'] ?></h4>
    <h4>Pridėti sąskaitos numerį: <?= $saskaitos[count($saskaitos) - 1]['Sąskaita'] ?></h4>
    <h4>Pridėti asmens kodą: <?= $saskaitos[count($saskaitos) - 1]['Asmens_kodas'] ?></h4>
    <form action="" method="POST">

        <div>
            <label>Vardas: </label><input type="text" name="Vardas" placeholder="Įveskite kliento vardą" required>
        </div>

        <div>
            <label>Pavardė: </label><input type="text" name="Pavardė" placeholder="Įveskite pavardę" required>
        </div>

        <div>
            <label>Sąskata: </label><input type="text" name="Sąskaita" placeholder="Įveskite sąskaitos numerį" required pattern="[A-Z]{2}[0-9]{18}">
        </div>

        <div>
            <label>Asmens kodas: </label><input type="text" name="Asmens_kodas" placeholder="Įveskite asmens kodą" required pattern="[3-6][0-9]{10}">
        </div>
        <div>
            <button type="submit" name="Ivesti" value="Suvesti duomenys">Išsaugoti duomenis</button>
        </div>

    </form>

</body>

</html>
<?php endif;