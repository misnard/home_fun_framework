<?php
namespace Application\Model\Auteur;

class Auteur {

    private $IDAUTEUR;
    private $NOMAUTEUR;
    private $PRENOMAUTEUR;
    private $EMAILAUTEUR;

    public function get_IDAUTEUR() {
        return $this->IDAUTEUR;
    }

    public function get_NOMAUTEUR() {
        return $this->NOMAUTEUR;
    }

    public function get_PRENOMAUTEUR() {
        return $this->PRENOMAUTEUR;
    }

    public function get_EMAILAUTEUR() {
        return $this->EMAILAUTEUR;
    }
}


