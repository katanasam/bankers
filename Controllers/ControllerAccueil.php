<?php
/**
 * Created by PhpStorm.
 * User: cheik
 * Date: 07/09/2019
 * Time: 23:59
 */

class ControllerAccueil
{
    private $obj_clientManger;
    private $obj_view;


    /**
     * ControllerAccueil constructor.
     * @param $url
     * l'url nous vient de la page  ROUTER
     * chaque controller recevra une url en paramètre de construction
     */
    public function __construct($url)
    {
        // on compte le nombre de paramètre dans url, si il est superieure a 1
        // alors sa veut dire qui y a une erreur
        // rapeler vous nous avon definis dans le ROUTER
        // que nous ne voulion que le premier paramètre de lurl
        if (!isset($url))
        {
            throw new Exception("page introuvable !! ZONE: CONTROLLER ACCUEIL");

        }
        else
        {
            // on fait appel a la fonction url <met_url>
            // j'ai changer le nom car porte a confusion avec le para recup
            // que nous alons  nous meme creer
            $this->met_url();
        }
    }

    public function met_url()
    {
        //creation d'une instance pour recuperer les infos en base de bonnée
        $this->obj_clientManger = new ClientManager();
        // utilisation de la fonction de recuperation

        var_dump($clients = $this->obj_clientManger->getAllClient());

        // on appele la vue dans la quelle on veut faire sortir les donnees
        require_once ('Views/viewAccueil.php');
    }
}