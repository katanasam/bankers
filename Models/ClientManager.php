<?php
/**
 * Created by PhpStorm.
 * User: cheik
 * Date: 08/09/2019
 * Time: 00:00
 */

class ClientManager extends Model
{


    public function getAllClient()
    {
        $this->getBdd();
            //table de base de données         //objet de type client
        // les var demp sont la pour controleé que les donnée arrive jusque ici
        //var_dump($this->getALL('client','Client'));
        return $this->getALL('client','Client');
    }

    public function getOneClient($id_para)
    {
        // connecxion bdd
        $this->getBdd();

        // la requette qui est dans le modèle
        // cette fonction retourne un tableau

        return $this->getOne('client',$id_para);

    }
}