<?php
include_once('library.php');

/*
* Here's a test for you: Fill in the parameters to print Abbie Braker's contact Id.
* Check your results in the CRM.
*/

// First, we'll need Abbie's contact ID and birthday. Use the code from the last exercise, or paste the info in directly from the CRM.
$ContactId = '';
$Birthday = '';

// When you get the birthday from the API, it needs to be reformatted to be provided as a due date. Sad! You don't have to do this part.
$OriginalBirthday = new DateTime($Birthday);
$Birthday = date_create($OriginalBirthday->format("2023-m-d"))->format('Y-m-d');

// Fill in these paramters to make the task.
CallLacrmApi("CreateTask", array(
	'Name' => '',
	'DueDate' => '',
	'Description' => '',
	'ContactId' => ''
));
echo "Success";