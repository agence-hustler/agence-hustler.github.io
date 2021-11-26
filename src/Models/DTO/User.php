<?php

namespace App\Models\DTO;

use \DateTime;

/**
 * Classe DTO (attributs + getters/setters) User : matérialise les utilisateurs du site
 */
class User
{
	private $id;
	private $username;
	private $email;
	private $password;
	private $registerDate;


	/**
	 * GETTERS
	 */
	public function getId()
	{
		return $this->id;
	}

	public function getUsername()
	{
		return $this->username;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function getRegisterDate()
	{
		return $this->registerDate;
	}


	/**
	 * SETTERS
	 */
	public function setId(int $id)
	{
		$this->id = $id;
		return $this;
	}

	public function setUsername(string $username)
	{
		$this->username = $username;
		return $this;
	}

	public function setEmail(string $email)
	{
		$this->email = $email;
		return $this;
	}

	public function setPassword(string $password)
	{
		$this->password = $password;
		return $this;
	}

	public function setRegisterDate(DateTime $registerDate)
	{
		$this->registerDate = $registerDate;
		return $this;
	}


	/**
	 * __toString() : affichage de l' objet en tant que text
	 */
	public function __toString()
	{
		return '#' . $this->getId() . '. ' . $this->getUsername();
	}
}