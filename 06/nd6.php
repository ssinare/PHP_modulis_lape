
<?php
/*
4 - usort custom f-ja
1.	Sugeneruokite masyvą iš 10 elementų, kurio elementai 
būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.
*/
echo '<br>';
echo '<br>1. uzdavinio sprendimas ---------------<br>';
echo '<br>';

$masyvas = [];
foreach(range(1, 10) as $i) {
    foreach(range(1, 5) as $j) {
        $masyvas[$i][$j] = rand(5, 25);
    }
}
echo '<pre>';
print_r($masyvas);

/*
2.	Naudodamiesi 1 uždavinio masyvu:
a)	Suskaičiuokite kiek masyve yra elementų didesnių už 10;
*/

echo '<br>';
echo '<br>2a. uzdavinio sprendimas ---------------<br>';
echo '<br>';

$elementuSk = 0;
foreach(range(1, 10) as $i) {
    foreach(range(1, 5) as $j) {
        if ($masyvas[$i][$j] > 10) {
            $elementuSk++;
        }
    }
}
echo $elementuSk;
echo '<br>';
/*

b)	Raskite didžiausio elemento reikšmę;
*/
echo '<br>';
echo '<br>2b. uzdavinio sprendimas ---------------<br>';
echo '<br>';

$maxReiksme = 0;
foreach($masyvas as $value) {
    foreach($value as $value1) {
            if ($value1 > $maxReiksme) {
            $maxReiksme = $value1;
        }   
    }
}
echo $maxReiksme;
echo '<br>';

/*
c)	Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas
 (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
*/
echo '<br>';
echo '<br>2c. uzdavinio sprendimas ---------------<br>';
echo '<br>';
$sum = [1=>0, 2=>0, 3=>0, 4=>0, 5=>0];
foreach(range(1, 5) as $j) {
    foreach(range(1, 10) as $i){
        $sum[$j]+= $masyvas[$i][$j];       
    }
}            
print_r($sum);
echo '<br>';

/*
d)	Visus masyvus “pailginkite” iki 7 elementų
*/
echo '<br>';
echo '<br>2d. uzdavinio sprendimas ---------------<br>';
echo '<br>';
foreach(range(1, 10) as $i) {
    foreach(range(1, 2) as $j) {
        $masyvas[$i][] = rand(5, 25); 
    }
}
echo '<br>';
print_r($masyvas);
echo '<br>';


/*
e)	Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite 
kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, 
turinčio indeksą 0 dideliame masyve, visų elementų sumai 
*/
echo '<br>';
echo '<br>2e. uzdavinio sprendimas ---------------<br>';
echo '<br>';
 //$sum = [];
foreach($masyvas as $i => $value) {
    $sum[$i] = 0;
    foreach($value as $value1 ){
        $sum[$i]+= $value1;       
    }
}            
print_r($sum);
echo '<br>';

/*
3.	Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti 
masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės
 atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus
  pagal abėcėlę (t.y. tuos kur su raidėm).
*/
echo '<br>';
echo '<br>3. uzdavinio sprendimas ---------------<br>';
echo '<br>';
$masyvas3 = [];
foreach(range(1, 10) as $parentIndex) {
    foreach(range(1, rand(2, 20)) as $childIndex) {
        $masyvas3[$parentIndex][$childIndex] = chr(rand(65, 90));
    }
    sort($masyvas3[$parentIndex]);
}
print_r($masyvas3);
echo '<br>';

/*
4.	Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių
 masyvai trumpiausi eitų pradžioje. Masyvai kurie turi bent vieną “K” raidę, visada
  būtų didžiojo masyvo visai pradžioje. array_merge(array ...$arrays): array
  (array_slice

*/
echo '<br>';
echo '<br>4. uzdavinio sprendimas ---------------<br>';
echo '<br>';
$keiciamasMasyvas = []; 
foreach($masyvas3 as $parentIndex => $vaikas) {
    echo count($vaikas);
    echo '<br>';
    $keiciamasMasyvas = [];
    foreach($masyvas3 as $parentIndex2 => $vaikas2) {
        if (count($masyvas3[$parentIndex]) < count($vaikas2)) {
            $keiciamasMasyvas = $masyvas3[$parentIndex];
            $masyvas3[$parentIndex] = $vaikas2;
            $masyvas3[$parentIndex2] = $keiciamasMasyvas;
        }
    }
}
print_r($masyvas3);

