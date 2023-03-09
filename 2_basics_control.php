<?php
/*
* Programs that only returned one value would be kind of boring.
* There are lots of tools to connect code in interesting ways, so it doesn't only execute from top to bottom. 
* This whole topic is called "control flow", and is pretty advanced, but we'll look at some basics here.
*/

/*
* You can decide to either run code, or skip it, based on logical conditions.
* The classic way to do this is an "if" statement.
*/
$x = 42;
// The code between the brackets { } will only execute if the expression in the parentheses is true.
if ($x < 50) {
	echo "x is less than 50.\n";
}

/*
* You can execute code in a block repeatedly. This is called looping.
*/ 
$x = 1;
// The code in the brackets will run over and over until the expression in the parens is false.
echo "Starting the loop.\n";
while ($x < 5) {
	echo "\tLoop: ".$x ."\n";
	$x = $x + 1;
}
echo "All done!\n";

/*
* Finally, you often want to write a piece of code that you can reuse many times.
* This basic tool to use for this is a function, and works a lot like a function in math.
*/

// First, you define the function -- it gets a name, and a list of input variables called parameters.
function EchoThisVariable($Variable) {
	// When it's called, it will run the code between the brackets.
	// It can use any varables that were provided.
	// Note this is the definition, and will NOT run until we call the function -- more on that later.
	echo $Variable;
	echo "\n";
	// when it's done, it can return a value.
	return 0;
}
// To call it, we simply write the name, followed by the parameters we want to pass in parens.
$z = "wow, what a day.";
EchoThisVariable($z);
