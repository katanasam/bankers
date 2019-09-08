<?php
/**
 * Created by PhpStorm.
 * User: cheik
 * Date: 08/09/2019
 * Time: 00:00
 */

class ClientManager extends Model
{


    public function getAllCompte()
    {
        $this->getBdd();
            //table de base de données         //objet de type client
        $this->getALL('clients','Client');
    }
}