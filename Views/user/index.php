<center><h1 style="color:#0088cc">Users</h1>

    <div class="container">
<form method="post" action="/user/create">
    <table>
        <tr>
            <td width="33%"><label><h4>Login</h4></label></td>
            <td><input type="text" name="login" id="login"><script type="text/javascript">
	            var login = new LiveValidation('login',{ validMessage: 'valid syntax!', wait: 500 });
	            login.add(Validate.Presence, {failureMessage: "Login Required"});
	          </script></td>
        </tr>
        <tr>
            <td><label><h4>Password</h4></label></td>
            <td><input type="text" name="password" id="password"><script type="text/javascript">
	            var password = new LiveValidation('password',{ validMessage: 'valid syntax!', wait: 500 });
	            password.add(Validate.Presence, {failureMessage: "Password Required"});
	          </script></td>
        </tr>
        <tr>
        <tr>
            <td><label><h4>Nom</h4></label></td>
            <td><input type="text" name="nom" id="nom"><script type="text/javascript">
	            var nom = new LiveValidation('nom',{ validMessage: 'valid syntax!', wait: 500 });
	            nom.add(Validate.Presence, {failureMessage: "Nom Required"});
	          </script></td>
        </tr>
        <tr>
        <tr>
            <td><label><h4>Prenom</h4></label></td>
            <td><input type="text" name="prenom" id="prenom"><script type="text/javascript">
	            var prenom = new LiveValidation('prenom',{ validMessage: 'valid syntax!', wait: 500 });
	            prenom.add(Validate.Presence, {failureMessage: "Prenom Required"});
	          </script></td>
        </tr>
        <tr>
            <td><label><h4>Role</h4></label></td>
            <td><select name="role">
                <option value="default">Default</option>
                <option value="admin">Admin</option>
                </select><br />
            </td>
        </tr>
        <tr>
            <td><label>&nbsp;</label></td>
            <td><input type="submit" style="width:220px"></td>
        </tr>
        </table>

</form>
</div>
    <br />
    <div class="container">
<table class="table">
    <tr><td><strong>ID</strong></td><td><strong>LOGIN</strong></td><td><strong>NOM</strong></td><td><strong>PRENOM</strong></td><td><strong>ROLE</strong></td></tr>
<?php 
foreach ($this->userList as $key => $value)
    {
        echo '<tr>';
        echo '<td>'.$value['id'].'</td>'; 
        echo '<td>'.$value['login'].'</td>'; 
        echo '<td>'.$value['nom'].'</td>'; 
        echo '<td>'.$value['prenom'].'</td>'; 
        echo '<td>'.$value['role'].'</td>'; 
        echo '<td> <a href="'.URL.'user/delete/'.$value['id'].'">Delete</a>  <a href="'.URL.'user/edit/'.$value['id'].'">Edit</a> </td>'; 
        echo '</tr>';
    }
//print_r($this->userList);
?>
</table>
</div>
</center>
