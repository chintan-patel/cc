<?php
$autoloader = require('vendor/autoload.php');

// Get the Request from Symfony Request
$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();



// Parse CSV
$csvParser = new \CC\Test\Parser('people.csv');
$people = $csvParser->parse();
$people->sort($request->query->get('sortBy'));


// return data back to index.php
$response = array();
foreach ($people->get() as $person)
{
	$each_data = array();
	$each_data['name'] = $person->getName();
	$each_data['height'] = $person->getHeight();
	$each_data['gender'] = $person->getGender();
	$each_data['birthdate'] = date('d/m/y', $person->getBirthDate());
	$response[] = $each_data;
}
$response = new \Symfony\Component\HttpFoundation\Response(json_encode($response, true), 200, array('Content-Type' => 'application/json'));
$response->send();

/*
if (($handle = fopen("people.csv", "r")) !== false)
{
	while (($data = fgetcsv($handle, 1000, ",")) !== false)
	{
		// Create a person for each record
		$person = new \CC\Test\Person();

		$split_name = explode(' ', trim($data[0], ' '));

		$person->setFirstName($split_name[0], ' ');
		$person->setLastName($split_name[1]);

		$person->setHeight(trim($data[1], ' '));
		$person->setGender(trim($data[2], ' '));
		$person->setBirthDate(strtotime(trim($data[3], ' ')));

		// associate it to the higher class People
		$people->add($person);
	}
	fclose($handle);
}
*/


