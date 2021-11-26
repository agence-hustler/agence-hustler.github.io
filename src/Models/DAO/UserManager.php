<?php

namespace App\Models\DAO;

use App\Models\DTO\User;
use \DateTime;
use \PDO;


/**
 * Classe DAO servant à gérer et faire l' interface entre les objets des utilisateurs du site et la base de données
 */
class UserManager
{
	/**
	 * Stockage d' une instance active de connexion PDO à la base de donnée grace a connectDb() dans le __construct()
	 */
	private $db;


	/**
	 * Getters/setters
	 */
	public function getDb()
	{
		return $this->db;
	}

	public function setDb(PDO $db)
	{
		$this->db = $db;
	}


	/**
	 * Constructeur servant à hydrater $db avec une instance de PDO récupérée via la fonction connectDb()
	 */
	public function __construct()
	{
		$this->setDb(connectDb());
	}


	/**
	 * Méthode servant à sauvegarder un objet d' utilisateur en DB
	 */
	public function save(User $userToSave)
	{
		$insertUser = $this->getDb()->prepare('INSERT INTO user(email, password, register_date, username) VALUES(?, ?, ?, ?);');

		$status = $insertUser->execute(
			[
				$userToSave->getEmail(),
				$userToSave->getPassword(),
				// On stocke la date en format string dans la DB, pas l' objet lui même sinon erreur
				$userToSave->getRegisterDate()->format('Y-m-d H:i:s'),
				$userToSave->getUsername(),
			]);

		$userToSave->setId($this->getDb()->lastInsertId());
		return $status;
	}

	/**
	 * Méthode servant à modifier un objet d' utilisateur en DB
	 */
	public function update(User $userToModify)
	{
		$modifyUser = $this->getDb()->prepare('UPDATE user SET email = :email, password = :password, username = :username WHERE id = :id;');

		$status = $modifyUser->execute(
			[
				'email'     => $userToModify->getEmail(),
				'password'  => $userToModify->getPassword(),
				'username'  => $userToModify->getUsername(),
				'id'        => $userToModify->getId()
			]);

		return $status;
	}

	/**
	 * Méthode servant à supprimer un objet d' utilisateur en DB
	 */
	public function delete(User $userToDelete)
	{
		$deleteUser = $this->getDb()->prepare('DELETE FROM user WHERE id = ?;');

		$status = $deleteUser->execute(
			[
				$userToDelete->getId()
			]);

		return $status;
	}

	/**
	 * Méthode permettant de récupérer un utilisateur par un de ses champs et une valeur de champ
	 * (Par exemple récupérer un utilisateur par son email)
	 */
	public function findOneBy(string $field, $value)
	{
		$getOne = $this->db->prepare('SELECT * FROM user WHERE ' . $field . ' = ?');
		$getOne->execute(
			[
				$value
			]);

		$oneInArray = $getOne->fetch(PDO::FETCH_ASSOC);

		if ( !empty($oneInArray) )
		{
			$oneInObject = $this->buildDomainObject($oneInArray);
		}

		return $oneInObject ?? null;
	}

	/**
	 * Méthode permettant de récupérer tous les utilisateurs de la DB
	 */
	public function findAll()
	{
		$getAll = $this->getDb()->query('SELECT * FROM user;');

		$allInArray = $getAll->fetchAll(PDO::FETCH_ASSOC);

		if ( !empty($allInArray) )
		{
			foreach ($allInArray as $oneInArray)
			{
				$allInObject[] = $this->buildDomainObject($oneInArray);
			}
		}

		return $allInObject ?? [];
	}

	/**
	 * User builder : transforme in array en objet
	 */
	public function buildDomainObject(array $oneInArray)
	{
		$oneInObject = new User();

		$oneInObject
			->setId($oneInArray['id'])
			->setUsername($oneInArray['username'])
			->setEmail($oneInArray['email'])
			->setPassword($oneInArray['password'])
			->setRegisterDate(new DateTime($oneInArray['register_date']));

		return $oneInObject;
	}
}