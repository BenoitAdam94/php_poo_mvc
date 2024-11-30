<?php

namespace App\table;

class article{

    // "Methode Magique"
    public function __get($key){
        
        $method = 'get'. ucfirst($key);

        $this->$key = $this->$method(); // Variable d'instance

        return $this->$key;
    }


    public function geturl(){
        return 'index.php?p=article&id=' . $this->id;
    }

    public function getExtrait(){
        $html = substr($this->contenu, 0, 100) . '...';

        $html .= '<a href="' . $this->getURL() . '">Voir la Suite</a>';

        return $html;

    }



}