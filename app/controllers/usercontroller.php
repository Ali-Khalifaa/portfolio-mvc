<?php


namespace MVC\controllers;

use MVC\core\controller;
use MVC\models\user;
use GUMP;
use MVC\core\Session;
use MVC\core\helpers;

class usercontroller extends controller{
    public function __construct()
    {
        Session::start(); 
    }
    

    public function login(){
        $this->view('back/login',['title'=>'login']);
    }  

    public function postlogin(){
        $v = GUMP::is_valid($_POST,[
            'email'=>'required'
        ]);

        if($v == 1){
            $user = new user();
            $data =  $user->GetUser($_POST['email'],$_POST['password']);
           
            Session::Set('user',$data);
            helpers::redirect('adminpost/index');
        }
    }
    public function register(){
        $this->view('back/register',['title'=>'register']);
    }
    public function postregister(){
        if (empty($_POST['name'] && $_POST['email'] && $_POST['password'])) {

            header("LOCATION:register");
        }else{

            $user = new user();
            $data = $user->InsertUser($_POST['name'],$_POST['email'],$_POST['password']);
            header("LOCATION:login");
        }
        
    }
    public function logout(){
        session::stop();
        helpers::redirect('user/login');
        
    }

}