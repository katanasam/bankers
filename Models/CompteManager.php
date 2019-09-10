<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10/09/2019
 * Time: 09:02
 */

class CompteManager extends Model
{

    public function createCompte(Compte $compte_para)
    {
        // connexion a la bdd
        $this->getBdd();

        // insertion donnée

        $requete = $this->getBdd()->prepare('INSERT INTO compte VALUE(:id_compte,:solde,:titulaire_compte)');

        $requete->bindValue(':id_compte',$compte_para->getIdCompte());
        $requete->bindValue(':solde',$compte_para->getSolde());
        $requete->bindValue(':titulaire_compte',$compte_para->getTitulaireCompte());
        $requete->execute();

    }

    public function selectCompte($id_para)
    {
        $requete = $this->getBdd()->query('SELECT * FROM compte WHERE titulaire_compte ='.$id_para);
        $data_recup = $requete->fetchAll();

        // je retourne un valeur compte

       return $data_recup;
    }





}