<center><h1>User: Edit</h1>

<?php
//print_r($this->user);

?>


<form method="post" action="<?php echo URL; ?>user/editSave/<?php echo $this->user['id']; ?>">
        <table>
        <tr>
            <td><label>Login</label></td>
            <td><input type="text" name="login" id="login" value="<?php echo $this->user['login']; ?>">
            <script type="text/javascript">
	            var login = new LiveValidation('login',{ validMessage: 'valid syntax!', wait: 500 });
	            login.add(Validate.Presence, {failureMessage: "Login Required"});
	          </script></td>
        </tr>
        <tr>
            <td><label>nom</label></td>
            <td><input type="text" name="nom" id="nom" value="<?php echo $this->user['nom']; ?>">
            <script type="text/javascript">
	            var nom = new LiveValidation('nom',{ validMessage: 'valid syntax!', wait: 500 });
	            nom.add(Validate.Presence, {failureMessage: "Nom Required"});
	          </script></td>
        </tr>
        <tr>
            <td><label>prenom</label></td>
            <td><input type="text" name="prenom" id="prenom" value="<?php echo $this->user['prenom']; ?>">
            <script type="text/javascript">
	            var prenom = new LiveValidation('prenom',{ validMessage: 'valid syntax!', wait: 500 });
	            prenom.add(Validate.Presence, {failureMessage: "Prenom Required"});
	          </script></td>
        </tr>
        <tr>
            <td><label>Password</label></td>
            <td><input type="text" name="password" id="password" ><script type="text/javascript">
	            var password = new LiveValidation('password',{ validMessage: 'valid syntax!', wait: 500 });
	            password.add(Validate.Presence, {failureMessage: "Password Required"});
	          </script></td>
        </tr>
        <tr>
            <td><label>Role</label></td>
            <td><select name="role">
                <option value="default" <?php if ($this->user['role'] == 'default') echo 'selected'; ?>>Default</option>
                <option value="admin" <?php if ($this->user['role'] == 'admin') echo 'selected'; ?>>Admin</option>
                <option value="owner" <?php if ($this->user['role'] == 'owner') echo 'selected'; ?>>Owner</option>
                </select><br />
            </td>
        </tr>
        <tr>
            <td><label>&nbsp;</label></td>
            <td><input type="submit"></td>
        </tr>
        </table>

</form>
    </center>