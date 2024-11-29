<?php

namespace App\table;

class article{

    public function getURL(){
        return 'index.php?p=article&id=' . $this->id;
    }

    public function getExtrait(){
        $html = substr($this->contenu, 0, 50) . '...';

        $html .= '<a href="' . $this->getURL() . '">Voir la Suite</a>';

        return $html;

    }



}