<?php
/**
 * @author Chintan Patel
 */

namespace CC\Test;

/**
 * Class Person
 */
class Person
{
	/**
	 * @var
	 */
	private $first_name;
	/**
	 * @var
	 */
	private $last_name;
	/**
	 * @var
	 */
	private $height;
	/**
	 * @var
	 */
	private $gender;
	/**
	 * @var
	 */
	private $birthDate;

	/**
	 * @param mixed $first_name
	 */
	public function setFirstname($first_name)
	{
		$this->first_name = $first_name;
	}

	/**
	 * @return mixed
	 */
	public function getFirstname()
	{
		return $this->first_name;
	}

	/**
	 * @param mixed $last_name
	 */
	public function setLastname($last_name)
	{
		$this->last_name = $last_name;
	}

	/**
	 * @return mixed
	 */
	public function getLastname()
	{
		return $this->last_name;
	}


	/**
	 * @param mixed $birthDate
	 */
	public function setBirthDate($birthDate)
	{
		$this->birthDate = $birthDate;
	}

	/**
	 * @return mixed
	 */
	public function getBirthDate()
	{
		return $this->birthDate;
	}

	/**
	 * @param mixed $gender
	 */
	public function setGender($gender)
	{
		$this->gender = $gender;
	}

	/**
	 * @return mixed
	 */
	public function getGender()
	{
		return $this->gender;
	}

	/**
	 * @param mixed $height
	 */
	public function setHeight($height)
	{
		$this->height = $height;
	}

	/**
	 * @return mixed
	 */
	public function getHeight()
	{
		return $this->height;
	}

	/**
	 * @return mixed
	 */
	public function getName()
	{
		return $this->first_name . ' ' . $this->last_name;
	}
}
