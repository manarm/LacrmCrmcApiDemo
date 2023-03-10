<?php

include_once('library.php');

/*
* This is a fully worked out solution for the last exercise. 
* Please don't look at it until after we've worked through it together.
*/

// First, we need to get all the companies in the CRM.
$CompaniesResult = CallLacrmApi('GetContacts', array(
	'RecordTypeFilter' => 'Companies'
));
$Companies = $CompaniesResult['Results'];

// Now, we need to look at each company, so lets use a foreach loop on the results.
foreach ($Companies as $Company) {
	// Only do this if we have an address for the company
	if (!empty($Company['Address'])) {
		// Get all the contacts at the company. This requires an advanced filter!
		$ContactResult = CallLacrmApi('GetContacts', array(
			'RecordTypeFilter' => 'Contacts',
			'AdvancedFilters' => array(array(
				'Name' => 'CompanyName',
				'Operation' => 'IsExactly',
				'Value' => $Company['Company Name']
			))
		));
		$ContactsAtCompany = $ContactResult['Results'];

		// Lets keep track of the ones we update so we know what our tool actually did.
		$EditedContactIds = array();

		// Loop through the contacts and edit them to have the same address as the company
		foreach($ContactsAtCompany as $Contact) {
			CallLacrmApi('EditContact', array(
				'ContactId' => $Contact['ContactId'],
				'Address' => $Company['Address']
			));

			// Lets attach a note as well to indicate we updated them using this script.
			CallLacrmApi('CreateNote', array(
				'ContactId' => $Contact['ContactId'],
				'Note' => "Script updated address to match company."
			));

			// This operator adds a value to the end of a list.
			$EditedContactIds[] = $Contact['ContactId'];
		}

		// If we made any edits, lets print some output.
		if (!empty($EditedContactIds)) {
			echo $Company['Company Name'].": " . join(', ', $EditedContactIds) ."\n";	
		}
	}
}