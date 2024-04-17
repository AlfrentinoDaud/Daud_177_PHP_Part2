<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h2 align="center">Login Form</h2>
    <form method="POST" action="includeLogin.php">
        <table width="400" align="center" cellpadding="2" cellspacing="2">
            <tr>
                <td width="300">UserName</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td width="300">Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="btnLogin" value="Login">
                    <input type="reset" name="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>