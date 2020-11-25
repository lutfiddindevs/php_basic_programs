<?php 

//*1.if you have an array $a = array( 0, 1, 2, 3, 4 );, how do you extract the value 3 from the array?

echo "Task 1" . "<br>";
echo "<br>";
$a = [0, 1, 2, 3, 4];
echo $a[3] . "<br>";
echo "<br>";

// *2.If you have an array $a = array( "zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4 );, how do you extract the value 3 from the array?


echo "Task 2" . "<br>";
echo "<br>";
$arr = [
    "zero" => 0,
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "four" => 4
];
echo $arr[three] . "<br>";
echo "<br>";

// *3.If you have the following array, how do you extract the value 3 from the array?

echo "Task 3" . "<br>";
echo "<br>";
$array = array(
    array(
        0,
        1
    ),
    array(
        2,
        array(
            3
        )
    )
);
 echo $array[ 1 ][ 1 ][ 0 ];
echo "<br>";
echo "<br>";

//*4 If you have the following array, how do you extract the value 3 from the array?

echo "Task 4" . "<br>";
echo "<br>";
$s = array (
    "a" => array (
        "b" => 0,
        "c" => 1
    ),
    "b" => array (
        "e" => 2,
        "o" => array (
        "b" => 3
        )
    )
);
echo $s["b"]["o"]["b"] . "<br>";
echo "<br>";

//*5Create a new array with each comma-separated value as its own array element from the string $a = "a,b,c,d,e,f".

echo "Task 5" . "<br>";
echo "<br>";
$st = "a,b,c,d,e,f";
echo "<pre>";
var_dump(explode(",", $st));
echo "</pre>";
echo "<br>";
echo "<br>";

//*6. With the result array from 5, create a new array where each element is both key and value. In other words, the result should be:

echo "Task 6" . "<br>";
echo "<br>";
$key = ["a", "b", "c", "d", "e"];
$value = ["a", "b", "c", "d", "e"];
$r = array_combine($key, $value);
print_r($r);
echo "<br>";
echo "<br>";

//*7.You have two arrays like the following. One contains field labels, the other contains field values. Write a program to output the third array.

echo "Task 7" . "<br>";
echo "<br>";
$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);
/* want to output
$keysAndValues = array(
    "first"=>"dinosaur",
    "second"=>"pig",
    "third"=>"platypus" */

var_dump($keysAndValues = array_combine( array_values( $keys ), array_values( $values )));
echo "<br>";
echo "<br>";

//*8.You have an array of transactions, each of which has a debit and credit amount. Find the absolute value of the transaction amount (i.e. abs( debit - credit )) and add it as a new key=>value pair to each transaction.

echo "Task 8" . "<br>";
echo "<br>";
$transactions = array(
    array(
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "debit"=>15,
        "credit"=>14
    )
);

echo "<br>" . "Could not do that";
echo "<br>";
echo "<br>";

//*9. Find the sum of this array of numbers $a = array( 0, 1, 2, 3, 4, 5, 6 );.
echo "Task 9" . "<br>";
echo "<br>";
$sum = [0, 1, 2, 3, 4, 5, 6];
echo array_sum($sum);
echo "<br>";