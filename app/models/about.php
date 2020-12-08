<?php


namespace MVC\models;

use MVC\core\model;

class about extends model{
    public function GitAllabout(){
        $data =  model::db()->rows("SELECT * FROM about"); 
        return $data;
    }
    public function Getabout($id){
        $data =  model::db()->row("SELECT * FROM about Where `id` = $id");
        return $data;
    }
    public function Updateabout($data,$id){
        $data =  model::db()->update("about",$data,$id);
        return $data;
    }

}