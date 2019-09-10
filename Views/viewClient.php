
<!DOCTYPE html>

<head>

    <meta charset="UTF-8">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Bank Perso</title>
    <style>
        body{

            background:url("../Contenu/perso.jpg");
            background-position:center;
            background-repeat: no-repeat;
        }
        .lala{
            width: 800px;
            height: auto;
            background-color: #ffffff;
            border: solid white 5px;
        }
        .lalo{
               width: 450px;
               height: auto;
               background-color: #ffffff;
               //border: solid #91f0ff 1px;
            margin: 5px;
            padding: 5px;
           }
    </style>
</head>
</html>
    <body>

        <div class="container mt-4 border-2 lala ">
            <h1>Bankers group fondation</h1>

            <div class="col-md-10 row">

                <div class="col-md-6" >    <a href="index.php">
                    <span> <img src="Contenu/b.jpg" width='300px' heigth='300px' alt=""></span>
                    </a>
                </div>

                <div class="col-md-6" ><span> <img src="Contenu/logo.jpg" width='280px' heigth='280px' alt=""></span></div>

            </div>

            <div class="col-md-12 row mb-4">
                <div class="col-md-6">
                    <span class="btn btn-success">
                        <p> <strong>Nom </strong>: <?= $client->getNom(); ?> </p>
                        <p><strong>Numero de compte : </strong>  <?= $client->getNumeroClient(); ?> </p>

                    <p>Prenom :<?= $client->getPrenom(); ?></p>
                    <p>Numero client : <strong class="text-danger"> N°</strong><?= $client->getNumeroClient(); ?></p>
                    <p><?= $client->getEconomie(); ?> <strong class="text-danger">$</strong></p>
                    <p>Type : <?= $client->getType(); ?></p>
                    <p>Menbre depuis DATE:</p>
                        <p><?= $client->getDate()->format('Y-m-d \ TH:i:s') ?></p>

                    </span>


                    <form action="">
                        <label for="Solde"> Motant</label><br>
                        <input type="text" name="motant">

                        <button class="btn btn-danger"> Retrait</button>
                        <button class="btn btn-success"> Ajouter</button>

                    </form>
                    <?php foreach($compte_client as $compte):?>
                        <span class="btn btn-primary">
                            <p> <strong>Sodle</strong> :<?= $compte['solde'] ;?></p>
                            <p> <strong>reF :</strong> : UIDEJ-5367990--<?= $compte['id_compte'];?></p>
                            <p> <strong>Titulaire ID</strong> :<?= $compte['titulaire_compte']?></p>
                        </span>

                    <?php  endforeach;  ?>
                </div>
                <div class="col-md-6">
                    <div class="lalo">
                        <!-- boucle des diferent solde  -->
                        <table>
                            <tr>
                                <td> <strong> Ancien solde | </strong>  </td>
                                <td> <strong> Montant| </strong>   </td>
                                <td> <strong> Nouveau solde | </strong>   </td>
                                <td> <strong> Date </strong></td>
                            </tr>
                        <tr>
                        </table>
                        <table>

                        <?php foreach($historique as $his):?>
                            <tr>
                            <td> <strong> |AS  </strong>  <?= $his['ancien_solde'] ?>  <strong class="text-danger" style="width:50px">  $ </strong> </td>
                            <td> <strong> |MT </strong>   <?php if($his['montant'] < 0) {
                                    printf('<strong class="text-danger"> %d </strong>', $his['montant']);}
                                    if($his['montant'] > 0) {
                                    printf('<strong class="text-success"> %d </strong>', $his['montant']);}
                                                           ?>
                                <strong class="text-danger" style="width:50px">  $ </strong>  </td>



                                <td> <strong> |NS  </strong>  <?= $his['nouveau_solde'] ?>  <strong class="text-danger" style="width:50px">  $ </strong>  </td>
                            <td> <strong> |Date </strong>    2019 </td>
                            </tr>
                        <?php endforeach ?>

                        </table>

                    </div>


                </div>
            </div>












        </div>

    </body>
<html>