//usort($masyvas3, function($a, $b){return count($a)<=> count($b)});

$keiciamasMasyvas = [];
    for ($i=10; $i>0; $i--) {
        if (array_search('K', $masyvas3[$i], true) !== false) {
            $keiciamasMasyvas[] = $masyvas3[$i];
           // print_r($keiciamasMasyvas);
            array_splice($masyvas3, $i-1, 1);
           // echo 'po splice';
           // print_r($masyvas3);
            array_unshift( $masyvas3, $keiciamasMasyvas);
            //echo 'po unshift';
            //print_r($masyvas3);
            $keiciamasMasyvas = [];
        }
    }

print_r($masyvas3);

/*
5.	Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas 
[user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius nuo 1 iki 1000000, 
place_in_row atsitiktinis skaičius nuo 0 iki 100. 
*/
echo '<br>';
echo '<br>5. uzdavinio sprendimas ---------------<br>';
echo '<br>';

$masyvas =[];
foreach(range(1, 30) as $vaikas) {
    foreach(range(1, 2) as $value) {
        $masyvas[$vaikas]['user_id'] = rand(1, 1000000);
        $masyvas[$vaikas]['place_in_row'] = rand(0, 100);   
    }
}
print_r($masyvas);

/*
6.	Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka.
 Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka.
*/
echo '<br>';
echo '<br>6. uzdavinio sprendimas ---------------<br>';
echo "<br>  Isrusiuota pagal user_id didejancia tvarka:";
echo '<br>';

foreach($masyvas as $i => $eilute) {
    foreach($masyvas as $j => $eilute2) {
        if ($i<$j && $masyvas[$i]['user_id']>$masyvas[$j]['user_id']) {
            $temp = [];
            $temp = $masyvas[$i];
            $masyvas[$i] = $masyvas[$j];
            $masyvas[$j] = $temp;
        }
    }
}
$columns1 = array_column($masyvas, 'user_id');
//array_multisort($columns1, SORT_ASC, $masyvas);
print_r($masyvas);
echo '<br>';
foreach($masyvas as $i => $eilute) {
    foreach($masyvas as $j => $eilute2) {
        if ($i<$j && $masyvas[$i]['place_in_row']<$masyvas[$j]['place_in_row']) {
            $temp = [];
            $temp = $masyvas[$i];
            $masyvas[$i] = $masyvas[$j];
            $masyvas[$j] = $temp;
        }
    }
}
$columns2 = array_column($masyvas, 'place_in_row');
//array_multisort($columns2, SORT_DESC, $masyvas);
echo "<br> Isrusiuota pagal place_in_row mazejancia tvarka:";
echo '<br>';
print_r($masyvas);
echo '<br>';

// shuffle($array);
// sort($array);
// usort($array, function($a, $b)) {
//     return $b['user_id'] <=> $a['user_id'];
// }


/*
7.	Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus:
 name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų
  lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.
*/
echo '<br>';
echo '<br>7. uzdavinio sprendimas ---------------<br>';
echo '<br>';
$stulpelis = $masyvas;
$stulpelis[$i] = $eilute;
$randomString ='';
$randomString1 ='';
$addedEilute = ['name' => $randomString, 'surname' => $randomString1];

foreach($stulpelis as $i => $eilute) {
        foreach($eilute as $j => $value) {
       //$stulpelis[$i][]= array_push($eilute, $addedEilute);
        $stulpelis[$i]= $eilute + $addedEilute;
            foreach (range(1, rand(5, 15)) as $key) {
                $randomString .= chr(rand(97, 122));
                $stulpelis[$i]['name'] = $randomString;
            }
            $randomString ='';

            foreach (range(1, rand(5, 15)) as $key) {
                $randomString1 .= chr(rand(65, 90));
                $stulpelis[$i]['surname'] = $randomString1;
            }
            $randomString1 ='';
        }
}
echo '<br>';
print_r($stulpelis);

/*
8.	Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal 
taisyklę: generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą.
 Jeigu reikšmė yra 0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite 
 atsitiktiniais skaičiais nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę
  nuo 0 iki 10 įrašykite tiesiogiai.
*/
echo '<br>';
echo '<br>8. uzdavinio sprendimas ---------------<br>';
echo '<br>';
$masyvas8 = [];
foreach(range(1, 10) as $index ) {
     foreach(range(0, (rand(0, 5))) as $index1 => $masyvasVaikasIlgis) {
         if ($masyvasVaikasIlgis == 0) {
             $masyvas8[$index] = rand(11, 20);
         }
         else {
            $masyvasVaikas = [];
             for ($index2 = 1; $index2 <= $masyvasVaikasIlgis; $index2++ ) {
              $masyvasVaikas[$index2] = rand(0, 10);   
             }
             $masyvas8[$index] = $masyvasVaikas;
         }
       
    }
}
echo '<br>';
print_r($masyvas8);

