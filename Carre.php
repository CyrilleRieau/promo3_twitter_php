<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Carre
 *
 * @author rieau
 */
class Carre {
    private $taille;
    private $couleur;
    
    function __construct($taille, $couleur) {
        $this->taille = $taille;
        $this->couleur = $couleur;
    }
    function getTaille() {
        return $this->taille;
    }

    function getCouleur() {
        return $this->couleur;
    }

    function setTaille($taille) {
        $this->taille = $taille;
    }

    function setCouleur($couleur) {
        $this->couleur = $couleur;
    }

public function afficher(){
       echo '<div style="background-color:'.$this->couleur.';border: 1px solid '. $this->couleur.'; height:'.$this->taille.'px; width:'.$this->taille.'px"></div>';
   }
   public function afficherSuperficie(){
       echo $this->taille*$this->taille.' px&sup2;';
   }
}
