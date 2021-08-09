<?php
/*
https://www.codewars.com/kata/5513795bd3fafb56c200049e/train/php
Create a function with two arguments that will return an array of the first (n) multiples of (x).
Assume both the given number and the number of times to count will be positive numbers greater than 0.
Return the results as an array (or list in Python, Haskell or Elixir).
Examples:
countBy(1,10) // should return [1,2,3,4,5,6,7,8,9,10]
countBy(2,5) // should return [2,4,6,8,10]/*
*/
//function countBy($x, $n) {
    $n = 5;
    $z = [];
    $x = 2;
foreach(range(1, $n) as $i) {
      $z[] = $x*$i;
  }
    print_r($z);


/*
https://www.codewars.com/kata/57eae20f5500ad98e50002c5/train/php
Simple, remove the spaces from the string, then return the resultant string.
*/
echo '<br>';
echo '<br>. 2 uzdavinio sprendimas ---------------<br>';
echo '<br>';
$string = '';
$s = 'hgffffd mnb gg tt bfdds iiy';
function no_space(string $s): string {
  return preg_replace("/\s*/", '', $s); 
 // $s = str_replace(" ", "", $s);
//echo trim($s," ");
}
echo no_space($s);

echo '<br>';
echo '<br>. 3 uzdavinio sprendimas ---------------<br>';
echo '<br>';
echo '<pre>';

function fake_bin(string $s): string {
  $pieces = str_split($s);
  print_r($pieces);
  foreach($pieces as $i => $value) {
    if ($pieces[$i]<5) {
      $pieces[$i] =0;
    }
    elseif($pieces[$i]>=5) {
      $pieces[$i] =1;
    }
  }
  print_r($pieces) ;
  return implode('', $pieces);
}
echo fake_bin('156873429');


function fake_bin(string $s): string {
  return preg_replace(array('/[0-4]/', '/[5-9]/'), array('0', '1'), $s);
}

function fake_bin(string $s): string {
  return preg_replace(['/[1-4]/','/[5-9]/'], [0,1], $s);
}

function fake_bin(string $s): string {
  return strtr($s, '123456789', '000011111'); 
}