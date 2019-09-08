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
        var_dump($this->getALL('client','Client'));
        return $this->getALL('client','Client');
    }
}