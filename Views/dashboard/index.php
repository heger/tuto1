<center>

<h1>Dashboard</h1>
<br />



<!--
<form method="post" action="<?php //echo URL; ?>user/create">
        <table>
        <tr>
            <td><label>Login</label></td>
            <td><input type="text" name="login"></td>
        </tr>
        <tr>
            <td><label>Password</label></td>
            <td><input type="text" name="password"></td>
        </tr>
        <tr>
            <td><label>Role</label></td>
            <td><select name="role">
                <option value="default">Default</option>
                <option value="admin">Admin</option>
                </select><br />
            </td>
        </tr>
        <tr>
            <td><label>&nbsp;</label></td>
            <td><input type="submit"></td>
        </tr>
        </table>

</form>

<hr />-->

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
    <a id="cleanfilters" href="#">Clear Filters</a>
    <table class="table" id="demotable">
    <thead><tr><th><strong>CODE</strong></th><th><strong>LIBELLE</strong></th><th><strong>NBR TITRES ADMIS</strong></th><th><strong>CA</strong></th><th><strong>VEILLE</strong></th><th><strong>ESTIMATION</strong></th><th><strong>VARIATION</strong></th><th><strong>CAPITAL</strong></th><th><strong>ID GROUPE</strong></th></tr>
    </thead>
    <tbody>
        <?php 
        $cpt = 0;
foreach ($this->valeurList as $key => $value)
    {
        for ($r = 0; $r <= 71; $r++)
        {
            if ($dataNom[$r] == $value['libelle'] )
            {
                $var = $dataVar[$r];
                $var1 = $dataveille[$r];
            }     
        }
        $cpt = $cpt + $value['capital'];
        echo '<tr>';
        echo '<td>'.$value['code'].'</td>'; 
        echo '<td><a href="'.URL.'dashboard/valeurDetails/'.$value['code'].'">'.$value['libelle'].'</a></td>'; 
        echo '<td>'.$value['nbrTitreAdmis'].'</td>'; 
        echo '<td>'.$value['ca'].'</td>'; 
        echo '<td>'.$var1.'</td>'; 
        echo '<td>'.$value['estimation'].'</td>'; 
        echo '<td>'.$var.' </td>'; 
        echo '<td>'.$value['capital'].'</td>'; 
        echo '<td>'.$value['idGroupe'].'</td>'; 
        echo '<td> <a href="'.URL.'dashboard/delete/'.$value['code'].'">Delete</a>            <a href="'.URL.'dashboard/edit/'.$value['code'].'">Edit</a> </td>'; 
        echo '</tr>';
    }
//print_r($this->userList);
?>
</tbody>        
</table>
   <!-- <br> <strong>Trésorie : </strong><?php //echo $this->tresorie['tresorie']; ?>
    <br> <strong>Trésorie Latente : </strong><?php //echo $this->tresorie['tresorielatente']; ?>-->
    <br> <strong>Estimation du compte : </strong><?php echo $cpt.' DT'; ?>
</div>
<br>
<input type="button" class="btn" value="Imprimer" onclick="imprimer();">

<!--<br /> 
<form id="randomInsert" action="<?php //echo URL;?>dashboard/xhrInsert" method="post">
   
    <input type="text" name="text" />
    <input type="submit" />
   
</form>

<br />

<div id="ListInserts">
    
</div>-->
</center>