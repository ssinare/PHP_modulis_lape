<?php

$pirmas = 'antras';
$antras = 'bla bla';
echo $$pirmas;



/*
1.	Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;
*/
echo '<br>';
echo '<br>1. uzdavinio sprendimas ---------------<br>';
echo '<br>';
function argument($a){
$b = "<h1>$a</h1>"; 
    return $b;
}
echo argument('Noriu valgyti!!!');

/*
2.	Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas 
į h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame uždavinyje 
parašytą funkciją;
*/
echo '<br>';
echo '<br>2. uzdavinio sprendimas ---------------<br>';
echo '<br>';
function kita_fn($c, $skaicius){
$d = "<h$skaicius>$c</h$skaicius>"; 
    return $d;
}
echo kita_fn('Labas rytas!', 3);

/*
3.	Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). Visus skaitmenis stringe 
įdėkite į h1 tagą. Raides palikite. Jegu iš eilės eina keli skaitmenys, juos į tagą reikią
 dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo 
 patobulintą (jeigu reikia) uždavinio funkciją ir preg_replace_callback();
*/
echo '<br>';
echo '<br>3. uzdavinio sprendimas ---------------<br>';
echo '<br>';

    $atsitiktinis = md5(time());
    //echo $atsitiktinis;
    echo '<br>';
    function printH1Tags($matches) 
    {
        echo '<pre>';
        //print_r($matches);
        foreach($matches as $match){
            echo "<h1>$match</h1>";
        }
    }
    preg_replace_callback('/\d+/','printH1Tags', $atsitiktinis); 



/*
4.	Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas dalijasi be 
liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų galima įvesti tik 
sveiką skaičių;
*/
echo '<br>';
echo '<br>4. uzdavinio sprendimas ---------------<br>';
echo '<br>';

function dalybaBeLiekanos(int $x) {
    $dalikliuSk = 0;
    foreach(range(2, $x-1) as $daliklis) {
       if($x % $daliklis == 0) {
            $dalikliuSk++;
       }
   }
    return $dalikliuSk;   
}
$x = 26;
echo "$x dalinas be liekanos is: ".dalybaBeLiekanos($x)." sveiku skaiciu";


/*
5.	Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai 
nuo 33 iki 77.
 Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, 
 panaudodami ketvirto
  uždavinio funkciją.
*/
echo '<br>';
echo '<br>5. uzdavinio sprendimas ---------------<br>';
echo '<br>';
$masyvas = [];
foreach(range(0, 99) as $reiksme) {
    $masyvas[$reiksme]['reiksme'] = rand(33, 77);
    $masyvas[$reiksme]['dalikliu skaicius'] = dalybaBeLiekanos($masyvas[$reiksme]['reiksme']);
}
foreach($masyvas as $i => $dalikliuSk) {
    foreach($masyvas as $j => $dalikliuSk2) {
        if ($i<$j && $masyvas[$i]['dalikliu skaicius']<$masyvas[$j]['dalikliu skaicius']) {
            $temp = [];
            $temp = $masyvas[$i];
            $masyvas[$i] = $masyvas[$j];
            $masyvas[$j] = $temp;
        }
    }
}
print_r($masyvas);
//usort funkcija

  /*
6.	Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo 333 iki
 777. Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.
*/
echo '<br>';
echo '<br>6. uzdavinio sprendimas ---------------<br>';
echo '<br>';
$masyvas6 = [];
foreach(range(0, 99) as $reiksmes) {
    $masyvas6[$reiksmes] = rand(333, 777);
    if (dalybaBeLiekanos($masyvas6[$reiksmes])==0) {
        $masyvas6[$reiksmes]= null;
    } 
}
print_r($masyvas6);

 /*
7.	Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį,
 elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas 
 pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30 
  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;

Nuo virsaus I apacia – reikia rekursijos, nuo apacios I virsu – nereikia rekursijos

*/
echo '<br>';
echo '<br>7. uzdavinio sprendimas ---------------<br>';
echo '<br>';

// $tevas = [];
// function masyvoGeneratorius($masyvas, $max, $key){//masyvas, kiek iteraciju, kelinta yra dabar
//     $masyvoIlgis=rand(10, 20);
//     echo "key=".$key." max=".$max." masyvoIlgis= ".$masyvoIlgis."<br>";
//     foreach(range(1, $masyvoIlgis-1) as $index) {
//         $masyvas[$index] = rand(0, 10);
//     }
    
    
//     if($key == $max){
//         $masyvas[$masyvoIlgis]=0;
//         print_r($masyvas);
//         return $masyvas;
//     }
//     else{      
//         $naujas = [];//paskutinis masyvas
//         $key++;
//         print_r($masyvas);
//         $masyvas[$masyvoIlgis]=masyvoGeneratorius($naujas, $max, $key);//return $masyvas
//     }
// }
// $max = rand(10, 30);
// echo $max;
// echo '<br>';
// $mama=[];
//   $mama = masyvoGeneratorius($tevas, $max, 1);
// print_r($mama);




//kitaip

