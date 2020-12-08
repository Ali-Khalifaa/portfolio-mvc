<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\core\Session;
use MVC\core\helpers;
use MVC\models\setting;

class adminsettingcontroller extends controller{
    public $user_data;
    public $setting;
    public function __construct()
    {
        Session::Start();
        $this->user_data = Session::Get('user');
        
        if(empty($this->user_data)){
            echo 'class not access';
            die;
        }
        $this->setting = new setting();
    }
    public function index(){
        $data = $this->setting->GetAllsetting();
        $this->view('back/setting',['title' => 'admin','data' => $data]);
    }
    public function update($id){
        $data = $this->setting->Getsetting($id);
        $this->view('back/updatesetting',['data' => $data]);
    }
    public function postupdate(){

        if(!empty($_FILES['img']['name'])){
            $img = $_FILES['img'];
            move_uploaded_file($img['tmp_name'],'img/'.$img['name']);            
            $data = [ 'name'=> $_POST['name'] , 'about' => $_POST['about'] ,'address' => $_POST['address'],'facebook' => $_POST['facebook'],'github' => $_POST['github'],'linkedin' => $_POST['linkedin'],'netlife' => $_POST['netlife'],'gmail' => $_POST['gmail'],'phone' => $_POST['phone'],'cv' => $_POST['cv'], 'user_id' => $this->user_data->id , 'img' => $img['name'] ];
            

        }else{
            $data = [ 'name'=> $_POST['name'] , 'about' => $_POST['about'] ,'address' => $_POST['address'],'facebook' => $_POST['facebook'],'github' => $_POST['github'],'linkedin' => $_POST['linkedin'],'netlife' => $_POST['netlife'],'gmail' => $_POST['gmail'],'phone' => $_POST['phone'],'cv' => $_POST['cv'],'user_id' => $this->user_data->id ];
            helpers::redirect('adminsetting/index');
        }
        
        // database
        $id = ['id'=>$_POST['id']];    
        
        $data = $this->setting->Updatesetting($data,$id);
        
        if($data){
            
            helpers::redirect('adminsetting/index');
        }
    }
}