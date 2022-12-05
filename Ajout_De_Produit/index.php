<?php
    if(isset($_POST["btn-ajouter"])){
        //connexion à la base de donnée

        $con = mysqli_connect("localhost", "root","","produits");
        /* Pour vérifier que l'on ait bien la connexion à la base de donée établie
        // if ($con) {
        //     echo"Connexion établie";
        
        // }else {
        //     echo"connexion échouée";
        // }
        */

        //récupération des donnée du formulaire

        $titre = $_POST['titre'];
        $description = $_POST['description'];
            if (!empty($titre) && !empty($description)) {
                //verifier si le produit existe déjà dans la base de données
                $req1= mysqli_query($con, "SELECT titre ,descrip FROM produit WHERE titre= '$titre' AND descrip ='$description'");
                
                if(mysqli_num_rows($req1) > 0) {
                    // Si le produit existe déjà:
                    $message= '<p style="color:#ff800">Le produit existe déjà</p>';
                }else {
                    //SINON
                    if (isset($_FILES['image'])) {
                        //si une image a été télécharger
                            $img_nom =$_FILES['image']['name'];//On réupère le nom de l'image
                            $tmp_nom = $_FILES['image']['tmp_name'];//Nous définissons un nom temporaire
                            $time = time(); //On récupère l'heure actuelle
                            //On renomme l'image


                            $nouveau_nom_image = $time.$img_nom ;

                            //On déplace l'image dans le dossier images-produits

                            $deplacer_image = move_uploaded_file($tmp_nom,"image_produits/".$nouveau_nom_image);

                            if ($deplacer_image) {
                                //si l'image a été déplacé :
                                //insérons le titre, la description et le nom de l'image dans la base de donnée


                                $req2 =  mysqli_query($con, "INSERT INTO produit (titre, descrip, image) VALUES ('$titre', '$description', '$nouveau_nom_image')"); 
                                if($req2) {
                                    //si les informations ont été inséré dans la base de données
                                    $message = '<p style="color:green">Produit ajouté !</p>';
                                }else {
                                    //sinon
                                    '<p style="color:red">Produit non ajouté !</p>';
                                }
                            }
                        
                        
                        }
                }
            
            }else {
                //si tous les champs ne sont pas remplie on a:
                $message = '<p style="color:red">Veuillez compléter tous les champs svp !</p>';
            }

    }
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ajout de produits</title>
</head>

<body>
    <section>
    <div class="card">
        <div class="message">
            <?php
            if (isset($message)) {
                //si la variable message existe, on affiche le contenu de la variable
                echo $message;
            }?>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">

            <label for="">Nom de Produit</label>
                <input type="text" name="titre">

            <label for="">Description</label>
                <textarea name="description" cols="30" rows="10"></textarea>

            <label for="image">Ajouter une image</label>
                <input type="file" name="image">

            <input type="submit" value="Ajouter" name="btn-ajouter" id="submit">
            <a class="btn-liste-prod" href="resultats.php">Liste des produits</a>
        </form>
    </div>
</section>
</body>

</html>

