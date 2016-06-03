<h2 style="border-bottom: 2px solid #CCCCCC;" ><img src="images/couple32.png" alt="" height="25" width="25"/><a href="#">  &nbsp; Login </a></h2> 
<br /> 

	<fieldset style="width:350px; margin-left:100px;" >
	<legend> <strong>Login</strong> </legend>
    <?php if (isset($error)) echo $error?>
    <form action="materi/login" method="POST">
        <table style="margin-left: 50px; margin-right:50px;">
            <tr>
                <td>Username</td>
                <td> : <input type="text" name="username" value="" /></td>
            </tr>
            <tr>
                <td>Password</td>
                <td> : <input type="password" name="password" value="" /></td>
            </tr>
			<tr>
                <Td></Td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <Td></Td>
                <td align=center><input type="submit" value="Login" /></td>
            </tr>
        </table>
    </form>
	</fieldset>
