<?php
/*
1.	Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės
 yra atsitiktiniai skaičiai nuo 5 iki 25.
*/
echo '<br>1. uzdavinio sprendimas ---------------<br>';
echo '<br>';
$index = 0;
$masyvas = [];
$value = rand(5, 25);
echo '<br>';
for ($index = 0; $index<30; $index++) {
     $value = rand(5, 25);
     $masyvas[$index]=$value;
     //echo 'Indeksas: ' . $index . ' Reikšmė: ' . $value . '<br>';
   }
echo '<br>';
echo '<pre>';  
print_r($masyvas);

$masyvas = [];
foreach (range(0,29) as $index => $value) {
    $value = rand(5, 25);
    $masyvas[$index]=$value;
    //$index < 30;    
      echo '<pre>';    
    }
print_r($masyvas);

// $key = 0;
// $masyvas = [];
// do {
// $masyvas[$key++] = rand(5, 25);
// } while ($key < 30);
// echo '<pre>';
// print_r($masyvas);

/*
Naudodamiesi 1 uždavinio masyvu:
Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;

*/
echo '<br>';
echo '<br>2.a uzdavinio sprendimas ---------------<br>';
echo '<br>';

$didesneReiksme = 0;
foreach($masyvas as $value) {
    if ($value > 10) {
        $didesneReiksme++;
    }
}
echo "Didesniu nei 10 reiksmiu yra: $didesneReiksme";

/*
Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;
*/
echo '<br>';
echo '<br>2.b uzdavinio sprendimas ---------------<br>';
echo '<br>';


//$didziausiosVertes = array_keys($masyvas);
$maxreiksme = 0;
$index = 0;
$maxReiksmiuMasyvas = [];
foreach($masyvas as $key =>$value) {
    if ($value > $maxreiksme) {
        $maxreiksme = $value;
    } 
}
foreach($masyvas as $key =>$value) {
    if ($value == $maxreiksme) {
         $maxReiksmiuMasyvas[] = $key;
    }
}
echo "<br>";
print_r($masyvas);
echo '<br> Maksimali reikšmė:';
echo $maxreiksme;
echo '<br> Maksimalios reikšmės indeksai:<br>';
print_r($maxReiksmiuMasyvas);




/*
Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
*/
echo '<br>2.c uzdavinio sprendimas ---------------<br>';
echo '<br>';

$sum = 0;
foreach($masyvas as $key =>$value) {
    if ($key % 2 == 0) {
        $sum+=$value;
    }
}
echo "Lyginiu indeksu suma: $sum";

/*
Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės 
indeksas;
*/
echo '<br>';
echo '<br>2.d uzdavinio sprendimas ---------------<br>';
echo '<br>';

$newArray = [];
foreach($masyvas as $key => $value) {
    $newArray[] = $value - $key;
}
echo '<pre>';
print_r($newArray);

/*
Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas
 padidėtų iki indekso 39;
*/
echo '<br>2.e uzdavinio sprendimas ---------------<br>';
echo '<br>';


foreach (range(0,9) as $i) {
      $newArray[]=rand(5, 25);
    //$index < 30;    
      echo '<pre>';    
    }
print_r($newArray);

// $k = 0;
// while ($k<10) {
//     $newArray[] = rand(5, 25);
//     ++$k;
// }
// echo '<pre>';
// print_r($newArray);

/*
Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių 
indekso reikšmių, o kitas iš porinių;
*/
echo '<br>2.f uzdavinio sprendimas ---------------<br>';
echo '<br>';

$lyginis =[];
$nelyginis = [];

foreach($newArray as $key => $value) {
    if ($key % 2 == 0) {
        $lyginis[]=$value;
    } else {
        $nelyginis[] = $value;
    }
}
echo '<pre>';
print_r($nelyginis);
print_r($lyginis);


/*
Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni 
už 15;
*/
echo '<br>2.g uzdavinio sprendimas ---------------<br>';
echo '<br>';

foreach($masyvas as $key =>$value) {
    if ($key % 2 == 0) {
        if ($value>15) {
            $newArray[$key] = 0;
        }
    }
}
echo '<pre>';
print_r($newArray);

/*
Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
*/
echo '<br>2.h uzdavinio sprendimas ---------------<br>';
echo '<br>';
$i = 0;
while ($newArray[$i]<=10){
$i++;
}
echo $i;

/*
Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;
*/
echo '<br>2.i uzdavinio sprendimas ---------------<br>';
echo '<br>';

$newArray[]=0;
foreach($newArray as $key => $value) {
    if ($key % 2 == 0) {
        unset($newArray[$key]);
        }
}
print_r($newArray);

/*
3.Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. 
Suskaičiuokite kiek yra kiekvienos raidės.
*/
echo '<br>3 uzdavinio sprendimas ---------------<br>';
echo '<br>';
$masyvas= [];
$raides = ['A','B','C','D'];
$kiekiai =[0,0,0,0];
print_r($raides);
$index = 200;
$value = rand();
foreach (range(1,200) as $i) {
    $rand = rand(0, 3);
    $masyvas[]=$raides[$rand];
    $kiekiai[$rand]++;
}
echo '<pre>';        
print_r($masyvas);
print_r($raides);
print_r($kiekiai);
echo 'Masyve esanciu raidziu skaicius:';
echo '<br>';
foreach($raides as $key => $value){
    echo "$value:$kiekiai[$key]<br>";
}

