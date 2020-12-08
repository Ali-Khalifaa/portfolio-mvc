<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\core\Session;
use MVC\core\helpers;
use MVC\models\about;
class adminaboutcontroller extends controller{

    public $user_data;
    public $about;

    public function __construct()
    {
        Session::Start();
        $this->user_data = Session::Get('user');
        
        if(empty($this->user_data)){
            echo 'class not access';
            die;
        }
        $this->about = new about();
    }
    public function index(){

        $data = $this->about->GitAllabout();
        
        $this->view('back/about',['title' => 'admin','data' => $data]);

    }
    public function update($id){
        $data = $this->about->Getabout($id);
        $this->view('back/updateabout',['data' => $data]);
    }
    public function postupdate(){

        if(!empty($_POST['description_one']['description_two'])){         
            $data = [ 'description_one'=> $_POST['description_one'] , 'description_two' => $_POST['description_two'] , 'user_id' => $this->user_data->id ];
            

        }else{
            $data = [ 'description_one'=> $_POST['description_one'] , 'description_two' => $_POST['description_two'] , 'user_id' => $this->user_data->id ];
            helpers::redirect('adminabout/index');
        }
        
        // database
        $id = ['id'=>$_POST['id']];    
        
        $data = $this->about->Updateabout($data,$id);
        
        if($data){
            
            helpers::redirect('adminabout/index');
        }
    }
}