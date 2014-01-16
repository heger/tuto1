<center><h1>Historique Valeur</h1>

<div class="container">
   <a id="cleanfilters" href="#">Clear Filters</a>
<table class="table" id="demotable">
    <thead><tr><th><strong>DATE</strong></th><th><strong>QUANTITE ACHETE</strong></th><th><strong>QUANTITE VENDUE</strong></th><th><strong>QUANTITE ECHANGEE</strong></th><th><strong>COURS</strong></th></tr>
    </thead>
    <tbody>
<?php 
    foreach ($this->valeurHistorique as $key => $value){
        echo '<tr>';
        echo '<td>'.$value['date'].'</td>'; 
        echo '<td>'.$value['qteoa'].'</td>'; 
        echo '<td>'.$value['qteov'].'</td>'; 
        echo '<td>'.$value['qtetr'].'</td>'; 
        echo '<td>'.$value['cours'].'</td>'; 
        echo '</tr>';
    }     
?>
    </tbody>
</table>
   <input type="button" class="btn" value="Imprimer" onclick="imprimer();">
    

</div>
</center>