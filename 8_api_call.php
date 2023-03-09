<?php

include_once('library.php');

// Put your API key here -- it should be surrounded by quotes.
$API_KEY = "Your API key here";

// Fill in the API function and parameters you want to call here.
$FunctionName = "GetNotes";
$Parameters = array(
	"DateFilterStart" => "03/01/2023",
	"DateFilterEnd" => "03/31/2023"
);

// The code below here calls the function and prints the output.
$Result = CallLacrmApi($FunctionName, $Parameters);
echo("Output: ".json_encode($Result, JSON_PRETTY_PRINT));