function masyvoGeneratorius($vaikas, $key){//masyvas, kiek iteraciju, kelinta yra dabar
    if($key==0){
       // echo "key = 0<br>";
        print_r($vaikas);
        return;
    }
    
    $masyvas = [];
    $masyvoIlgis=rand(10, 20);

    foreach(range(1, $masyvoIlgis-1) as $index) {
        $masyvas[$index] = rand(0, 10);
    } 
    
    //Pirma karta pildant vaikas yra visiskai tuscias masyvas
    if($vaikas == []){
        $masyvas[$masyvoIlgis]=0;
    }
    else{
        $masyvas[$masyvoIlgis]=$vaikas;
    }
    
    //echo "rekursija<br>";     
    $key--;
    //print_r($masyvas);
    masyvoGeneratorius($masyvas, $key);//return $masyvas
}

$kiekKartoti = rand(10, 30);
echo "Iterraciju skaicius - ".$kiekKartoti."<br>";
masyvoGeneratorius([], $kiekKartoti);


/*
function funcH () {
$array =[0];
$array2 = [];
 rand(10,20);
for ($i = 0; $i< rand(10,20); $i++) {
   foreach (range(1, rand(10,20)) as $_) {
    $array2[] = rand(0,10);
   }
   $array2 [] = $array;
   $array =  $array2;
   $array2 = [];
}
return $array;
}
echo '<pre>';
print_r(funcH());
*/




/*
8.	Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą. 
Skaičiuoti reikia visuose masyvuose ir submasyvuose.
function funcH () {

$array =[0];
$array2 = [];
$array3 = [];

for ($i = 0; $i< rand(10,20); $i++) {
   foreach (range(1, rand(10,20)) as $_) {
    $array2[] = rand(0,10);
   }
   $array3[]= $array;
   $array2 [] = $array;
   $array =  $array2;
   $array2 = [];
}
return $array;
}



function look ($array) {
    static $sum = 0;
    // echo count($array);
    for($i = 0; $i < count($array); $i++) {
        if (gettype($array[$i]) == "integer") {
            $sum += $array[$i];
        }
        else 
        {
            look($array[$i]);
        }
    }
    return $sum;
}
$array = funcH ();
echo look($array);
echo '<pre>';
print_r ($array);








9.	Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai nuo 1 iki 33.
 Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis skaičius, prie masyvo 
 pridėkite dar vieną elementą- atsitiktinį skaičių nuo 1 iki 33. Vėl patikrinkite pradinę sąlygą 
 ir jeigu reikia pridėkite dar vieną elementą. Kartokite, kol sąlyga nereikalaus pridėti elemento.
 $m = [];

for ($i=0; $i < 3; $i++) { 
    $m[] = rand(1, 33);
}
echo '<pre>' ;
print_r($m);
echo '</pre>';
function ifPrime($int){     
    if ($int == 1) 
    return 0; 
    for ($i = 2; $i <= $int/2; $i++){ 
        if ($int % $i == 0) 
            return 0; 
    } 
    return 1; 
} 
while (
   !ifPrime($m[count($m)-1]) ||
    !ifPrime($m[count($m)-2]) ||
    !ifPrime($m[count($m)-3]) 
) {
   $m[]= rand(1,33);
}   
echo <111111111111111111111111>

$array9=[];
foreach(range(0,2) as $i){
    $array9[]=rand(1,33);
}
function test(&$array)
{
    $arr = array_slice($array, -3, 3);
    foreach ($arr as $value) {
        if (dalyba($value)) {
            $random = rand(1, 33);
            $array[] = $random;
            //print_r($array);
            test($array);
            break;
        }
    }
}
test($array9);




echo </////////////////>
function exercise9()
{
    $arrayNine = [];
    $lastThreeCount = 0;
    for ($i = 0; $i < 3; $i++) {
        $arrayNine[] = rand(1, 33);
    }
    do {
        foreach (array_slice($arrayNine, -3) as $index => $value) {
            if (exercise4($value) > 0) {
                $arrayNine[] = rand(1, 33);
                $lastThreeCount = 0;
                break;
            } else {
                $lastThreeCount++;
            }
        }
    } while ($lastThreeCount !== 3);
    var_dump($arrayNine);
}
exercise9();




10.	Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, kurie yra atsitiktiniai 
skaičiai nuo 1 iki 100. Jeigu tokio didelio masyvo (ne atskirai mažesnių) pirminių skaičių vidurkis 
mažesnis už 70, suraskite masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo pridėkite 3. Vėl
 paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite.


 echo '10.<br>';
$tenArr= [];
foreach(range(0, 9) as $y) {
    foreach(range(0, 9) as $x) {
        $tenArr[$y][$x] = rand(1, 100);
    }
}

function checkArr(&$array) {
    $primeValues = 0;
    $primeCount = 0;

    foreach($array as $subArr) {
        foreach($subArr as $value) {
            if (divisionCount($value) === 0) {
                $primeValues += $value;
                $primeCount++;
            }
        }
    }
    if ($primeValues/$primeCount < 70) {
        $smallest = PHP_INT_MAX;
        $y = 0;
        $x = 0;
        foreach($array as $ykey => $subArr) {
            foreach($subArr as $xkey => $value) {
                if ($value < $smallest) {
                    $smallest = $value;
                    $y = $ykey;
                    $x = $xkey;
                }
            }
        }
        $array[$y][$x] += 3;
        echo 'Send';
        checkArr($array);
    } else {
        return;
    }
}

checkArr($tenArr);
print_r($tenArr);


 */