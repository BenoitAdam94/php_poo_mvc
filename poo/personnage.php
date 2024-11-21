<?php


class Personnage {
    public $vie = 80;
    public $atk = 20;
    public $nom;

    private $age; // a l'intérieur de la classe mais pas en dehors

    protected $poids; // On en reparle plus tard

    public function __construct($nom) { // Cette fonction existe de base
        $this->nom = $nom;
    }

    public function crier() {
        echo 'LEEROY JENKINS';
    }

    public function regen () {
        $this->vie = 100;
    }

    public function mort() {
        if ($this->vie <= 0){
            return true;
        } else {
            return false;
        }
    }

    public function regenerer ($vie = null) {
        if (is_null($vie)) {
            $this->vie = 100;
        } else {
            $this->vie +=  $vie;
        }
    }

    public function attaque($cible) {
        var_dump($cible);
    }

    public function getAge() {
        return $this->age;
    }

    private function empecher_negatif(){
        if($this->$vie <0 ) {
            $this->$vie = 0;
        }
    }

}

// 14:47