$masyvas = [];
$a=0;
$b=0;
$c=0;
$d=0;
foreach (range(1,200) as $i) {
    $rand = rand(0, 3);
    if ($rand == 0){
        $masyvas[$i]='A';
        $a++;
    }
    elseif ($rand == 1){
        $masyvas[$i]='B';
        $b++;
    }
    elseif ($rand == 2){
        $masyvas[$i]='C';
        $c++;
    }
    else {
        $masyvas[$i]='D';
        $d++;
    }
}
echo '<pre>';  
print_r($masyvas);
echo "<br> A raidziu masyve yra: $a";
echo "<br> B raidziu masyve yra: $b";
echo "<br> C raidziu masyve yra: $c";
echo "<br> D raidziu masyve yra: $d";

/*
4.Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.
*/
echo '<br>4 uzdavinio sprendimas ---------------<br>';
echo '<br>';

sort($masyvas);
//echo '<pre>';  
print_r($masyvas);

/*
5. Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą.
 Sudėkite masyvus, sudėdami
 atitinkamas reikšmes. Paskaičiuokite kiek unikalių
  (po vieną, nesikartojančių)
  reikšmių ir kiek unikalių kombinacijų gavote.
*/
echo '<br>5 uzdavinio sprendimas ---------------<br>';
echo '<br>';
$masyvas1 = [];
$masyvas2 = [];
$masyvas3 = [];
$masyvas123 = [$masyvas1, $masyvas2, $masyvas3];
foreach(range(0,2) as $key) {
    foreach (range(1,200) as $i) {
        $rand = rand(0, 3);
        if ($rand == 0){
            $masyvas123[$key][$i]='A';
        }
        elseif ($rand == 1){
           $masyvas123[$key][$i]='B';
        }
        elseif ($rand == 2){
            $masyvas123[$key][$i]='C';
        }
        else {
            $masyvas123[$key][$i]='D';
        }
    }
}
echo '<pre>';  
print_r($masyvas123);
$masyvasCombine = [];
foreach(range(1,200) as $i){
    $masyvasCombine[$i] = $masyvas123[0][$i].$masyvas123[1][$i].$masyvas123[2][$i] ;
}
print_r($masyvasCombine);
sort($masyvasCombine);
print_r($masyvasCombine);
$uniqueValue = 0;
$uniqueComb = 1;
for ($i=1; $i<200; $i++) {
    if ($masyvasCombine[$i] != $masyvasCombine[$i-1]) {
        $uniqueComb++;
        if ($i != 199 && $masyvasCombine[$i] != $masyvasCombine[$i+1]) {
            $uniqueValue++;

        }
    }
}
echo '<br>';
echo "Unikaliu reiksmiu masyve yra: $uniqueValue";
echo '<br>';
echo "Unikaliu kombinaciju masyve yra: $uniqueComb";

/*
6. Sugeneruokite du masyvus, kurių reikšmės yra 
atsitiktiniai skaičiai nuo 100 
iki 999.
 Masyvų ilgiai 100. Masyvų reikšmės turi būti
  unikalios savo masyve 
 (t.y. neturi kartotis).

*/
echo '<br>';
echo '<br>6 uzdavinio sprendimas ---------------<br>';
echo '<br>';

$array1 = [];
$array2 = [];
foreach(range(1,100) as $index){
    do {
        $value = rand(100, 999);
    } while (array_search($value, $array1, true)!==false);
    $array1[]=$value;
}
echo '<br>';
print_r($array1);
foreach(range(1,100) as $index){
    do {
        $value = rand(100, 999);
    } while (array_search($value, $array2, true)!==false);
    $array2[]=$value;
}
echo '<br>';
print_r($array2);
$array61 = $array1 ;
$array62 = $array2  ;

/*
7. Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių,
 kurios yra pirmame 6 uždavinio 
masyve, bet nėra antrame 6 uždavinio masyve.
*/
echo '<br>';
echo '<br>7 uzdavinio sprendimas ---------------<br>';
echo '<br>';
$arrayNew = [];
foreach($array1 as $value){
    if (array_search($value, $array2, true) === false) {
         $arrayNew[]=$value;
    } 
}
echo '<br>';
print_r($arrayNew);

/*
8. Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.
*/
echo '<br>';
echo '<br>8uzdavinio sprendimas ---------------<br>';
echo '<br>';
$arrayNew1 = [];
foreach($array1 as $value){
    if (array_search($value, $array2, true) !== false) {
         $arrayNew1[]=$value;
    } 
}
echo '<br>';
print_r($arrayNew1);

/*
9. Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės,
 o jo reikšmės iš būtų antrojo masyvo.
*/
echo '<br>';
echo '<br>9 uzdavinio sprendimas ---------------<br>';
echo '<br>';


$arrayCombined = array_combine($array62, $array61);
//array_combine(array $keys, array $values): array

print_r($arrayCombined);

