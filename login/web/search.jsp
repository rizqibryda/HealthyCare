<%-- 
    Document   : search
    Created on : 25 Nov 2024, 09:14:15
    Author     : rizqi
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Search Page</title>
    </head>
    <body>
        <h1>Hello, user!</h1>
        <a href="auth?logout"><button>Logout</button></a>
            <br> <br>
            <form method="get" action="home">
                <label for="keyword">Keyword:</label>
                <input type="text" id="keyword" name="key">
                <input type="submit" value="Search">
            </form>
            ${keyword}
    </body>
</html>
