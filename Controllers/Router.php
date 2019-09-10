<?php
/**
 * Created by PhpStorm.
 * User: cheik
 * Date: 08/09/2019
 * Time: 00:02
 */

class Router
{
    /*
     * il deviendra une instance du controller
     * recuperé en paramètre de lurl
     */
    private $_obj_ctrl;
    private $_view;
    /**
     * gere la requete de lutilisateur
     */
    public function routerRequete()
    {
        try
        {
            // fonction php chargement automatique de la class
            spl_autoload_register(function($class_para){
                 require_once('Models/'.$class_para.'.php');
            });

        //    var_dump($_GET);
      //      var_dump((int)$_GET['id']);
//
//            if(!empty($_GET))
//                echo "exist";
//            else
//                echo "do not exist";
//            //Method 2
//            echo "<br>";
//            if($_GET)
//                echo "exist";
//            else
//                echo "do not exist";
//            //Method 3
//            if(count($_GET))
//                echo "exist";
//            else
//              echo "do not exist ";

            // déclaration de variable vide
            $url = "";
            // on récupere tout les paramètre de l'url
            if (isset($_GET['url']))
            {

                //-------------------------------------------------------------
                // ON RECUPERE LACTION ET LE FICHIER GRACE AU PARAMETRE PASSER EN URL

                // la fonction explode nous donne acxe a tous les paramtres de maniere separée de l'url
                // la fonction filter var permet de securiser l'url
                $url = explode('/',filter_var($_GET['url'],FILTER_SANITIZE_URL));

                // le controller sera egale au premier paramètre de l'url
                // on met la premiere lettre de ce parametre recup dans url et le reste du mot en minuscule
                $controller = ucfirst(strtolower($url[0]));

                // on doir recuperer ici le nom de la class controller
                $controllerClass = "Controller".$controller;
                // ici on creer le chemin ou ce trouve le fichier
                // ce qui etais impossible sans d'abort creer son nom
                $controllerFile = "Controllers/".$controllerClass.'.php';

                // on verifie que le fichier existe
                if(file_exists($controllerFile)){

                    // on ramene le fichier
                    require_once ($controllerFile);
//                    var_dump($url);
//                    var_dump($controller);
                    // on instancie le controller pour avoir acxé a ses methodes
                    // on lui envoie l'action en parametre qui est contenue dans lurl
                    // la variable url contien tous les paramétre
                    $this->_obj_ctrl = new $controllerClass($url);

                }

                //------------------------------------------------------------
                else
                {
                    throw new Exception("PAGE CONTOLLER INTROUVABLE");
                }



            }
            else
            {
                require_once ("Controllers/ControllerAccueil.php");
                $this->_obj_ctrl = new ControllerAccueil($url);
            }

        }
        catch (Exception $e){

            $error_MESSAGE = $e->getMessage();
            require_once ("Views/viewErreur.php");
        }

    }
}