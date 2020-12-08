<?php

namespace MVC\models;

use MVC\core\model;

class setting extends model{

    public function GetAllsetting(){
        $data =  model::db()->rows("SELECT * FROM setting"); 
        return $data;
    }
    public function Getsetting($id){
        $data =  model::db()->row("SELECT * FROM setting Where `id` = $id");
        return $data;
    }
    public function Updatesetting($data,$id){
        $data =  model::db()->update("setting",$data,$id);
        return $data;
    }
}