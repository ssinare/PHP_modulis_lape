<?php
// Laba diena visiems
        echo '<h1>Viso  geros dienos</h1>';
    $pirmas = 'antras';
    $antras = 'bla bla<br>';
    echo $$pirmas;  
    
    
    $pirmas = 'bla bla<br>';
    $antras = 'ku kū<br>';
    echo $pirmas, $antras;
    print $pirmas;

    print_r($pirmas);
    var_dump($pirmas, $antras);

    $drambliai = 3;
        if ($drambliai) {
        echo 'Yra dramblių<br>';
        }
    
    echo 5<=>7, '<br>'; // -1;
    echo 5<=>5, '<br>'; //gražins 0;
    echo 5<=>4, '<br>'; //gražins 1;

    $drambliai = 3;
    $raganosiai = 3;
    if ($drambliai > $raganosiai) echo 'Dramblių yra daugiau<br>';
    elseif ($drambliai < $raganosiai) echo 'Raganosių yra daugiau<br>';
    else echo '<pre>Raganosių
                    ir dramblių
                        yra vienodai</pre>';
      

 $PetroTaskai = rand(10, 20); echo 'Petro surinkti taskai: ' .$PetroTaskai, '<br>';
 $JonoTaskai = rand(5, 25); echo 'Jono surinkti taskai: ' .$JonoTaskai, '<br>';
    if ($PetroTaskai > $JonoTaskai) echo 'Laimejo: Petras<br>';
    elseif ($PetroTaskai < $JonoTaskai) echo 'Laimejo: Jonas<br>';
    elseif ($PetroTaskai == $JonoTaskai) echo 'Jonas ir Petras surinko vienodai tasku<br>';

        isset($i);
        $i = 1;
        echo $i, '<br>';

$rezultatas = $vienas ?? 8;// gražina 8
$vienas = 1;
$rezultatas = $vienas ?? 8;// gražina 1



for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}

$egzaminoRezultatas = rand(1, 10);
// Išvesti rezultatą ir sprendimą ar egzaminas išlaikytas. Mažiausias išlaikymo balas yra 4
if ($egzaminoRezultatas >= 4) echo "<br>Egzaminas islaikytas, gautas pazymys: $egzaminoRezultatas, <br>";
elseif ($egzaminoRezultatas < 4) echo '<br>Egzaminas neislaikytas<br>';


$automobilioGreitis = rand(40, 125);
$bauda = ($automobilioGreitis - 60) * 5;
// Išvesti automobilio greitį ir baudos dydį, jeigu greiti didesnis nei 60. Bauda yra viršytas greitis X 5
if ($automobilioGreitis > 60 ) echo "<br>Automobilio greitis yra $automobilioGreitis, bauda yra $bauda, <br>";
elseif ($automobilioGreitis <= 60) echo "<br>Automobilio greitis yra $automobilioGreitis, automobilis nevirsijo greicio<br>";


$dalyvis1 = rand(1, 4);
$dalyvis2 = rand(1, 4);
// Išvesti dalyvių pasirinktus skaičius ir pranešimą "Laimėjo", jeigu 
//dalyvių skaičių suma didesnė nei 6 arba tie skaičiai yra vienodi. 
//Pranešimą "Pralaimėjo" - priešingu atveju 
if (($dalyvis1 + $dalyvis2) > 6) echo 'Laimejo <br>';
elseif ($dalyvis1 + $dalyvis2 === 6) echo 'Laimejo<br>';
else  echo '<br>Pralaimejo<br>';


$dydis = 'L';
$kurGalimaDeti = '';

switch ($dydis) {
    case 'S':
        $kurGalimaDeti .= 'S ';
    case 'M':
        $kurGalimaDeti .= 'M ';
    case 'L':
        $kurGalimaDeti .= 'L ';
    default:
        $kurGalimaDeti .= 'XL ';
}

echo '<br>';echo '<br>';
echo $kurGalimaDeti;








    ?>