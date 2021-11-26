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

class NewsletterController
{
	/**
	 * Contrôleur de la vue d' accueil du site
	 */
	public function newsletter()
	{
		// Charge la vue home.php dans le dossier views
		// require VIEWS_DIR . 'newsletter.php';
	}
}