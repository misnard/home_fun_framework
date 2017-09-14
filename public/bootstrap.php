<?php

// Pour définir les constantes qu'on a mis en place.

# Racine du Site Internet
#define('RACINE_SITE', dirname(__FILE__, 2));
define('RACINE_SITE', dirname( __DIR__ ) );

# Chemin Relatif vers le Dossier Public
define('PUBLIC_URL', '/tnl/public/');

# En-tete du site
define('HEADER_SITE', RACINE_SITE.'/Application/Layout/header.inc.php');

# Pied de Page du site
define('FOOTER_SITE', RACINE_SITE.'/Application/Layout/footer.inc.php');

define('SIDEBAR_SITE', RACINE_SITE.'/Application/Layout/sidebar.inc.php');

define('VIEW_SITE', RACINE_SITE.'/Application/Views');

//Connexion a la base de donées

define('DBHOST','localhost');
define('DBNAME','tnw');
define('DBUSERNAME','root');
define('DBPASSWORD','');



// L'autoloader 
require_once 'Autoloader.php';
Autoloader::register();