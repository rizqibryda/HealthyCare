<%-- 
    Document   : login
    Created on : 18 Nov 2024, 09:53:13
    Author     : rizqi
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login Page</title>
    </head>
    <body>
        <h1>Login</h1>
        <form action="auth" method="POST">
            Username: <input type="text" name="user" /> <br>
            Password: <input type="password" name="pass" /> <br>
            <input type="submit" value="login"></input>
        </form>
        ${msg}
    </body>
</html>
