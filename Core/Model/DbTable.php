<?php
namespace Core\Model;

abstract class DbTable 
{
    #nom de la table
    protected $_table;

    #clé Primaire
    protected $_primary;

    #Classe a mapper
    protected $_classToMap;

    # Object PDO, BDD
    private $_db;

    public function __construct() {
        $this->_db = DbFactory::PDOFactory();
    }


    //fonction qui fait comme un fetch all clasique
    public function fetchAll($where = '', $orderby = '', $limit = '', $offset = '') {

        $sql = "SELECT * FROM ".$this->_table;

        if($where != '') {
            $sql .= ' WHERE '.$where;
        }

        if($orderby != '') {
            $sql .= ' ORDER BY '.$orderby;
        }

        if($limit != '') {
            $sql .= ' LIMIT '. (int) $limit;
        }

        if($offset != '') {
            $sql .= ' OFFSET '. (int) $offset;
        }

        $sth = $this->_db->prepare($sql);
        $sth->execute();
        return $sth->fetchAll(\PDO::FETCH_CLASS, $this->_classToMap);
    }

    public function fetchOne($id, $column = '') {

        if($column == '') {
            $column = $this->_primary;
        }

        $sth = $this->_db->prepare('SELECT * FROM '. $this->_table.' WHERE '.$column.' = :id');
        $sth->bindValue(':id', (int) $id, \PDO::PARAM_INT);
        $sth->execute();

        $sth->setFetchMode(\PDO::FETCH_CLASS, $this->_classToMap);

        return $sth->fetch();

    }
}