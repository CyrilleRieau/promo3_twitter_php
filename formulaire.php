<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="#">
           <label for="name">Nom</label><input type="text" name="name"></input>
           <label for="prenom">Prenom</label><input type="text" name="prenom"></input>
           <label for="age">Age</label><input type="date" name="age"></input>
           <label for="region">Region</label><input type="text" name="region"></input>
           <input type="submit" value="Envoyer"></input></form>    
    </body>
</html>
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once './Personne.php';
$personne1 = new Personne($_POST['name'], $_POST['prenom'], $_POST['age'], $_POST['region']);
var_dump($personne1);
echo $personne1;