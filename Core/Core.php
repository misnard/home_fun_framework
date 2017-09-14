<?php

namespace Core;

class Core {
    
	public function __construct($params)
	{
		# print_r($params);
		if(empty($params)){
			$params['controller']='news';
			$params['action']= 'index';
		}
		# Récupération des paramètres
		$controller = 'Application\Controller\\'.ucfirst($params['controller']).'Controller';
		$action 	= $params['action'];

		# On vérifie si le fichier du controleur existe avant de l'intancier

		$fileController = RACINE_SITE.'\\'.$controller.'.php';
		$fileController = str_replace('\\', DIRECTORY_SEPARATOR, $fileController);
		if(file_exists($fileController)){
			$obj = new $controller;
			
			if(method_exists($obj, $action)){
				$obj->$action();
			} else {
				echo "<h1>Erreur 404 - Page introuvable</h1>
				<h3>Aucune vue correspondante.</h3>";
			}
		} else {
			echo "<h1>Erreur 404 - Page introuvable</h1>
			<h3>Ce controleur n'existe pas.</h3>";
		}

        #if($controller == "news" && $action == "index") {
        #    echo '<h1>JE SUIS LA PAGE ACCUEIL</h1>';
        #}
        
    }
    
}












