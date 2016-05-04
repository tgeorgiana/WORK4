<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
    </head>
    <body>
        <form method="post" action="../index.php?handler=auth&action=logoutUser">
            <input type="submit" name="auth" value="Logout"/>
        </form>
        <form method="post" action="../index.php?handler=quiz&action=mytests" >
            
            <input type="submit" name="mytests" value="Show my tests"/>
            
        </form>
        <form method="post" action="../index.php?handler=quiz&action=showTests" >
            
            <input type="submit" name="takeatest" value="Take a test"/>
            
        </form>
    </body>
</html>
