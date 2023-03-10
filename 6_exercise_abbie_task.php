<?php
include_once('library.php');

/*
* Lets build on the last example and make a task on our calendar for Abbie's birthday.
* This will take a few steps:
* 1. Get Abbie's contact and extract the birthday.
* 2. Reformat the date to refer to this year (don't worry, I did this part for you)
* 3. Create a task. 
*/

// First, we'll need Abbie's contact ID and birthday. Use the code from the last exercise, or paste the info in directly from the CRM.
// Don't shy away from copy+paste -- that's how most code gets written anyway :)
$ContactId = '';
$Birthday = '';

// When you get the birthday from the API, it needs to be reformatted to be provided as a due date. Sad! 
// Dates are... hard to deal with, so you don't have to do this part.
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