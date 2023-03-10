<?php

/*
* One last thing to cover before we use the API!
* There is another more complicated kind of variable called an "array".
*/

// They can be just a simple list of things (numbers, strings, other arrays...)
$x = array("taco", "burrito", "wrap", "sandwich");
// You then access array members using numbers and square brackets, like so:
echo "Element 1: ".$x[1]."\n";
// Important -- the above refers to "burrito", because we start counting from 0!!!
echo "Element 0: ".$x[0]."\n";

// You can also do fancy things with them, like report the number of things with count():
echo "Array has ".count($x). " things.\n";
// And there's a special kind of loop, foreach, to access each item in the array:
echo "Begin loop\n";
foreach($x as $ArrayItem) {
	echo "\tArray item: $ArrayItem\n";
}
echo "End loop\n";

// Finally, you can use an array as a dictionary and define your own string keys to lookup vaules:
$Car = array(
	"Color" => "red",
	"Make" => "Mazda",
	"Model" => 3,
	"Year" => 2010
);
// ... then access using brackets and the strings the same way.
echo "Car color: ".$Car['Color']."\n";
// ... and foreach can get a little more fancy:
echo "Loop start\n";
foreach ($Car as $Key => $Value) {
	echo "\t Key: $Key => Value: $Value\n";
}
echo "Loop end.\n";