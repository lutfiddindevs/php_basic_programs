<?php

//1. Write a PHP program to print sum of digits.
echo "Task 1 <br>";
echo "<br>";
$y = 23;
echo $y - 18;
echo "<br>"; 
$q = 624;
echo $q / 52;
echo "<br>";
echo "<br>";


//2.Even or odd number
echo "Task 2 <br>";
echo "<br>";
$number = 23;
if ($number % 2 == 0) {
    echo "$number is an even number";
} else {
    echo "$number is an odd number";
}
echo "<br>";
$number = 12;
if ($number % 2 == 0) {
    echo "$number is an even number";
} else {
    echo "$number is an odd number";
}
echo "<br>";
echo "<br>";


//3. Prime number(which divides without remainder on itself and 1). Write a PHP program to check prime number.
echo "Task 3 <br>";
echo "<br>";
$num = 17;
if ($num % 3 == 0) {
    echo "$num is a prime number";
} else {
    echo "$num is not a prime number";
}
echo "<br>";
$numb = 57;
if ($numb % 3 == 0) {
    echo "$numb is a prime number";
} else {
    echo "$numb is not a prime number";
}
echo "<br>";
echo "<br>";


//4.Table of number. Write a PHP program to print table of a number
echo "Task 4 <br>";
echo "<br>";
for($n = 2; $n <= 20; $n += 2) {
echo  "the output is: $n <br>";  
}
echo "<br>";
for($s = 5; $s <= 50; $s += 5) {
    echo "the output is: $s <br>";
}
echo "<br>";


// 5.Factorial of number. Write a PHP program to print factorial of a number.
echo "Task 5";
echo "<br>";
$x = 5;
$factorial = 1;
for ($z = $x; $z >= 1; $z--) {
$factorial = $factorial * $z;
}
echo "<br>" . "The factorial  of number  5 is " . $factorial;

echo "<br>";
$a = 6;
$fact = 1;
for ($d = $a; $d >= 1; $d--) {
$fact = $fact * $d;
}
echo "The factorial  of number  6 is " . $fact;
echo "<br>";


