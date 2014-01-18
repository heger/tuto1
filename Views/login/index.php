<center><h1 style="color:#0088cc">Authentification</h1>
    <hr>
<div class="flexslider" style="margin-top:30px; width:80%; margin-left:2%; height:90% !important; padding:35px">
<form action="login/run" method="post">
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
            <td><input type="password" name="password" id="password"><script type="text/javascript">
	            var password = new LiveValidation('password',{ validMessage: 'valid syntax!', wait: 500 });
	            password.add(Validate.Presence, {failureMessage: "Password Required"});
	          </script></td>
        </tr>
    <tr>
        <td><label></label></td>
        <td><input type="submit" value="connect" style="width:220px"></td>
    </tr>
    </table>
</form></div>
</center>
