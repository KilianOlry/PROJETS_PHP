<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="result">
        <div class="result_content">
            <a href="index.php">Ajouter un produit</a>
            
            <h3>liste des produits</h3>
            <div class="liste_produits">
                <!-- produit1 -->
                <?php
                //Nous allons afficher tous les produits ajouté :
                        //connexion à la base de donnée

                    $con = mysqli_connect("localhost","root","","produits");
                    $req3 = mysqli_query($con, "SELECT * FROM produit");
                    if (mysqli_num_rows($req3) == 0) {
                        //si la base de donnée ne contient aucun produit, alors affichons :
                        echo"Aucun produit Trouvé";
                    }else {
                        while ($row = mysqli_fetch_assoc($req3)) {
                            echo'<div class="produit">
                                <div class="image_prod">
                                    <img src="image_produits/'.$row["image"].'"> 
                                </div>
                            <div class="text">
                                <strong><p class="titre">'.$row["titre"].'</p></strong>
                                <p class="description">'.$row["descrip"].'</p>
                            </div>
        
                        </div>';
                        }
                    }
            ?>


            </div>
        </div>
    </div>
</body>
</html>