/*
9.	Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite
 masyvą taip, kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė
  yra masyvas, to masyvo reikšmių sumos.
*/
echo '<br>';
echo '<br>9. uzdavinio sprendimas ---------------<br>';
echo '<br>';
$sum = 0;
foreach($masyvas8 as $index => $value) {
    if(is_array($value)) {
        //$sum += array_sum($value);
        $masyvas8[$index]=array_sum($value);
    }
    // else {
    //     $sum += $value;
}
    $sum=array_sum($masyvas8);    
    asort($masyvas8);
    
echo 'Masyvo reiksmiu suma: <br>';
echo $sum;
echo '<br>';
print_r($masyvas8);

/*
10.	Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų.
 Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color. 
 Reikšmė value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, o 
 reikšmė color atsitiktinai sugeneruota spalva formatu: #XXXXXX. 
 Pasinaudoję masyvų atspausdinkite “kvadratą” kurį sudarytų masyvo 
 reikšmės nuspalvintos spalva color.
*/
echo '<br>';
echo '<br>10. uzdavinio sprendimas ---------------<br>';
echo '<br>';

$masyvas10 = [];
$valueMasyvas = ['#','%','+','*','@','裡'];
$hexColorArray = ['A','B','C','D','E','F', 1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach(range(1, 10) as $value) {
    foreach(range(1, 10) as $value1) {
        $spalva = '#';
        foreach(range(1, 6) as $value2) {
           $spalva .= $hexColorArray[rand(0, 14)];
        }
        $masyvas10[$value][$value1] = ['value' => $valueMasyvas[rand(0, 5)], 'color' => $spalva];
    }
}
echo '<br>';
print_r($masyvas10);
echo '<br>';
echo '<div style="display: block">';

foreach($masyvas10 as $eilute) {
    echo '<div style="display: inline-block;">';
    foreach($eilute as $stulpelis) {
        echo "<div style='width:20px; height:20px; color:".$stulpelis['color'].";'>".$stulpelis['value']."</div>";
    }
    echo '</div>';
}
echo '</div>';


/*
11.	Duotas kodas, generuojantis masyvą:
*/
echo '<br>';
echo '<br>11. uzdavinio sprendimas ---------------<br>';
echo '<br>';

do {
    $a = rand(0, 1000);
    $b = rand(0, 1000);
} while ($a == $b);
$long = rand(10,30);
//echo $long;
$sk1 = $sk2 = 0;
echo '<h3>Skaičiai '.$a.' ir '.$b.'</h3>';
$c = [];
for ($i=0; $i<$long; $i++) {
    $c[] = array_rand(array_flip([$a, $b]));
}

echo '<h4>Masyvas:</h4>';
echo '<pre>';
print_r($c);
echo '</pre>';
echo '<br>';

$sum = array_sum($c);
//echo $sum;

$sk1 = ($sum - $b*$long)/($a - $b);
$sk2 = $long - $sk1;
echo '<h3>Skaičius '.$a.' yra pakartotas '.$sk1.' kartų, o skaičius '.$b.' - '.$sk2.' kartų.</h3>';
/*
Reikia apskaičiuoti kiek buvo $sk1 ir $sk2 naudojantis matematika.
NEGALIMA! naudoti jokių palyginimo operatorių (if-else, swich, ()?:)
NEGALIMA! naudoti jokių regex ir string funkcijų.
GALIMA naudotis tik aritmetiniais veiksmais ir matematinėmis funkcijomis iš skyrelio: 
https://www.php.net/manual/en/ref.math.php

Jeigu reikia, kodo patogumui galima panaudoti įvairias funkcijas, bet sprendimo
 pagrindas turi būti matematinis.

Atsakymą reikia pateikti formatu:
    /*
echo '<h3>Skaičius 789 yra pakartotas '.$sk1.' kartų, o skaičius 123 - '.$sk2.' kartų.</h3>';
/*
Kur rudi skaičiai yra pakeisti skaičiais $a ir $b generuojamais kodo.
*/


