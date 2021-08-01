<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/*
1.	Naršyklėje nupieškite linija iš 400 “*”. 
a)	Naudodami css stilių “suskaldykite” liniją taip,
kad visos žvaigždutės matytųsi ekrane;
b)	Programiškai “suskaldykite” žvaigždutes taip, kad 
vienoje eilutėje nebūtų daugiau nei 50 “*”; 

*/
echo '<br>1. uzdavinio sprendimas ---------------<br>';
echo '<br>';
$star = '*';

for ($i=1; $i<=400; $i++) {
    echo " $star ";
    $star++;
}
//char split

// $line='';
// $i=0;
// while($i<400){
//     $line.='*';
//     $i++;
// }
// echo '<br>';
// echo 'A) <br>';
// echo "<p  style='width:auto; word-wrap:break-word';>$line</p>";

// //echo $line;
// $lineOf50=str_split($line,50);
// echo '<br>';
// echo 'B)';
// print_r($lineOf50);

// echo '<br>';
// echo '<br>';




?>
}
</body>
</html>
<?php
/*
2.	Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, 
atspausdinkite juos atskirtus tarpais ir suskaičiuokite 
kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 
275 turi būti raudonos spalvos.
*/
echo '<br>2. uzdavinio sprendimas ---------------<br>';
echo '<br>';
$didesni = 0;
for ($i=0; $i<=300; $i++) {
    $skaiciai = rand(0,300);
    echo "$skaiciai ";
    //echo '<br>';
    if ($skaiciai> 150){
        $didesni++;
    }
    if ($skaiciai>275){
        echo "<font color=red > $skaiciai </font>";
    }
}
echo '<br>';
echo '<br>';
echo "Didesni uz 150 skaiciai yra: <font color=blue > $didesni </font>";


/*
3.	Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki
atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki
3476), kurie dalijasi iš 77 be liekanos. Skaičius
atskirkite kableliais. Po paskutinio skaičiaus kablelio 
neturi būti. Jeigu reikia, panaudokite css, kad visi 
rezultatai matytųsi ekrane.
*/
echo '<br>';
echo '<br>3. uzdavinio sprendimas ---------------<br>';
echo '<br>';
echo $atsitiktinis = rand(3000, 4000);
echo '<br>';
for ($i = 0; $i<$atsitiktinis; $i++) {
    if ($i % 77 == 0) {
        echo "$i, ";
        
    }
       
}

/*
4.	Nupieškite kvadratą iš “*”, kurio kraštines 
sudaro 100 “*”. Panaudokite css stilių, kad kvadratas
 ekrane atrodytų kvadratinis.
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *

*/
echo '<br>';
echo '<br>4. uzdavinio sprendimas ---------------<br>';
echo '<br>';
$stars = '*';
$nextLine=100;

echo '<div style="display: block">';
echo '<div style="display: block; height:8px">';
for($i=1; $i<=10000; $i++) {
    echo "<span ><font color=green >$stars</font></span>";
    if ($i == $nextLine) {
        echo '</div>';
        $nextLine = $nextLine + 100;
        if ($i < 10000) {
            echo '<div style="display: block; height:8px">';
        }
    }
}
echo '</div>';
/*
5.	Prieš tai nupieštam kvadratui nupieškite raudonas 
istrižaines.
*/
echo '<br>';
echo '<br>5. uzdavinio sprendimas ---------------<br>';
echo '<br>';
echo '<div style="display: block">';
for($i=1; $i<=100; $i++) {
    echo '<div style="display: block; height:8px">';
    for($j=1; $j<=100; $j++) {
        if ($j==$i || $j==100-$i+1) {
             echo "<span ><font color=red >$stars</font></span>";
        }
        else {
             echo "<span>$stars</span>";
        }
    }
    echo '</div>';
}
echo '</div>';



/*
6.	Metam monetą. Monetos kritimo rezultatą imituojam rand() 
funkcija, kur 0 yra herbas, o 1 - skaičius. Monetos metimo 
rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu
 iškrito skaičius ir “H” jeigu herbas. Suprogramuokite keturis 
 skirtingus scenarijus kai monetos metimą stabdome:
a)	Iškritus herbui;
b)	Tris kartus iškritus herbui;
c)	Tris kartus iš eilės iškritus herbui;

*/
echo '<br>';
echo '<br>6. uzdavinio sprendimas ---------------<br>';
echo '<br>';
echo $moneta = rand(0, 1);
echo '<br>';
    if ($moneta == 0) {
        echo 'H'.'<br>';
    }
    elseif ($moneta == 1) {
        echo 'S'.'<br>';
    }
echo '<br>6a.';
echo '<br>';
do {
    $moneta = rand(0, 1);
    if ($moneta == 0) {
        echo 'H'.'<br>';
    }
    elseif ($moneta == 1) {
        echo 'S'.'<br>';
    }

} while ($moneta != 0);


echo '<br>6b.';
echo '<br>';
$herbas = 0;
do {
    $moneta = rand(0, 1);
    if ($moneta == 0) {
        echo 'H'.'<br>';
        $herbas++;
    }
    elseif ($moneta == 1) {
        echo 'S'.'<br>';
    }

} while ($herbas < 3);

echo '<br>';
echo '<br>6c.';
echo '<br>';
$herbas = 0;
do {
    $moneta = rand(0, 1);
    if ($moneta == 0) {
        echo 'H'.'<br>';
        $herbas++;
    }
    elseif ($moneta == 1) {
        echo 'S'.'<br>';
        $herbas = 0;
    }
} while ($herbas < 3);


