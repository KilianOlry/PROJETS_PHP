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
            <form action="" method="POST" class="form-horizontal col-md-6 pt-4">
                <h2>Crud App by sen dev tech</h2>

                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">Prenom</label>
                    <div class="col-sm-10">
                        <input type="text" name="nom" placeholder="Prenom" class="form-control" id="input1">
                    </div>
                </div>

                <div class="form-group">
                    <label for="input2" class="col-sm-2 control-label">Nom</label>
                    <div class="col-sm-10">
                        <input type="text" name="nom" placeholder="Nom" class="form-control" id="input2">
                    </div>
                </div>
                <div class="form-group">
                    <label for="input3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="nom" placeholder="Adresse Mail" class="form-control" id="input3">
                    </div>
                </div>


                <div class="form-group">
                    <label for="input4" class="col-sm-2 control-label">Genre</label>
                    <div class="col-sm-10">
                        <label>
                                <input type="radio" name="gender" id="optionsRadios" value="h" checked> Homme
                        </label>

                    </div>
                    <div class="col-sm-10">
                        <label>
                                <input type="radio" name="gender" id="optionsRadios" value="f" checked> Femme
                        </label>

                    </div>

                </div>

                <div class="form-group">
                    <label for="input1" class="col-sm-2 control-label">Age</label>
                    <div class="col-sm-10">
                        <select name="age" id="" class="form-control">
                            <option>Ton age</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                        </select>
                </div>
            </div>

            <div class="pt-4">
                <input type="submit" value="envoyer" class="btn btn-primary m-3">
                
                <a href="view.php">
                    <button class="btn btn-success m-3" type="button">Voir la liste</button>
                    </a>
            </div>
            </form>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>