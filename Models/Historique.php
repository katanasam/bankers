<?php
/**
 * Created by PhpStorm.
 * User: cheik
 * Date: 08/09/2019
 * Time: 01:41
 */

class Historique
{

    private $id_historique;
    private $id_compte_histo;
    private $ancien_solde;
    private $nouveau_solde;
    private $montant;

    private $obj_comptemanager;

    public function __construct()
    {
        // je veut avoir axee a la bdd
        $this->obj_comptemanager = new CompteManager();
    }

    //--------------------------------------------------------------------------------------

    public function consulterHistorique($id_para)
    {
        var_dump($this->obj_comptemanager->getBdd());
        // la requette et universel car el obj_para et optionnel
        // elle recuperent un element dans une table grace a un id
        $requete = $this->obj_comptemanager->getBdd()->prepare('SELECT * FROM historique WHERE id_compet_histo='.$id_para);
        $requete->execute();

        $histo_recup = $requete->fetch(PDO::FETCH_ASSOC);

        // var_dump($data_recup);
        // renvoie un tableau de valeurs
        return $histo_recup;
        $requete->closeCursor();

    }






    //--------------------------------------------------------------------------------------

    /**
     * @return mixed
     */
    public function getIdHistorique()
    {
        return $this->id_historique;
    }

    /**
     * @param mixed $id_historique
     */
    public function setIdHistorique($id_historique)
    {
        $this->id_historique = $id_historique;
    }

    /**
     * @return mixed
     */
    public function getIdCompteHisto()
    {
        return $this->id_compte_histo;
    }

    /**
     * @param mixed $id_compte_histo
     */
    public function setIdCompteHisto($id_compte_histo)
    {
        $this->id_compte_histo = $id_compte_histo;
    }

    /**
     * @return mixed
     */
    public function getAncienSolde()
    {
        return $this->ancien_solde;
    }

    /**
     * @param mixed $ancien_solde
     */
    public function setAncienSolde($ancien_solde)
    {
        $this->ancien_solde = $ancien_solde;
    }

    /**
     * @return mixed
     */
    public function getNouveauSolde()
    {
        return $this->nouveau_solde;
    }

    /**
     * @param mixed $nouveau_solde
     */
    public function setNouveauSolde($nouveau_solde)
    {
        $this->nouveau_solde = $nouveau_solde;
    }

    /**
     * @return mixed
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * @param mixed $montant
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }


}