/*
7.	Kazys ir Petras žaidžiai Bingo. Petras surenka taškų kiekį 
nuo 10 iki 20, Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje
 eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją 
 laimėjo: laimėtojo vardas”. Taškų kiekį generuokite funkcija 
 rand(). 
 Žaidimą laimi tas, kas greičiau surenka 222 taškus. 
 Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 
 arba daugiau taškų. Nenaudoti cikle break.

*/
echo '<br>';
echo '<br>7. uzdavinio sprendimas ---------------<br>';
echo '<br>';
$petroSurinktiTaskai=0;
$kazioSurinktiTaskai=0;
do {
$petroTaskai = rand(10, 20);
$kazioTaskai = rand(5, 25);
echo "Petro surinkti taskai: $petroTaskai , Kazio surinkti taskai: $kazioTaskai.";
    if ($petroTaskai > $kazioTaskai) {
        echo ' Parija laimejo: Petras.';
        echo '<br>';
        echo $petroSurinktiTaskai=$petroSurinktiTaskai+$petroTaskai;
        echo '<br>';
        echo $kazioSurinktiTaskai=$kazioSurinktiTaskai+$kazioTaskai;
        echo '<br>';
    }
    else {
        echo ' Parija laimejo: Kazys.';
        echo '<br>';
        echo $kazioSurinktiTaskai=$kazioSurinktiTaskai+$kazioTaskai;
        echo '<br>';
        echo $petroSurinktiTaskai=$petroSurinktiTaskai+$petroTaskai;
        echo '<br>';
    }
} while ($petroSurinktiTaskai <=222 || $kazioSurinktiTaskai <=222 );
echo "<br> Petro is viso surinkti taskai: $petroSurinktiTaskai <br>";
echo "<br> Kazio is viso surinkti taskai: $kazioSurinktiTaskai <br>";

/*
8.	Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą
 (https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. Reikia padaryti, 
 kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos
  turi keistis).
*/
echo '<br>';
echo '<br>8. uzdavinio sprendimas ---------------<br>';
echo '<br>';
echo '<div>';
for($i=0;$i<=10;$i++){
    
    for ($d=11-$i; $d > 0; $d--)  {
        echo "&nbsp;&nbsp;";
    }
    for($j=1;$j<=$i;$j++){
        $r=rand(0,255);
        $g=rand(0,255);
        $b=rand(0,255);
        echo "&nbsp;<span style='color: rgb($r, $g, $b);'>$stars</span>&nbsp;";
    }
    echo "<br>";
}
echo '</div>';
for($i=9;$i>=1;$i--){
    
    for ($d=0; $d <= 10-$i; $d++)  {
        echo  "&nbsp;&nbsp;";
    }
    for($j=$i;$j>=1;$j--){
        $r=rand(0,255);
        $g=rand(0,255);
        $b=rand(0,255);
        echo "&nbsp;<span style='color: rgb($r, $g, $b);'>$stars</span>&nbsp;";
    }
    echo "<br>";
}
echo '</div>';
echo '<br>';


// for ($i = 1; $i < 10; $i++) {​​​
//     for ($j = $i; $j < 10; $j++) {
//         echo '&nbsp;&nbsp;&nbsp;';
//     }
//     for ($j = 2 * $i - 1; $j > 0; $j--) {
//         echo'&nbsp;<span style="color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).');">*</span>';
//         echo'<br>';
//     }
    
// }​​​
// for ($i = 10; $i > 0; $i--) {​​​
//     for ($j = 10 - $i; $j > 0; $j--) {
//         echo'&nbsp;&nbsp;&nbsp;';
//     }
//     for ($j = 2 * $i - 1; $j > 0; $j--) {
//         echo'&nbsp;<span style="color: rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).');">*</span>';
//        }
//     echo"<br>";
// }​​​



/*

$viniesGylis=850;
$kalimuSkaicius=0;
$visoViniu=5;
while($visoViniu!=0){
do{
    $viniesGylis-=rand(5,20);
    $kalimuSkaicius++;
}
while($viniesGylis>=0);
$visoViniu--;
}
echo 'mazais smugiais 5 vinys <br>';
echo $kalimuSkaicius,'<br>';
 
//B
 
$viniesGylis2=850;
$kalimuSkaicius2=0;
$visoViniu2=5;
 
while($visoViniu2!=0){
    if(rand(0,1)==0){
do{
    $viniesGylis2-=rand(20,30);
    $kalimuSkaicius2++;
}
while($viniesGylis2>=0);}
$visoViniu2--;
}
echo 'dideliais smugiais 5 vinys <br>';
echo $kalimuSkaicius2;

*/

/*

echo '11. <br>';
$skaiciuKiekis = 0;
$skaiciuStringas = '';
$pirminiai = '';

do {
    $unikalusSkaicius = false;
    do {
        $random = rand(1, 200);
        if (!strpos($skaiciuStringas, $random)) {
            $skaiciuStringas .= $random . ' ';
            $skaiciuKiekis++;
            $unikalusSkaicius = true;
            $pirminis = true;
            for ($i = 2; $i <= $random/2; $i++){
                if ($random % $i == 0) {
                    $pirminis = false;
                }
            }
            if ($pirminis) {
                $pirminiai .= $random . ' ';
            }
        }
    } while (!$unikalusSkaicius);
} while ($skaiciuKiekis < 50);
echo $skaiciuStringas . '<br>';
echo $pirminiai;
*/

