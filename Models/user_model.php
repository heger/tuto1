<?php

class User_Model extends model {

    public function __construct() {
        parent::__construct();
    }
    
    public function userList()
     {
        $sth = $this->db->prepare('SELECT id, login, nom, prenom, role FROM users');
        $sth->execute();
        return $sth->fetchAll();
     }
     
     public function userSingleList($id)
     {
        $sth = $this->db->prepare('SELECT id, login, nom, prenom, role FROM users WHERE id = :id');
        $sth->execute(array(
            ':id' => $id
        ));
        return $sth->fetch();
     }

     



     public function create($data)
    {
         $sth = $this->db->prepare('INSERT INTO users (`login`, `password`, `nom`, `prenom`, `role`) VALUES (:login, :password, :nom, :prenom, :role)');
         $sth->execute(array(
         ':login' => $data['login'],
         ':password' => $data['password'],
         ':nom' => $data['nom'],
         ':prenom' => $data['prenom'],
         ':role' => $data['role']
                ));
   }
     public function editSave($data)
    {
         $sth = $this->db->prepare('UPDATE users SET `login` = :login, `password` = md5(:password), `nom` = :nom, `prenom` = :prenom , `role` = :role WHERE id = :id');
         $sth->execute(array(
         ':id' => $data['id'],    
         ':login' => $data['login'],
         ':password' => md5($data['password']),
         ':nom' => $data['nom'],
         ':prenom' => $data['prenom'],
         ':role' => $data['role']
                ));
   }
             
     public function delete($id)
{
         $sth = $this->db->prepare('DELETE FROM users WHERE id = :id');
         $sth->execute(array(
         ':id' => $id
         ));
}


}
