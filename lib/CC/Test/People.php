<?php

/**
 * @author Chintan Patel
 */

namespace CC\Test;


/**
 * Class People
 */
class People
{
	/**
	 * @var array
	 */
	private $people;

	/**
	 *
	 */
	function __construct()
	{
		$this->people = array();
	}

	/**
	 * @param $field
	 * @throws \Exception
	 * @return array
	 */
	function sort($field)
	{
		$code = "return strnatcmp(\$a->get$field(), \$b->get$field());";
		usort($this->people, create_function('$a,$b', $code));
		return $this->people;
	}

	/**
	 * @param Person $person
	 */
	public function add(Person $person)
	{
		$this->people[] = $person;
	}

	/**
	 * @return array
	 */
	public function get()
	{
		return $this->people;
	}

}

