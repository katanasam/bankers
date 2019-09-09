<?php
/**
 * Created by PhpStorm.
 * User: cheik
 * Date: 08/09/2019
 * Time: 01:40
 */

class Client
{
    private $id_client;
    private $nom;
    private $prenom;
    private $economie;
    private $numero_client;


    private $type;
    private $date;


    // CONSTRUCTEUR
    /*
     * @param array data // un tableau de donnée
     */
    public function  __construct(array $tab_donnee_para)
    {
        // la date sera remplie de maniere automatique
        $date = new DateTime();
        $date->format('Y-m-d\TH:i:s.u');

        // affectation de la date
        $this->date = $date;

        if ($tab_donnee_para['id_client'] != null)
        {
            $this->setIdClient($tab_donnee_para['id_client']);
        }

        // on met une regle pour le numero client
        if ($tab_donnee_para['numero_client'] != null)
        {
            $this->setNumeroClient($tab_donnee_para['numero_client']);
        }
        else
        {
            $ramdom_number = rand(1,344847479);
            $this->setNumeroClient($ramdom_number);
        }


        // on utilise la fonction hydrate elle augmentent la securité des donnees recus
        $this->Hydrate($tab_donnee_para);
    }

    // HYDRATATION
    /**
     * @param array ,tableau de donnée
     */
    public function Hydrate(array $tableau_data_para)
    {
        // hydrate ne peu fonctionnée que si les atributs on les meme
        // nom que les chants de table en base de données
        foreach ($tableau_data_para as $key => $value)
        {
            // appel de la methode camelCase
            $method = "set".ucfirst($key);

            //verification de sont existance dans la class
            if (method_exists($this,$method))
            {
                $this->$method($value);
            }

        }
    }

    // ------------------------------------------------------
    /**
     * @return mixed
     */
    public function getIdClient()
    {
        return $this->id_client;
    }

    /**
     * @param mixed $id_client
     */
    public function setIdClient($id_client)
    {
        $this->id_client = $id_client;
    }
    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getEconomie()
    {
        return $this->economie;
    }

    /**
     * @param mixed $economie
     */
    public function setEconomie($economie)
    {
        $this->economie = $economie;
    }
    /**
     * @param mixed $numero_client
     */
    public function setNumeroClient($numero_client)
    {
        $this->numero_client = $numero_client;
    }

    /**
     * @return int
     */
    public function getNumeroClient()
    {
        return $this->numero_client;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    //------------------------------------------------------------------


}