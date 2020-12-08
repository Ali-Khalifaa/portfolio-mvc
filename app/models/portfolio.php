<?php

namespace MVC\models;

use MVC\core\model;

class portfolio extends model{


    public function GitAllPortfolio(){
        $data =  model::db()->rows("SELECT * FROM portfolio"); 
        return $data;
    }
    public function Getportfolio($id){
        $data =  model::db()->row("SELECT * FROM portfolio Where `id` = $id");
        return $data;
    }
    public function Updateportfolio($data,$id){
        $data =  model::db()->update("portfolio",$data,$id);
        return $data;
    }

}
