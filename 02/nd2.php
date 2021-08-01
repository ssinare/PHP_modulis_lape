<?php
/*
1.	Sukurti du kintamuosius. Jiems priskirti 
savo mylimo aktoriaus vardą ir pavardę kaip
 stringus (Jonas Jonaitis). Atspausdinti 
 trumpesnį stringą.
*/
echo '<br>1. uzdavinio sprendimas ---------------<br>';
echo '<br>';
$vardas = 'Pedro';
$pavarde = 'Alonso';
echo strlen($vardas);
echo '<br>';
echo strlen($pavarde);
echo '<br>';
if (strlen($vardas)>strlen($pavarde)) {
    echo $pavarde;
}else  echo $vardas;

/*
2.	Sukurti du kintamuosius. Jiems priskirti 
savo mylimo aktoriaus vardą ir pavardę kaip 
stringus. Vardą atspausdinti tik didžiosiom 
raidėm, o pavardę tik mažosioms.
*/
echo '<br>2. uzdavinio sprendimas ---------------<br>';
echo '<br>';
$vardas = 'Pedro';
$pavarde = 'Alonso';
echo $vardas = strtoupper($vardas);
echo '<br>';
echo $pavarde = strtolower($pavarde);
echo '<br>';
echo '<br>';
/*
3.	Sukurti du kintamuosius. Jiems priskirti 
savo mylimo aktoriaus vardą ir pavardę kaip 
stringus. Sukurti trečią kintamąjį ir jam 
priskirti stringą, sudarytą iš pirmų vardo 
ir pavardės kintamųjų raidžių. Jį atspausdinti.
*/
echo '<br>3. uzdavinio sprendimas ---------------<br>';
echo '<br>';
$vardas = 'Pedro';
$pavarde = 'Alonso';
echo '<br>';
//$bendras = substr($vardas,1).substr($pavarde,1);
echo $bendras = $vardas[0].$pavarde[0];
echo '<br>';

/*
4.	Sukurti du kintamuosius. Jiems priskirti savo
 mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti
  trečią kintamąjį ir jam priskirti stringą, sudarytą iš 
  trijų paskutinių vardo ir pavardės kintamųjų raidžių.
   Jį atspausdinti.
*/
echo '<br>4. uzdavinio sprendimas ---------------<br>';
echo '<br>';
$vardas = 'Pedro';
$pavarde = 'Alonso';
echo '<br>';
echo $bendras = substr($vardas,-3).substr($pavarde,-3);
echo '<br>';

/*
5.	Sukurti kintamąjį su stringu: “An American in Paris”. 
Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.
  Rezultatą atspausdinti.
*/
echo '<br>5. uzdavinio sprendimas ---------------<br>';
echo '<br>';
$sakinys = 'An American in Paris';
echo $sakinys = str_ireplace('a','*', $sakinys);
echo '<br>';
//echo $pakeist = strtr($sakinys, ['a' => '*', 'A' => '*']);

/*
6.	Sukurti kintamąjį su stringu: “An American in Paris”. 
Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. 
Rezultatą atspausdinti.
*/
echo '<br>6. uzdavinio sprendimas ---------------<br>';
echo '<br>';
$sakinys = 'An American in Paris';
echo (substr_count($sakinys, 'a') + substr_count($sakinys, 'A'));
echo '<br>';

/*
7.	Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti
 visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: 
 “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.
*/
echo '<br>7. uzdavinio sprendimas ---------------<br>';
echo '<br>';
$sakinys = 'An American in Paris';
$sakinys2 = 'Breakfast at Tiffany\'s';
$sakinys3 = '2001: A Space Odyssey';
$sakinys4 = 'It\'s a Wonderful Life';

echo '<br>';
$balses = array("a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y");
echo '<br>';
echo $sakinys = str_ireplace($balses,'', $sakinys);
echo '<br>';
//echo  preg_replace('/[aeiouy]/i',$sakinys2,'');
echo '<br>';
echo $sakinys2 = str_ireplace($balses,'', $sakinys2);
echo '<br>';
echo $sakinys3 = str_ireplace($balses,'', $sakinys3);
echo '<br>';
echo $sakinys4 = str_ireplace($balses,'', $sakinys4);
echo '<br>';


echo '<br>';
/*
8.	Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; 
Surasti ir atspausdinti epizodo numerį.
*/
echo '<br>8. uzdavinio sprendimas ---------------<br>';
echo '<br>';
echo $string = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,6000) . ' - A New Hope'; 
echo '<br>';
preg_match('/\d{4}/', $string, $match); //jeigu 2 skaitmenys
//preg_match('/[0-9]/', $string, $match);
echo '<br>';
echo $match[0];
echo '<br>';
/*
9.	Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in 
the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia
 gąsdinti Pietų Centro, geriant sultis pas save kvartale”.
*/
echo '<br>9. uzdavinio sprendimas ---------------<br>';
echo '<br>';

$stringas = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
echo  preg_match_all('/[a-z]{1,5}\s/i', $stringas);
echo '<br>';
//$re = '/\d+/m';
echo '<br>';
$stringas2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
//echo  preg_match_all('/\b[a-zA-Z^\']{1,5}\s/i', $stringas2);
echo '<br>';

/*
10.	Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.
*/
echo '<br>10. uzdavinio sprendimas ---------------<br>';
echo '<br>';
$raides = 'abcdefghijklmnopqrstuvwxyz';

echo $raides = str_shuffle('abcdefghijklmnopqrstuvwxyz');
echo '<br>';
print_r($raidesSplit = str_split($raides,3));
echo '<br>';
echo $raidesSplit[5];
echo '<br>';
echo $raidesSplit[rand(0,7)];

$leters = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','r','s','t','u','v','z'];
$emptyString='';

for($i=0;$i<4;$i++){
$emptyString.=$leters[rand(0,21)];
}
echo $emptyString;

/*
11.	Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 
atsitiktine tvarka išdėliotų žodžių, o žodžius generavimui imtų 
iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai neturi kartotis. 
(reikės masyvo)
*/
echo '<br>11. uzdavinio sprendimas ---------------<br>';
echo '<br>';
$stringas = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$stringas2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
$stringas3 = $stringas.''.$stringas2;
echo $raides = str_shuffle($stringas3);


$expresion1arr=explode(" ",$expresion1);
$expresion2arr=explode(" ",$expresion2);
$playGround=array_merge($expresion1arr,$expresion2arr);
$sentence='';
$length=count($playGround)-1;
$numbers=range(1,$length);
shuffle($numbers);
 
for ($i=0; $i <=10 ; $i++) { 
$sentence.=' '.$playGround[($numbers[$i])];
}


$titleWords = $movieNameEng . ' ' . $movieNameLt;
$re = '/,/m';
$subst = '';
$titleWords = preg_replace($re, $subst, $titleWords);
$poolOfWords = explode(' ', $titleWords);
$answerArr = [];
for ($i = 0; $i < 10; $i++) {
    $randomIndex = rand(0, count($poolOfWords)-1);
    $answerArr[$i] = $poolOfWords[$randomIndex];
    array_splice($poolOfWords, $randomIndex, 1);
}

$answerString = implode(' ', $answerArr);
echo $answerString;

