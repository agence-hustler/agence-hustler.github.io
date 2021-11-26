<?php
// Récupération de la route actuelle dans l' URL
define('ROUTE', request_path());

// Emplacement du dossier qui contient les vues
define('VIEWS_DIR', __DIR__ . '/../views/');

// Emplacement du dossier public (qui contient les fichiers CSS/JS/Images/etc...)
// servira à construire les liens dans la partie front-end (inclusion des images, css, js, etc...)
define('PUBLIC_PATH', mb_substr($_SERVER['SCRIPT_NAME'], 0, -(mb_strlen(basename(__FILE__)))) . '/');

// Paramètres de connexion à la DB
define('DB_HOST',     'localhost');
define('DB_NAME',     'aquaspassair');
define('DB_USER',     'root');
define('DB_PASSWORD', '');