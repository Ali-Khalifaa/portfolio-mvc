<?php

namespace MVC\controllers;

use MVC\core\controller;
use MVC\core\Session;
use MVC\core\helpers;
use MVC\models\contact;
class admincontactcontroller extends controller{

    public $user_data;
    public $contact;

    public function __construct()
    {
        Session::Start();
        $this->user_data = Session::Get('user');
        
        if(empty($this->user_data)){
            echo 'class not access';
            die;
        }
        $this->contact = new contact();
    }
    public function index(){

        $data = $this->contact->GitAllcontact();
        
        $this->view('back/contact',['title' => 'admin','data' => $data]);

    }
    public function add(){
        $this->view("home/index",['titel'=>'admin']);
    }
    public function postadd()
    {      
        
        // database
        $data=['name' => $_POST['name'],'email' => $_POST['email'],'phone' => $_POST['phone'],'message' => $_POST['message']];
        
        $data = $this->contact->Addcontact($data);
        if ($data) {
            helpers::redirect('home/index');
        }
    }
   
}