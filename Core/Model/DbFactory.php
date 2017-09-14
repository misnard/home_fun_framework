<?php
namespace Core\Model;

class DbFactory
{
    /**
    * Initialisation de la connexion a PDO
    */
    public static function PDOFactory() {
        #Création d'un connexion pdo

        $pdo = new \PDO('mysql:host='.DBHOST.';dbname='.DBNAME, DBUSERNAME, DBPASSWORD);

        #gestion des erreurs
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        #on retourne pdo
        return $pdo;
    }
}