<!-- Ici on établie la connexion avec la base de donnée et on stocke cette connexion dans la variable $con -->

<?php
    $con = mysqli_connect('localhost', 'root', "");
    if (!$con) {
        die("database connection failed" .mysqli_error($con));
    }

    $select_db = mysqli_select_db($con, 'php_crud_app');

    if (!$select_db) {
        die("database select failed" . mysqli_error($con));
    }
?>