<?php
// Inclusion des dépendances installées avec Composer
require __DIR__ .'/../vendor/autoload.php';

// Inclusion du fichier contenant les fonctions et configurations générales du site
require __DIR__ .'/../configs/functions.php';

// Inclusion du fichier contenant les paramètres personnalisables du site (accès DB par ex)
require __DIR__ .'/../configs/params.php';

try
{
	// Inclusion du fichier routes.php qui contient toutes les URL du site (routes) et qui chargera le bon Contrôleur de page pour chaque URL
	require __DIR__ .'/../configs/routes.php';
}
catch (Throwable $e)
{
	?>
	<div style="background-color: #FFa2a2; padding: 15px; border-radius: 8px">
		<h1><b>Erreur PHP !</b></h1>
		<hr>
		<p><b>Fichier : </b><?= $e->getFile(); ?></p>
		<p><b>Ligne : </b><?= $e->getLine(); ?></p>
		<p><b>Message : </b><span style="font-size: 20px"><?= $e->getMessage(); ?></span></p>
		<hr>
		<!-- Affichage de la pile d' erreur dans un dump au cas où on aurait besoin de plus de détails sur l' erreur affichée -->
		<?php dump($e->getTrace()); ?>
	</div>
	<?php
}