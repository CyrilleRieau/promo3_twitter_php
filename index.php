<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include_once './PetitChien.php';
            $chien1 = new PetitChien('Doginou', 'doge', '27/12/1984', 'phosphoresecent');
            /*$chien1->nom = 'Doginou';
            $chien1->race = 'doge';
            $chien1->couleur = 'phosphorecent';
            $chien1->datedenaissance = '27/12/1984';*/
            //var_dump($chien1);
            //echo $chien1->race;
            //$chien1->aboyer();
            echo $chien1;
            
            $chien2 = new PetitChien('Eduardo', 'chihuahua', 'un soir d\'orage', 'un justicier masqué');
            /*$chien2->nom = 'Eduardo';
            $chien2->race = 'chihuahua';
            $chien2->couleur = 'un justicier masqué';
            $chien2->datedenaissance = 'un soir d\'orage';*/
            echo $chien2;
            ?>
    </body>
</html>
