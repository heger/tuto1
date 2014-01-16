<?php
class Dashboard_Model extends model {

    function __construct() {
        parent::__construct();
    }

    
     public function valeurList($id)
     {
        $sth = $this->db->prepare('SELECT * FROM valeur WHERE iduser = :id');
        $sth->execute(array(
            ':id' => $id
        ));
        return $sth->fetchAll();
     }
     
     public function valeurSingleList($code)
     {
        $sth = $this->db->prepare('SELECT code, libelle, nbrTitreAdmis, ca, veille, estimation, variation , capital, idGroupe FROM valeur WHERE code = :code');
        $sth->execute(array(
            ':code' => $code
        ));
        return $sth->fetch();
     }

     



//     public function create($data)
//    {
//         $sth = $this->db->prepare('INSERT INTO users (`login`, `password`, `role`) VALUES (:login, :password, :role)');
//         $sth->execute(array(
//         ':login' => $data['login'],
//         ':password' => $data['password'],
//         ':role' => $data['role']
//                ));
//   }
     public function editSave($data)
    {
         $sth = $this->db->prepare('UPDATE valeur SET `libelle` = :libelle, `nbrTitreAdmis` = :nbrTitreAdmis, `ca` = :ca, `veille` = :veille, `estimation` = :estimation, `variation` = :variation, `capital` = :capital, `idGroupe` = :idGroupe WHERE code = :code');
         $sth->execute(array(
         ':code' => $data['code'],    
         ':libelle' => $data['libelle'],
         ':nbrTitreAdmis' => $data['nbrTitreAdmis'],
         ':ca' => $data['ca'],
         ':veille' => $data['veille'],
         ':estimation' => $data['estimation'],
         ':variation' => $data['variation'],
         ':capital' => $data['capital'],
         ':idGroupe' => $data['idGroupe']
                ));
   }
             
     public function delete($code)
{
         $sth = $this->db->prepare('DELETE FROM valeur WHERE code = :code');
         $sth->execute(array(
         ':code' => $code
         ));
}

public function valeurDetails($code)
            {
                 $sth = $this->db->prepare('SELECT code, libelle, nbrTitreAdmis, ca, veille, estimation, variation, capital, idGroupe FROM valeur WHERE code = :code');
        $sth->execute(array(
            ':code' => $code
        ));
        return $sth->fetch();
            }
            
             public function valeurHistorique($code)
    {
        $sth = $this->db->prepare('SELECT code, date, qteoa, qteov, qtetr, transaction.cours FROM valeur, transaction, ordreachat, ordrevente WHERE (valeur.code = :code) AND (ordreachat.idValeur = valeur.code) AND (ordrevente.idValeur = valeur.code) AND (transaction.oa = ordreachat.idOrdre) AND (transaction.ov = ordrevente.idOrdre)');
        $sth->execute(array(
            ':code' => $code
        ));
        return $sth->fetchAll();
    }
    
    public function tresorie()
            {
       $sth = $this->db->prepare('SELECT tresorie, tresorielatente FROM tresorie');
       $sth->execute();
       return $sth->fetch();
            }


    
    
//    function xhrInsert()
//    {
//        $text = $_POST['text'];
//        $sth = $this->db->prepare('INSERT INTO data (text) VALUES (:text)');
//        $sth->execute(array(':text' => $text ));
//        $data = array('text' => $text , 'id' => $this->db->lastInsertId());
//        echo json_encode($data);
//         
//    }
//    
//    function xhrGetListings()
//    {
//         $sth = $this->db->prepare('SELECT  * FROM data');
//         $sth->setFetchMode(PDO::FETCH_ASSOC);
//         $sth->execute();
//         $data = $sth->fetchAll();
//         echo json_encode($data);
//         
//    }
//    
//    function xhrDeleteListing()
//    {
//        $id = $_POST['id'];
//        $sth = $this->db->prepare('DELETE FROM data WHERE id="'.$id.'"');
//        $sth->execute();
//    }
    
    }

