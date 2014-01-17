<?php 
// on se connecte à MySQL 
// $db = mysql_connect('localhost', 'root', 'root'); 
$db = mysql_connect('us-cdbr-azure-west-b.cleardb.com', 'b119525fa9eb83', '3bfcb8af'); 

// on sélectionne la base 
mysql_select_db('appli1AQ9akV3UeM',$db); 

// on crée la requête SQL 
$sql = 'SELECT id,text FROM data'; 

// on envoie la requête 
$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error()); 

// on fait une boucle qui va faire un tour pour chaque enregistrement 
while($data = mysql_fetch_assoc($req)) 
    { 
    // on affiche les informations de l'enregistrement en cours 
    echo '<b>'.$data['id'].' '.$data['text'].'</b><br>';
    } 

// on ferme la connexion à mysql 
mysql_close(); 
?> 
