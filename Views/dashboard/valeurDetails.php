<center><h1>VALEUR DETAILS</h1></center>

<?php
error_reporting(E_ALL);
require_once 'libs/simple_html_dom.php';
//$html = new simple_html_dom();
$html = file_get_html(URL.'Views/dashboard/marche.php');
$n=0;
$dataVar = array();
foreach($html->find('table#tabQuotes tr') as $row) {
    $val = $row->children(8)->innertext;
    $dataVar[$n] = $val;
  
$n=$n+1;
}
//print_r($dataVar);

$i=0;
$dataNom = array();
foreach($html->find('table#tabQuotes tr') as $row) {
    $val = $row->children(0)->innertext;
    $dataNom[$i] = $val;
  
$i=$i+1;
}

$j=0;
$dataveille = array();
foreach($html->find('table#tabQuotes tr ') as $row2) {

  $val2 = $row2->children(7)->innertext;
    $dataveille[$j]=$val2;
    
$j=$j+1;
}
//print_r($dataNom);
?>

<div class="container">
<table class="table">
    <thead><tr><th><strong>CODE</strong></th><th><strong>LIBELLE</strong></th><th><strong>NBR TITRES ADMIS</strong></th><th><strong>CA</strong></th><th><strong>VEILLE</strong></th><th><strong>ESTIMATION</strong></th><th><strong>VARIATION</strong></th><th><strong>CAPITAL</strong></th><th><strong>ID GROUPE</strong></th></tr>
    </thead>
    <tbody>
<?php 
//print_r($this->valeurDetails);
         for ($r = 0; $r <= 71; $r++)
        {    
            if ($dataNom[$r] == $this->valeurDetails['libelle'] )
            {
                $var = $dataVar[$r];
                $var1 = $dataveille[$r];
            }     
        }

        echo '<tr>';
        echo '<td>'.$this->valeurDetails['code'].'</td>'; 
        echo '<td><a href="'.URL.'dashboard/valeurHistorique/'.$this->valeurDetails['code'].'">'.$this->valeurDetails['libelle'].'</a></td>'; 
        echo '<td>'.$this->valeurDetails['nbrTitreAdmis'].'</td>'; 
        echo '<td>'.$this->valeurDetails['ca'].'</td>'; 
        echo '<td>'.$var1.'</td>'; 
        echo '<td>'.$this->valeurDetails['estimation'].'</td>'; 
        echo '<td>'.$var.' </td>'; 
        echo '<td>'.$this->valeurDetails['capital'].'</td>'; 
        echo '<td>'.$this->valeurDetails['idGroupe'].'</td>'; 
        echo '<td> <a href="'.URL.'dashboard/delete/'.$this->valeurDetails['code'].'">Delete</a>            <a href="'.URL.'dashboard/edit/'.$this->valeurDetails['code'].'">Edit</a> </td>'; 
        echo '</tr>';
        
?>
    </tbody>
</table>
    

</div>

