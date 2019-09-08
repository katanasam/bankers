<?php
/**
 * Created by PhpStorm.
 * User: cheik
 * Date: 08/09/2019
 * Time: 00:58
 */

abstract  class Model
{
   // connexion a la base de donnée partager par tous les heritier
    private static $_bdd;

    const PASSWORD = "";
    const LOGIN = "root";

    /**
     * creation d'une instance PDO pour la connexion
     */
    private static function setBdd()
    {
        //$dsn ="mysql:host=localhost;dbname=bankers;charset=utf8";

        self::$_bdd = new PDO("mysql:host=localhost;dbname=bankers;charset=utf8","root","");
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }

    /**
     * recuper la connexion a la bdd
     */
    protected function getBdd()
    {
        // si il
        if (self::$_bdd == null) {
            $this->setBdd();
        }


        return self::$_bdd;
    }

    /**
     * @param $table_para ,et une tablle de la base donnée
     * @param $obj_para ,elle prend en para l'objet a recup de la base de donnée
     */
    protected function getALL($table_para,$obj_para)
    {
        // declaration d'un tableau vide
        $tab_var= [];

        // on recuper ici tous de la table passer en paramètre
        //creation de requete
        $requete = $this->getBdd()->prepare('SELECT * FROM '.$table_para.' ORDER BY id_client desc');
        $requete->execute();

        // recuperration des donnee de la base
        // QUE LON stock dans une variable $data_recup
        // puis avec la boucle while on va la vidé  lol

       //var_dump($data = $requete->fetch(PDO::FETCH_ASSOC));
        while($data = $requete->fetch(PDO::FETCH_ASSOC))
        {
            // on range dans le tableau les donnees sour forme d'objet
            // de type l'objet passer en para
            $tab_var[] = new $obj_para($data);
        }

        return $tab_var;
        $requete->closeCursor();

    }

}