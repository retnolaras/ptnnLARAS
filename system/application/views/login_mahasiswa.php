<div class="isi">
    <div class="top style"><strong>Login</strong></div>
<div class="mid">
    <?php if (isset($error)) echo $error?>
    <form action="materi/login" method="POST">
        <table>
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
                <td><input type="submit" value="Login" /></td>
            </tr>
        </table>
    </form>
</div>
        </div>