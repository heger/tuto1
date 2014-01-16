<center><h1>Authentification</h1>
    <hr>

<form action="login/run" method="post">
    <table> 
        <tr>
            <td><label>Login</label></td>
            <td><input type="text" name="login" id="login"><script type="text/javascript">
	            var login = new LiveValidation('login',{ validMessage: 'valid syntax!', wait: 500 });
	            login.add(Validate.Presence, {failureMessage: "Login Required"});
	          </script></td>
        </tr>
        <tr>
            <td><label>Password</label></td>
            <td><input type="password" name="password" id="password"><script type="text/javascript">
	            var password = new LiveValidation('password',{ validMessage: 'valid syntax!', wait: 500 });
	            password.add(Validate.Presence, {failureMessage: "Password Required"});
	          </script></td>
        </tr>
    <tr>
        <td><label></label></td>
        <td><input type="submit" value="connect"></td>
    </tr>
    </table>
</form>
</center>
