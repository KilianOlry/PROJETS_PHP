<?php

//On inclut la variable de connexion à la base de donnée
    require_once('connect.php');

//On créer une variable qui va stcker la requête SQl qui sélectionne tout dans la base de donnée
    $ReadSql = "SELECT * FROM `etudiant` ";

//Cette variable stock la connexion + la requête ci dessus
    $res = mysqli_query($con, $ReadSql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>CRUD</title>
</head>
<body>

<!-- On inclut la bar de navigation -->
<?php

    include 'navbar.php';
?>

<div class="container">
    <div class="row pt-4">
        <h2>Liste des Étudiants</h2>

<!-- Voici le lien qui nous permet d'accéder à la page Ajouter un Étudiant -->


        <a href="index.php">
            <button class="btn btn-primary" type="">Ajouter un Étudiant</button>
        </a>
    </div>

<!-- Le tableau qui va contenir les informations des stagiaires -->


    <table class="table table-stiped mt-5">
        <thead>
            <tr>
                <th>identifiant</th>
                <th>Nom complet</th>
                <th>l'Email</th>
                <th>Age</th>
                <th>Genre</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

<!-- Tant qu'il y des lignes contenant des informations sur les stagiaires tu ajoutes une nouvelle ligne dans le tableau -->
            <?php
                while ($r = mysqli_fetch_assoc($res)) {
                    
                
            ?>
            <tr>
                <th scope="row"><?php echo $r['id']; ?></th>
                <td><?php echo $r['first_name'] ."". $r['last_name']; ?></td>
                <td><?php echo $r['email']; ?></td>
                <td><?php echo $r['age']; ?></td>
                <td><?php echo $r['gender']; ?></td>

                <td>
                    <a href="update.php?id=<?php echo $r['id']; ?>" class="m-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                    </a>



                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16" data-bs-toggle="modal"
                    data-bs-target="#exempleModal<?php echo $r['id']; ?>">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                    </svg>

                    <div class="modal" id="exempleModal<?php echo $r['id']; ?>" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <p>Etes vous sûr de vouloir supprimer cet Étudiant ?</p>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss= "modal">Annuler</button>
                            
                            <a href="delete.php?id=<?php echo $r['id']; ?>">
                                <button class="btn btn-primary" type="button">Confirmer</button>
                        </a>
                        </div>
                    </div>
                </div>
                </div>
                </td>
            </tr>
              <?php }?>  
        </tbody>
    </table>
</div>



<div class="container">
    <div class="row text-center">
        <form action="" method="GET" class="form-horizontal col-md-12 pt-5">
                <h2>Rechercher un Étudiant</h2>
            <div class="pt-4">
            <input type="text" name="recherche" placeholder="Rechercher" class="form-control" id="ID-Recherche">
                    <button class="btn btn-success mt-5" type="button">Rechercher</button>
            </div>

            <p class="mt-5">L'étudiant <?php echo $req6 ?> existe bien dans la base de donnée</p>
        </form>    
    
</div>


</div>

<?php

                  
         if (isset($_GET) & !empty($_GET)) {
            $rechercher = ($_POST['recherche']);
            
            (mysqli_fetch_assoc($ ));
            //Requête sql qui insert les données dans la base de donnée
            
            $CreateSql2 = $req5 = "SELECT * FROM 'etudiant' WHERE firstname ='$recherche'";  

            $req6 = mysqli_query($con, $CreateSql2);


                            
        }
?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>
</html>