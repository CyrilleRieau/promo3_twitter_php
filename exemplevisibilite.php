<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once './Banque.php';
$compte = new Compte();
//$compte->solde = 40050345023403;
//echo $compte->solde;
echo $compte->getSolde();
