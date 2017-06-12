<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personne
 *
 * @author rieau
 */
class Personne {
    private $nom;
    private $prenom;
    private $age;
    private $region;    //put your code here

    public function __construct($nom, $prenom, $age, $region) {
       $this->nom=$nom;
       $this->prenom=$prenom;
       $this->age=$age;
       $this->region=$region;   
   }
   public function __toString() {
       return 'Je m\'appelle ' . $this->prenom . ' ' . $this->nom.
               ', né en ' . $this->age . ' et je viens de '. $this->region.'.';
   }
}

