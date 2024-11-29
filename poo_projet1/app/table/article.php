<?php

namespace App\table;

class article{

    public function getURL(){
        return 'index.php?p=article&id=' . $this->id;
    }

    public function getExtrait(){
        return $this->contenu;
    }



}