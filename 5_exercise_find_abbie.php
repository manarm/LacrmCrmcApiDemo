<?php
include_once('library.php');

/*
* Here's a test for you: Fill in the parameters to print Abbie Braker's contact Id.
* Check your results in the CRM.
*/

// You'll need to find this function in the docs and add the correct parameter here.
$ApiResponse = CallLacrmApi("GetContacts", array(

));

// Can you find how this function structures output in the docs? Why is this line needed? 
$FirstResult = $ApiResponse['Results'][0];
echo ($FirstResult['ContactId']);

// Can you edit line 13 to print out Abbie's birthday instead? 
