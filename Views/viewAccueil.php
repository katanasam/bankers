<?php
/**
 * Created by PhpStorm.
 * User: cheik
 * Date: 08/09/2019
 * Time: 00:01
 */
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Bank Perso</title>
    <style>
body{
    background:url("/Contenu/perso.jpg");
    background-position:center;
        }
    .lala{
    padding: 0;
    width: 800px;
        height: 900px;
        background-color: #ffffff;
        border: solid white 5px;
    }
    </style>
</head>
</html>
    <body>

        <div class="container mt-4 border-2 lala ">
            <h1>Bankers group fondation</h1>

            <div class="col-md-12 row">
                <div class="col-md-6" > <span> <img src="Contenu/b.jpg" width='300px' heigth='300px' alt=""></span></div>

                <div class="col-md-6" ><span> <img src="Contenu/logo.jpg" width='280px' heigth='280px' alt=""></span></div>
            </div>
            <h3>Liste clients </h3>
            <div class="col-md-12 row">

            <div class="col-md-8  row">

                <!--la boucle commence ici  ------------------------------------------------------------------------------>
               <?php
               var_dump($clients);
               foreach($clients as $client): ?>
                   <!-- utilisation des GETTERS car les attributs son en privé -->
                <div class="col-md-8">
                    <a href="Client.php">
                    <span class="btn btn-success" style="width: 300px">
                        <p> <strong>Nom </strong>: <?= $client->getNom(); ?>
|                       <strong>Prénom </strong>: dzdzdz</p>
                        <p> <strong>Numero de compte</strong></p>
                        <p> 884242824542424244</p>
                    </span>
                    </a>
                </div>
                <div class="col-md-4">
                    <span class="btn btn-danger">
                        <p> <strong>sodle</strong> :dzdzdz</p>
                    </span>

                </div>
                <?php  endforeach; ?>

                <!--la boucle sarret ici ----------------------------------------------------------------------------------------->
            </div>
            <div class="col-md-4">
                <img src="contenu/perso.jpg" width="350" height="250" alt="humain">
            </div>

            </div>


        </div>

    </body>
<html>