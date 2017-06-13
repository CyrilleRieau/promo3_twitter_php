<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(isset($_POST['name'])) {
            $post= filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);        
                include_once './Personne.php';
                $personne1 = new Personne($post['name'], $post['prenom'], $post['age'], $post['region']);
                echo '<pre>';
                var_dump($personne1);
                echo '</pre>';
        }
        ?>
        <form method="POST" action="#">
           <label for="name">Nom</label><input type="text" name="name" />
           <label for="prenom">Prenom</label><input type="text" name="prenom"/>
           <label for="age">Age</label><input type="date" name="age"/>
           <label for="region">Region</label><input type="text" name="region"/>
           <input type="submit" value="Envoyer"/>
        </form>    
    </body>
</html>