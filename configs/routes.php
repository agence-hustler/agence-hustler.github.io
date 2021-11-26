<?php

// Inclusion des Contrôleurs du site
use App\Controllers\MainController;
use App\Controllers\NewsletterController;

// Instanciation de la classe des contrôleurs
$mainController = new MainController();
$newsletterController = new NewsletterController();

// Liste des routes avec leurs Contrôleur
// Chaque URL correspond à une page du site
switch ( ROUTE )
{
	// Page d' accueil
	case '/';
		$mainController->home();
		break;


	/*
	 * Gestion des sessions
	 */
	// Page de connexion
	case '/connexion/';
		$mainController->signIn();
		break;

	// Page de déconnexion
	case '/deconnexion/';
		$mainController->signOut();
		break;


	/*
	 * Gestion du profil
	 */
	// Page d' inscription
	case '/inscription/';
		$mainController->signUp();
		break;


	/*
	 * Gestion des pages autres actions
	 */
	// Page de la Newsletter
	case '/newsletter/';
		$mainController->enConstruction();
		break;

	// Page des reservations
	case '/reservations/';
		$mainController->enConstruction();
		break;

	// Page de vente
	case '/acheter-une-place/';
		$mainController->prices();
		break;

	// Page des photos
	case '/photos/';
		$mainController->photos();
		break;

	// Page Trouvez-nous
	case '/trouvez-nous/';
		$mainController->findUs();
		break;



	/*
	 * Autres vues
	 */
	// Si aucun Contrôleur ne correspond à la route demandé, c' est le Contrôleur de la page 404 qui sera chargé
	default:
		$mainController->page404();
		break;
}