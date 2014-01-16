<?php

class Login_Model extends model {

    public function __construct() {
        parent::__construct();
    }
    
    public function run()
     {
        $sth = $this->db->prepare("SELECT id, role FROM users WHERE login= :login AND password= MD5(:password) ");
        $sth->execute(array(
            ':login' => $_POST['login'],
            ':password' => $_POST['password']
        ));
        
        $data = $sth->fetch();

        $count = $sth->rowCount();
        if ($count > 0){
            //login
            Session::init();
            Session::set('id', $data['id']);
            Session::set('role', $data['role']);
            Session::set('loggedIn', true);
            header('location: ../dashboard');
        }else{
            //show an error
            header('location: ../login');
        }
    }

}
