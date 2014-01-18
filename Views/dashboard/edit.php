<center><h1 style="color:#0088cc">Edit</h1>

<?php
//print_r($this->valeur);

?>


<form method="post" action="<?php echo URL; ?>dashboard/editSave/<?php echo $this->valeur['code']; ?>">
        <table>
        <tr>
            <td width="33%"><label><h4>Libelle </h4></label></td>
            <td><input type="text" name="libelle" id="libelle" value="<?php echo $this->valeur['libelle']; ?>">
                <script type="text/javascript">
	            var libelle = new LiveValidation('libelle',{ validMessage: 'valid syntax!', wait: 500 });
	            libelle.add(Validate.Presence, {failureMessage: "libelle Required"});
	          </script></td>
        </tr>
        <tr>
            <td><label><h4>Nombre de titres admis</h4></label></td>
            <td><input type="text" name="nbrTitreAdmis" id="nbrTitreAdmis" value="<?php echo $this->valeur['nbrTitreAdmis']; ?>">
            <script type="text/javascript">
	            var nbrTitreAdmis = new LiveValidation('nbrTitreAdmis',{ validMessage: 'valid syntax!', wait: 500 });
	            nbrTitreAdmis.add(Validate.Presence, {failureMessage: "nbrTitreAdmis Required"});
	          </script></td>
        </tr>
        <tr>
            <td><label><h4>CA</h4></label></td>
            <td><input type="text" name="ca" id="ca" value="<?php echo $this->valeur['ca']; ?>">
            <script type="text/javascript">
	            var ca = new LiveValidation('ca',{ validMessage: 'valid syntax!', wait: 500 });
	            ca.add(Validate.Presence, {failureMessage: "ca Required"});
	          </script></td>
        </tr>
        <tr>
            <td><label><h4>Veille</h4></label></td>
            <td><input type="text" name="veille" id="veille" value="<?php echo $this->valeur['veille']; ?>">
            <script type="text/javascript">
	            var veille= new LiveValidation('veille',{ validMessage: 'valid syntax!', wait: 500 });
	            veille.add(Validate.Presence, {failureMessage: "veille Required"});
	          </script></td>
        </tr>
        <tr>
            <td><label><h4>Estimation</h4></label></td>
            <td><input type="text" name="estimation" id="estimation" value="<?php echo $this->valeur['estimation']; ?>">
            <script type="text/javascript">
	            var estimation = new LiveValidation('estimation',{ validMessage: 'valid syntax!', wait: 500 });
	            estimation.add(Validate.Presence, {failureMessage: "estimation Required"});
	          </script></td>
        </tr>
        <tr>
            <td><label><h4>Variation</h4></label></td>
            <td><input type="text" name="variation" id="variation" value="<?php echo $this->valeur['variation']; ?>">
            <script type="text/javascript">
	            var variation = new LiveValidation('variation',{ validMessage: 'valid syntax!', wait: 500 });
	            variation.add(Validate.Presence, {failureMessage: "variation Required"});
	          </script></td>
        </tr>
        <tr>
            <td><label><h4>Capital</h4></label></td>
            <td><input type="text" name="capital" id="capital" value="<?php echo $this->valeur['capital']; ?>">
            <script type="text/javascript">
	            var capital = new LiveValidation('capital',{ validMessage: 'valid syntax!', wait: 500 });
	            capital.add(Validate.Presence, {failureMessage: "capital Required"});
	          </script></td>
        </tr>
        <tr>
            <td><label><h4>Id Groupe</h4></label></td>
            <td><input type="text" name="idGroupe" id="idGroupe" value="<?php echo $this->valeur['idGroupe']; ?>">
            <script type="text/javascript">
	            var idGroupe = new LiveValidation('idGroupe',{ validMessage: 'valid syntax!', wait: 500 });
	            idGroupe.add(Validate.Presence, {failureMessage: "idGroupe Required"});
	          </script></td>
        </tr>
        
        <tr>
            <td><label>&nbsp;</label></td>
            <td><input type="submit" style="width:220px"></td>
        </tr>
        </table>

</form>
    </center>