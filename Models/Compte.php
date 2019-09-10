<?php
/**
 * Created by PhpStorm.
 * User: cheik
 * Date: 08/09/2019
 * Time: 01:42
 */

class Compte
{


    private $id_compte;
    private $solde;
    private $titulaire_compte;

    private $obj_comptemanager;

    public function __construct( $id_para,$solde_para)
    {

        // des la création de l'instance
        $this->setSolde($solde_para);
        $this->setTitulaireCompte($id_para);

        // on va également créer une instance de historique pour le compte
        // car ils nous faut un suivi du compte
    }

    public function returnCompte()
    {

    }

    public function ConsulteCompte(Client $client_para)
    {
    }






    /**
     * @return mixed
     */
    public function getIdCompte()
    {
        return $this->id_compte;
    }

    /**
     * @param mixed $id_compte
     */
    public function setIdCompte($id_compte)
    {
        $this->id_compte = $id_compte;
    }

    /**
     * @return mixed
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * @param mixed $solde
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;
    }

    /**
     * @return mixed
     */
    public function getTitulaireCompte()
    {
        return $this->titulaire_compte;
    }

    /**
     * @param mixed $titulaire_compte
     */
    public function setTitulaireCompte($titulaire_compte)
    {
        $this->titulaire_compte = $titulaire_compte;
    }



}