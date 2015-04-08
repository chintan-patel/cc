<?php
/**
 * @author Chintan Patel
 */

namespace CC\Test;

/**
 * Class Parser
 */
class Parser
{
	/**
	 * @var
	 */
	private $file;

	/**
	 * @param $file
	 * @internal param \CC\Test\People $people
	 */
	function __construct($file)
	{
		$this->file = $file;
	}

	/**
	 * @return null| People
	 */
	function parse()
	{
		$people = new People();
		if (($handle = fopen($this->file, "r")) !== false)
		{
			while (($data = fgetcsv($handle)) !== false)
			{
				// Create a person for each record
				$person = new Person();

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
		return $people;
	}
}