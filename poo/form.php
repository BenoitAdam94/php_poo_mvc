<?php

/** 
 * Classe Form
 * Permet de générer un formulaire
 */

class Form{

    /**
     * @var array données utilisée par le formulaire
     */
    private $data; // Privée

    /**
     * @var string Tag utilisé pour entourer les champs
     */
    public $surround = 'p';


    /**
     * @param array $data
     */

    public function __construct($data = array()) {// Cette fonction existe de base, va prendre le GET ?
            $this->data = $data;
            }

    /**
     * @param $html string Code HTML à entourer
     * @return string
     */
    private function surround($html) {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    /**
     * @param $index string Code HTML à entourer
     * @return string
     */
    private function getValue($index) {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param $index string Code HTML à entourer
     * @return string
     */
    public function input($name){
        return $this->surround(
            '<input type="text" name="' . $name .'" value="' . $this->getValue($name) .'">'
        );
    }

    public function submit() {
        return $this->surround('<button type="submit">Envoyer</button>');
    }

}