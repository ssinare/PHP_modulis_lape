<?php
/*
echo '<br>'; 
echo $sriuba = rand(260, 300);
echo '<br>'; 
$saukstuKiekis = 0;
echo '<br>'; 
echo $saukstoTuris = rand(7, 10);
$suvalgyta = 0;
echo '<br>'; 
while ($suvalgyta <= $sriuba) {
echo $saukstoTuris = rand(7, 10);
echo '<br>'; 
echo $suvalgyta += $saukstoTuris;
echo '<br>'; 
}
*/
echo '<br>'; 
/*
do {
    $saukstuKiekis++;
   $sriuba -= min(rand(7, 10), $sriuba);
    //$pasemta = rand(7, 10);
    // $sriuba -= $pasemta > $sriuba ? $sriuba :

} while ($sriuba>0);

*/

/*
//Uždavinys Kiek reikės šakučių suvalgyti visą kepsnį?
$kepsnys = rand(300, 350); //g mėsos(sojos gaminio)
$sakuciuKiekis = 0;
$krimstelėjimuKiekis = 0;

// Viena šaukutė pasmeigia nuo 7 iki 10 g kepsnio
// Viena krimstelėjimas sukramto nuo 4 iki 6 g šakute 
į burną įsidėto kepsnio
*/
$kepsnys = rand(300, 350);
$sakuciuKiekis = 0;
$krimstelejimas = rand(4, 6);
$sakute = rand(7, 10);
$sukramto = 0;
do {
   $sakuciuKiekis++;
   echo "<br> sakuciu kiekis $sakuciuKiekis";
echo '<br>';
   $kepsnys -= min(rand(7, 10), $kepsnys);
   echo "<br> kepsnio liko $kepsnys gr.";
echo '<br>'; 
   $krimstelejimas = rand(4, 6);
   echo "atsikando $krimstelejimas gr.";
echo '<br>'; 
    $sukramto += $krimstelejimas;
    echo "sukramte is viso $sukramto gr.";
    echo '<br>';     
} while ($kepsnys>0);