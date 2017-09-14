<?php
namespace Application\Model\Categorie;

class Categorie {

    private $IDCATEGORIE;
    private $LIBELLECATEGORIE;
    private $ROUTECATEGORIE;


    public function get_IDCATEGORIE() {
        return $this->IDCATEGORIE;
    }

    public function get_LIBELLECATEGORIE() {
        return $this->LIBELLECATEGORIE;
    }

    public function get_ROUTECATEGORIE() {
        return $this->ROUTECATEGORIE;
    }
}