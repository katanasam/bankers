<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 09/09/2019
 * Time: 09:51
 */

class ControllerBanke
{
    private $obj_clientManager;
    private $obj_compteManager;
    private $obj_view;

    /**
     * @return mixed
     */
    public function __construct($url)
    {
        // quesque je veux ?
        // je veut les information d'un client
        $this->obj_clientManager = new ClientManager();
        // je veut le compte d'un client
        $this->obj_compteManager = new CompteManager();

        // on compte le nombre de paramètre dans url, si il est superieure a 1
        // alors sa veut dire qui y a une erreur
        // rapeler vous nous avon definis dans le ROUTER
        // que nous ne voulion que le premier paramètre de lurl
        if (!isset($url))
        {
            throw new Exception("page introuvable !! ZONE: CONTROLLER BANKERS");
        }
        else
        {
            // en fonction de l'action une methode portant le meme non sera appeler

            if(isset($_GET['action']))
            {
                // elle contient le nom de l'action a effectuer
                $methode_action = $_GET['action'];
                $this->$methode_action((int)$_GET['id']);
            }
        }

    }

    public function showClient($id_para)
    {

        // recupere des données
        // que jutilise pour creer instancier un objet de type un client
         //var_dump($this->obj_clientManger->getOneClient($id_para));
        $client = new Client( $this->obj_clientManager->getOneClient($id_para));

        // je recupere le compte client grace a sont id
        var_dump($compte_client = $this->obj_compteManager->selectCompte($client->getIdClient()));

        // si il est nul sa veut dire que le compte nexiste pas
       if ($compte_client == null)
       {
           // alors je luis creer un compte
           // condition pour le create compte
           $compte = new Compte($client->getIdClient(),$client->getEconomie());
           $this->obj_compteManager->createCompte($compte);
           $compte_client = $this->obj_compteManager->selectCompte($client->getIdClient());
       }


        require_once ('Views/viewClient.php');
    }

}