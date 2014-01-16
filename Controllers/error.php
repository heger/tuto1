<?php
class Error extends Controller{

    function __construct() {
        parent::__construct();
        
        
         
    }
    function index(){
            $this->view->msg='this page dos not exist';
            $this->view->render('error/index');
        }

    
}

