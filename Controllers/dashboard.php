<?php
class Dashboard extends Controller{

    function __construct() {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if ($logged == false){
            Session::destroy();
            header('location: ../login');
            exit;
        }
        
        //$this->view->js= array('dashboard/js/default.js');
        $this->view->js= array('dashboard/js/filter.js');
    }
    
        public function index()
{
     $this->view->valeurList = $this->model->valeurList(Session::get('id'));
     $this->view->render("dashboard/index");
}
    
//public function create()
//{
//     $data = array();
//     $data['login'] = $_POST['login'];
//     $data['password'] = md5($_POST['password']);
//     $data['role'] = $_POST['role'];
//                
//     //@TODO do your error checking!
//             
//     $this->model->create($data); 
//     header('location: '. URL .'user');
//}
public function edit($code)
{
     $this->view->valeur = $this->model->valeurSingleList($code);
     $this->view->render('dashboard/edit');
}
            
public function editSave($code)
{
     $data = array();
     $data['code'] = $code;
     $data['libelle'] = $_POST['libelle'];
     $data['nbrTitreAdmis'] = $_POST['nbrTitreAdmis'];
     $data['ca'] = $_POST['ca'];
     $data['veille'] = $_POST['veille'];
     $data['estimation'] = $_POST['estimation'];
     $data['variation'] = $_POST['variation'];
     $data['capital'] = $_POST['capital'];
     $data['idGroupe'] = $_POST['idGroupe'];
                
     //@TODO do your error checking!
                
     $this->model->editSave($data); 
     header('location: '. URL .'dashboard');
}

public function delete($code)
{
     $this->model->delete($code);
     header('location: '. URL .'dashboard');
}


     
    function logout(){
        Session::destroy();
        header('location:' . URL . 'login');
        exit;
    }
    
    public function valeurDetails($code)
            {
        $this->view->valeurDetails = $this->model->valeurDetails($code);
        $this->view->render('dashboard/valeurDetails');
            }
            
    public function valeurHistorique($code)
    {
        $this->view->valeurHistorique = $this->model->valeurHistorique($code);
        $this->view->render('dashboard/valeurHistorique');
    }
    
    public function tresorie()
            {
        $this->view->tresorie = $this->model->tresorie();
        $this->view->render('dashboard/index');
            }




//    function xhrInsert()
//    {
//        $this->model->xhrInsert();
//    }
//    
//    function  xhrGetListings()
//    {
//     $this->model->xhrGetListings(); 
//    }
//    
//    function xhrDeleteListing()
//    {
//        $this->model->xhrDeleteListing();
//    }
    
    }


