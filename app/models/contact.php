<?php


namespace MVC\models;

use MVC\core\model;

class contact extends model{
    public function GitAllcontact(){
        $data =  model::db()->rows("SELECT * FROM contact"); 
        return $data;
    }
    public function Addcontact($data){
        $data =  model::db()->insert("contact",$data); 
        return $data;
    }
}