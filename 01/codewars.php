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
    $z = array();
    $n = 25;
    $y= 1;
for ($i = 0; $i < $n; $i++) {
  $y = $x*($i+1);
  $z = array_push($z, $y);
  }
  array_push($z, $y);
  echo "The number is: $z <br>";

    return $z;
    print_r($z);
//}


?>