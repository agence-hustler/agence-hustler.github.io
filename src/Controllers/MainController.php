<?php
// Le namespace doit être l' emplacement précis du fichier en remplaçant 'src' par 'App'
// L' emplacement actuel de ce fichier est : src/Controllers/MainController.php
// Le namespace doit être : App\Controllers;
// Le nom de ce fichier doit être le même que le nom de la classe : MainController
namespace App\Controllers;

// Importation des classes nécessaires
use App\Models\DAO\UserManager;
use App\Models\DTO\User;
use \DateTime;

class MainController
{
	/**
	 * Contrôleur de la vue d' accueil du site
	 */
	public function home()
	{
		// Charge la vue home.php dans le dossier views
		require VIEWS_DIR . 'home.php';
	}


	/**
	 * Gestion des sessions
	 */
	/**
	 * Contrôleur de la vue login du site
	 */
	public function signIn()
	{
		// Redirection si déjà connecté
		if ( isConnected() )
		{
			header('location: ' . PUBLIC_PATH);
			die();
		}

		////----- 1. Check if form vars exists -----////
		if (
			isset($_POST['email']) &&
			isset($_POST['password'])
		)
		{

			////----- 2. Check if there are errors -----////
			// email
			if ( !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
			{
				$errors['email'] = 'Invalid email';
			}

			// password
			if ( !preg_match('/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[ !"#\$%&\'()*+,\-.\/:;<=>?@[\\\\\]\^_`{\|}~]).{8,4096}$/', $_POST['password']) )
			{
				$errors['password'] = 'Password does\'nt respect complexity rules';
			}


			////----- 3. If no error then continue -----////
			if ( !isset($errors) )
			{

				$userManager = new UserManager();
				$userToConnect = $userManager->findOneBy('email', $_POST['email']);

				if ( empty($userToConnect) )
				{
					$errors['email'] = 'No account associated with this email';
				}
				else
				{
					// verification du mot de passe
					if ( password_verify($_POST['password'], $userToConnect->getPassword()) )
					{
						// Connection
						$_SESSION['user'] = $userToConnect;
						$success = 'Your are now logged-in';

						header('location: ' . PUBLIC_PATH);
					}
					else
					{
						$errors['password'] = 'Incorrect password';
					}
				}

			}
		}

		// Charge la vue login.php dans le dossier des vues "views"
		require VIEWS_DIR . 'signin.php';
	}

	/**
	 * Contrôleur de la vue logout du site
	 */
	public function signOut()
	{
		// Redirection si non connecté
		if ( !isConnected() )
		{
			header('location: ' . PUBLIC_PATH);
			die();
		}

		// Supprime l' utilisateur de la variable $_SESSION
		unset($_SESSION['user']);
		header('location: ' . PUBLIC_PATH);

		// Charge la vue logout.php dans le dossier des vues "views"
		// require VIEWS_DIR . 'signout.php';
	}


	/**
	 * Gestion du profil
	 */
	/**
	 * Contrôleur de la vue register du site
	 */
	public function signUp()
	{
		// Redirection si déjà connecté
		if ( isConnected() )
		{
			header('location: ' . PUBLIC_PATH);
			die();
		}

		////----- 1. Check if form vars exists -----////
		if (
			isset($_POST['username']) &&
			isset($_POST['email']) &&
			isset($_POST['password'])
		)
		{

			////----- 2. Check if there are errors -----////
			// username
			if ( mb_strlen($_POST['username']) < 1 || mb_strlen($_POST['username']) > 75 )
			{
				$errors['username'] = 'The username must be 75 characters max';
			}

			// email
			if ( !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) )
			{
				$errors['email'] = 'Invalid email';
			}

			// password
			if ( !preg_match('/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[ !"#\$%&\'()*+,\-.\/:;<=>?@[\\\\\]\^_`{\|}~]).{8,4096}$/', $_POST['password']) )
			{
				$errors['password'] = 'The password must contain at least 8 characters, 1capital letter, 1 digit and 1 special character';
			}

			////----- 3. If no error then continue -----////
			if ( !isset($errors) )
			{
				$userManager = new UserManager();

				$checkIfUserExists = $userManager->findOneBy('email', $_POST['email']);

				if ( !empty($checkIfUserExists) )
				{
					$errors['email'] = 'This email is already used';
				}
				else
				{
					$user = new User();
					$user
						->setUsername($_POST['username'])
						->setEmail($_POST['email'])
						->setPassword(password_hash($_POST['password'], PASSWORD_BCRYPT))
						->setRegisterDate(new DateTime());

					$status = $userManager->save($user);

					if ( $status )
					{
						$success = 'Your account was successfully created';
					}
					else
					{
						$errors['server'] = 'Problem with the Database, please try again later';
					}
				}

			}
		}

		// Charge la vue register.php dans le dossier views
		require VIEWS_DIR . 'signin.php';
	}


	/**
	 * Autres
	 */
	/**
	 * Contrôleur de la vue 404 du site
	 */
	public function page404()
	{
		// Modifie le HTTP code pour qu'il soit bien 404 et non 200
		header('HTTP/1.0 404 Not Found');

		// Charge la vue page404.php dans le dossier views
		require VIEWS_DIR . 'page404.php';
	}

	/**
	 * Contrôleur de la page en construction
	 */
	public function enConstruction()
	{
		require VIEWS_DIR . 'pageConstruction.php';
	}

	/**
	 * Contrôleur de la page Trouvez-nous
	 */
	public function findUs()
	{
		require VIEWS_DIR . 'findUs.php';
	}

	/**
	 * Contrôleur de la page photos
	 */
	public function photos()
	{
		// Charge la vue home.php dans le dossier views
		require VIEWS_DIR . 'photos.php';
	}

	/**
	 * Contrôleur de la page photos
	 */
	public function prices()
	{
		// Charge la vue home.php dans le dossier views
		require VIEWS_DIR . 'tarifs.php';
	}
}