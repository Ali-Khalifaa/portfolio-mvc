<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\core\Session;
use MVC\core\helpers;
use MVC\models\portfolio;


class adminportfoliocontroller extends controller{
    public $user_data;
    public $portfolio;

    public function __construct()
    {
        Session::Start();
        $this->user_data = Session::Get('user');
        
        if(empty($this->user_data)){
            echo 'class not access';
            die;
        }
        $this->portfolio = new portfolio();
    }
    public function index(){

        $data = $this->portfolio->GitAllPortfolio();
        
        $this->view('back/portfolio',['title' => 'admin','data' => $data]);

    }
    public function update($id){
        $data = $this->portfolio->Getportfolio($id);
        $this->view('back/updateportfolio',['data' => $data]);
    }
    public function postupdate(){

        if(!empty($_FILES['img']['name'])){
            $img = $_FILES['img'];
            move_uploaded_file($img['tmp_name'],'img/'.$img['name']);            
            $data = [ 'title'=> $_POST['title'] , 'description' => $_POST['description'] , 'user_id' => $this->user_data->id , 'img' => $img['name'] ];
            

        }else{
            $data = [ 'title'=> $_POST['title'] , 'description' => $_POST['description'] , 'user_id' => $this->user_data->id ];
            helpers::redirect('adminportfolio/index');
        }
        
        // database
        $id = ['id'=>$_POST['id']];    
        
        $data = $this->portfolio->Updateportfolio($data,$id);
        
        if($data){
            
            helpers::redirect('adminportfolio/index');
        }
    }
  
}