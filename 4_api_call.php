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
// The output is a dictionary in a particular format, explained in the docs.
// Check it out here: https://account.lessannoyingcrm.com/api_docs/v2/Settings_Functions/Users
echo("GetUser: ".$Result['FirstName'].' '.$Result['LastName'].' ('.$Result['Email'].")\n\n");

// Your turn -- feel free to fill any any function and parameters you want here.
// Check out the docs: https://account.lessannoyingcrm.com/api_docs/v2
$FunctionName = "GetNotes";
$Parameters = array(
	"DateFilterStart" => "03/01/2023",
	"DateFilterEnd" => "03/31/2023"
);
$Result = CallLacrmApi($FunctionName, $Parameters);
echo("Output: ".json_encode($Result, JSON_PRETTY_PRINT));