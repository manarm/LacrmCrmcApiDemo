<?php

/*
* Programs use "variables" to store and manipulate information.
* In php, variables are marked with a '$' at the beginning.
* Variables can be echo'd, and can hold lots of different types of information.
*/

/*
* Variables can hold numbers and strings. 
* We call values that are written directly into the program "constants", since they will never change no matter
* how many times we run the program.
*/
$x = 3;
echo $x;
echo "\n";
$y = "betelgeuse";
echo $y;
echo "\n";

/*
* Variables can also hold the results of expressions.
* The general form looks like this:
* 	$Variable = Expression
* The thing on the right gets evaluated and stored in the variable on the left for use later.
*/
$x = 1 + 4;
echo $x;
echo "\n";
// You can stick strings together; this is called "concatenation".
// For some reason, this is done with a "." in php (most languages use +).
$y = "Wow " . "mom";
echo "$y"."\n";

// And of course, expressions can also contain variables.
$x = 19;
$y = $x + 1;
echo $y;
echo "\n";