/*
10. Sugeneruokite 10 skaičių masyvą pagal taisyklę: 
Du pirmi skaičiai- atsitiktiniai
 nuo 5 iki 25. Trečias, pirmo ir antro suma.
  Ketvirtas- antro ir trečio suma. 
 Penktas trečio ir ketvirto suma ir t.t.
*/
echo '<br>';
echo '<br>10 uzdavinio sprendimas ---------------<br>';
echo '<br>';

$masyvas10 = [];

$masyvas10[1] = rand(5, 25);
$masyvas10[2] = rand(5, 25);
for ($i=3; $i<=10; $i++) {
    $masyvas10[$i] = $masyvas10[$i-1]+$masyvas10[$i-2];
}

print_r($masyvas10);

/*
11. Sugeneruokite 101 elemento masyvą su atsitiktiniais skaičiais nuo 0 iki 300.

 Reikšmes kurios tame masyve yra ne unikalios pergeneruokite iš naujo taip, 
 kad visos  reikšmės masyve būtų unikalios. 

 Išrūšiuokite masyvą taip, kad jo didžiausia  reikšmė būtų  masyvo viduryje,
  o einant nuo jos link masyvo pradžios ir pabaigos reikšmės mažėtų. 

 Paskaičiuokite pirmos ir antros masyvo dalies sumas (neskaičiuojant vidurinės).

  Jeigu  sumų skirtumas (modulis, absoliutus dydis) yra didesnis nei | 30 | 
  rūšiavimą 
 kartokite.  (Kad sumos nesiskirtų viena nuo kitos daugiau nei per 30)

*/
echo '<br>';
echo '<br>11 uzdavinio sprendimas ---------------<br>';
echo '<br>';

// $array11 = [];
// $value11 = rand(0, 300);
// foreach(range(1,101) as $index => $value11){
//     do {
//     $value11 = rand(0, 300);
//     } while (array_search($value11, $array11, true)==false);
//     $array11[] = $value11;
// }
// echo '<br>';
// print_r($array11);

// // foreach(range(0,99) as $index){
// //     do {
// //         $value = rand(100, 999);
// //     } while (array_search($value, $array2, true)!=false);
// //     $array2[]=$value;
// // }
// // echo '<br>';
// // print_r($array2);
// // $array61 = $array1 ;
// // $array62 = $array2  ;

echo '11. <br>';
$array7 = [];
$length = 0;
do {
    $unique = false;
    do {
        $random = rand(0, 300);
        if (!array_search($random, $array1)) {
            $array7[$length] = $random;
            $unique = true;
            $length++;
        }
    } while (!$unique);
} while ($length < 101);
rsort($array7);
$biggest = $array7[0];
// print_r($array7);
unset($array7[0]);
// print_r($array7);
$sorted = false;
    $array8 = [];
    $array9 = [];
do {
    shuffle($array7);
    $sorted = true;
    $array8 = [];
    $array9 = [];
    $j = 0;
    $sum1 = 0;
    $sum2 = 0;
    foreach($array7 as $value) {
        if ($j % 2 === 0) {
            $array8[] = $value;
            $sum1 += $value;
        } else {
            $array9[] = $value;
            $sum2 += $value;
        }
        $j++;
    }
    $diff = ($sum1 > $sum2) ? $sum1 - $sum2 : $sum2 - $sum1;
    //echo "$diff  ";
    if ($diff > 30) {
        $sorted = false;
        shuffle($array7);
    }
} while (!$sorted);
sort($array8);
rsort($array9);
$array8[] = $biggest;
foreach ($array9 as $value) {
    $array8[] = $value;
}
print_r($array8);

$pirmaPuse=0;
$antraPuse=0;
$pirminisMasyvas=[];
$counter=0;
//generuoja skaiciu masyva
do{
$random=rand(0,300);
    if(!in_array($random,$pirminisMasyvas)){
    $pirminisMasyvas[]=$random;
    $counter++;}
}
while($counter<101);
//suranda didziausia skaiciu reiksme issaugo ir istrina is masyvo
$didziausiasSkaicius=max($pirminisMasyvas);
$indexOfMax=(array_search(max($pirminisMasyvas), $pirminisMasyvas));
unset($pirminisMasyvas[$indexOfMax]);
//tikrina ar masyvo skaiciai iki vidurinio is abieu pusiu nesiskiria per 30 , jai skirias sumaiso masyva. 
do{
    shuffle($pirminisMasyvas);
foreach ($pirminisMasyvas as $key => $value) {
    if($key<50){
        $pirmaPuse+=$value;
    }
    else{
        $antraPuse+=$value;
    }
}
}
while($pirmaPuse-$antraPuse>30);
//dalinam masyva
$masyvasPoPadalinimo=array_chunk($pirminisMasyvas,50);

sort($masyvasPoPadalinimo[0]);
rsort($masyvasPoPadalinimo[1]);
//jungiam masyva
array_push($masyvasPoPadalinimo[0],$didziausiasSkaicius);
$sujungtasMasyvas=array_merge($masyvasPoPadalinimo[0],$masyvasPoPadalinimo[1]);

print_r( $sujungtasMasyvas);