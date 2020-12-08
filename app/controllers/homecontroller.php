<?php 

namespace MVC\controllers;

use MVC\core\controller;
use MVC\models\user;
use GUMP;
use MVC\core\Session;
use MVC\core\helpers;
use MVC\models\setting;
use MVC\models\portfolio;
use MVC\models\about;


class homecontroller extends controller{

    
    public function index(){
        $title = 'home';

        // db

        $setting = new setting();
        $data_setting = $setting->GetAllsetting();

        $portfolio = new portfolio();
        $data_portfolio = $portfolio->GitAllPortfolio();

        $about = new about();
        $data_about = $about->GitAllabout();

        // view 
        $this->view("home/index",['title'=>$title,'data_setting'=>$data_setting,'data_portfolio'=>$data_portfolio,'data_about'=>$data_about]);
    }
}