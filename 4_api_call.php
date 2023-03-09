<?php

include_once('library.php');

/*
* Now we're actually going to call the LACRM API! All right!
*/

// Open a demo account, create an API key, and paste it here.
// This functions as both a username and a password to the account when using the API.
$API_KEY = "Demo Account API key here";

// GetUser is a basic call that takes no parameters, and just returns the logged in user.
$Result = CallLacrmApi("GetUser", array());
// The output comes in a particular format, listed in the docs.
echo("GetUser: ".$Result['FirstName'].' '.$Result['LastName'].' ('.$Result['Email'].")\n\n");

// Your turn -- feel free to fill any any function and parameters you want here.
$FunctionName = "GetNotes";
$Parameters = array(
	"DateFilterStart" => "03/01/2023",
	"DateFilterEnd" => "03/31/2023"
);
$Result = CallLacrmApi($FunctionName, $Parameters);
echo("Output: ".json_encode($Result, JSON_PRETTY_PRINT));