<?php
    require_once('connect.php');
    $id = $_GET['id'];
    $selSql = "SELECT * FROM `etudiant` WHERE id=$id";
    $res = mysqli_query($con, $selSql);
    $r = mysqli_fetch_assoc($res);


        if (isset($_POST) & !empty($_POST)) {
            $nom = ($_POST['Nom']);
            $prenom = ($_POST['Prenom']);
            $email = ($_POST['Email']);
            $gender = ($_POST['Gender']);
            $age = ($_POST['Age']);

            $UpdateSql = "UPDATE `etudiant` SET first_name='$nom', last_name='$prenom', email='$email', gender='$gender', age='$age'
                            WHERE id=$id";

            $res = mysqli_query($con, $UpdateSql);

            if ($res) {
                header("location: view.php");
            }else{
                $erreur = "les changements n'ont pas été comptabliser";
            }
                            
        }

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
<?php

    include 'navbar.php';
?>
    <div class="container">
        <div class="row pt-4">
           
            <?php
                if (isset($erreur)) { ?>
                <div class="alert alert-danger" role="alert">
                <?php
                    echo $erreur;
              ?>
            </div> <?php } ?>
            

            

            <form action="" method="POST" class="form-horizontal col-md-6 pt-4">
                <h2>Crud App by sen dev tech</h2>

                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">Prenom</label>
                    <div class="col-sm-10">
                        <input type="text" name="Prenom" placeholder="Prenom" class="form-control" id="input1" value="<?php echo $r['first_name']?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="input2" class="col-sm-2 control-label">Nom</label>
                    <div class="col-sm-10">
                        <input type="text" name="Nom" placeholder="Nom" class="form-control" id="input1" value="<?php echo $r['last_name']?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="Email" placeholder="Adresse Mail" class="form-control" id="input1" value="<?php echo $r['email']?>">
                    </div>
                </div>


                <div class="form-group">
                    <label for="input4" class="col-sm-2 control-label">Genre</label>
                    <div class="col-sm-10">
                        <label>
                                <input type="radio" name="Gender" id="optionsRadios" value="H" <?php if ($r['gender'] == 'H') {
                                    echo "checked";
                                } ?> checked> Homme
                        </label>

                    </div>
                    <div class="col-sm-10">
                        <label>
                                <input type="radio" name="Gender" id="optionsRadios" value="F"<?php if ($r['gender'] == 'F') {
                                    echo "checked";
                                } ?> checked> Femme
                        </label>

                    </div>

                </div>

                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">Age</label>
                    <div class="col-sm-10">
                        <select name="Age" id="" class="form-control">
                            <option>Ton age</option>
                            <option value="20" <?php if ($r['age'] == '20') {
                                    echo "selected";} ?>>20</option>

                            <option value="21" <?php if ($r['age'] == '21') {
                                    echo "selected";} ?>>21</option>

                            <option value="22" <?php if ($r['age'] == '22') {
                                    echo "selected";} ?>>22</option>

                            <option value="23" <?php if ($r['age'] == '23') {
                                    echo "selected";} ?>>23</option>

                            <option value="24" <?php if ($r['age'] == '24') {
                                    echo "selected";} ?>>24</option>
                        </select>
                </div>
            </div>

            <div class="pt-4">
                <input type="submit" value="Ajouter" class="btn btn-primary m-3">
                
            </div>
            </form>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>