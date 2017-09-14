<?php
namespace Application\Model\Articles;
use Application\Model\Auteur\Auteur;
use Application\Model\Auteur\AuteurDb;
use Application\Model\Categorie\CategorieDb;

class Articles {

    private $IDARTICLE;
    private $IDAUTEUR;
    private $IDCATEGORIE;
    private $TITREARTICLE;
    private $CONTENUARTICLE;
    private $FEATUREDIMAGEARTICLE;
    private $SPECIALARTICLE;
    private $SPOTLIGHTARTICLE;
    private $DATECREATIONARTICLE;
    private $CategorieObj;
    private $AuteurObj;

    public function __construct()
    {
        $CategorieDb = new CategorieDb();
        $this->CategorieObj = $CategorieDb->fetchOne($this->IDCATEGORIE);
        $AuteurDb = new AuteurDb();
        $this->AuteurObj = $AuteurDb->fetchOne($this->IDAUTEUR);
    }

    public function get_IDARTICLE() {
        return $this->IDARTICLE;
    }

    public function get_IDAUTEUR() {
        return $this->IDAUTEUR;
    }

    public function get_IDCATEGORIE() {
        return $this->IDCATEGORIE;
    }

    public function get_TITREARTICLE() {
        return $this->TITREARTICLE;
    }

    public function get_CONTENUARTICLE() {
        return $this->CONTENUARTICLE;
    }

    public function get_FEATUREDIMAGEARTICLE() {
        return $this->FEATUREDIMAGEARTICLE;
    }

    public function get_SPECIALARTICLE() {
        return $this->SPECIALARTICLE;
    }

    public function get_SPOTLIGHTARTICLE() {
        return $this->SPOTLIGHTARTICLE;
    }

    public function get_DATECREATIONARTICLE() {
        return $this->DATECREATIONARTICLE;
    }

    public function get_AUTEURARTICLE() {
        return $this->_AUTEURS;
    }

    public function get_CategorieObj() {
        return $this->CategorieObj;
    }

    public function get_AuteurObj() {
        return $this->AuteurObj;
    }
}