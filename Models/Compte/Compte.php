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



    public function __construct(Client $client_para)
    {

        $this->OpenCompte($client_para);

        // on va également créer une instance de historique pour le compte
        // car ils nous faut un suivi du compte
    }

    public function OpenCompte(Client $client_para)
    {
        // des la création de l'instance
        $this->setSolde($client_para->getEconomie());
        $this->setTitulaireCompte($client_para->getIdClient());
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