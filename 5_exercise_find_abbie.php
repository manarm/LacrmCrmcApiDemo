<?php
include_once('library.php');

/*
* Here's a test for you: Fill in the parameters to print Abbie Braker's contact Id.
* Check your results in the CRM.
*/

$ApiResponse = CallLacrmApi("GetContacts", array(
	"SearchTerms" => ""
));
$FirstResult = $ApiResponse['Results'][0];
echo ($FirstResult['ContactId']);

// Can you edit line 13 to print out Abbie's birthday instead? 