<?php 
    //Nous allons vérifier les informations du formulaire
    session_start();
    if (isset($_POST['email']) && isset($_POST['mdp'])) { //On vérifie ici si l'utilisateur a rentré des informations
        //Nous allons mettre l'email et le mot de passe dans des variables

        $email = $_POST['email'];
        $mdp = $_POST['mdp'];
        $erreur="";
        //Nous allons vérifié si les infos entrée sont correctes
        
        //conexion à la base de donnée

        $con = mysqli_connect("localhost", "root", "", "form");

        //requête pour sélectionner l'utilisateur qui a pour email et mot de passe les identifiants qui ont été entrés

        $req1 = mysqli_query($con , "SELECT * FROM  utilisateur WHERE email='$email' AND mdp='$mdp' ");
        $num_ligne = mysqli_num_rows($req1); //compter le nombre de ligne ayant rapport à la requête SQL

        if ($num_ligne > 0) {

            header("Location:bienvenu.php"); //Si le nombre est > 0, on sera redirégé vers bienvenu.php
            //Nous allons créer une variable de type session qui vas contenir l'email de l'utilisatuer
            $_SESSION['email'] = $email;
        }
        else{ //sinon
            $erreur = "Adresse Mail ou Mots de passe incorrectes !";

            
        }
    };  

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire de connexion</title>
</head>
<body>
    <section>
        <h1>Connexion</h1>

        <?php 
       if(isset($erreur)){// si la variable $erreur existe , on affiche le contenu ;
           echo "<p class= 'Erreur'>".$erreur."</p>"  ;
       }
       ?>
        <form action="" method="post">
            <label for="email"> Adresse mail</label>
                <input type="text" name="email" id="email">

            <label for="mdp">Mot de Passe</label>
                <input type="password" name="mdp" id="mdp">

                <input type="submit" value="Valider">
        </form>
    </section>
</body>
</html>