<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PetitChien
 *
 * @author rieau
 */
class PetitChien {
   public $nom;
   public $race;
   public $datedenaissance;
   public $couleur;
   public function aboyer(){
       echo 'wouf wouf wouf';
   }
   public function __toString() {
       return 'Je suis ' . $this->nom . ' aka un bon toutou, de race ' . $this->race.
               ', né en ' . $this->datedenaissance . ' et je suis '. $this->couleur.'.';
   }
   public function __construct($nom, $race, $date, $couleur) {
       $this->nom=$nom;
       $this->race=$race;
       $this->datedenaissance=$date;
       $this->couleur=$couleur;   
   }
}
