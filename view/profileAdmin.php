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
        <form method="post" action="../index.php?handler=auth&action=logoutAdmin">
            <input type="submit" name="auth" value="Logout"/>
        </form>
        <form method="post" action="../index.php?handler=edit&action=addTestTemplate" >
            
            <input type="submit" name="mytests" value="Add test"/>
            
        </form>
        
        <form method="post" action="../index.php?handler=edit&action=loadTest" >
            
            <input type="submit" name="mytests" value="Load tests"/>
            
        </form>
        
        <form method="post" action="../index.php?handler=edit&action=deleteTestTemplate" >
            
            <input type="submit" name="mytests" value="Delete test"/>
            
        </form>
        
        <form method="post" action="../index.php?handler=edit&action=addQuestionTemplate" >
            
            <input type="submit" name="mytests" value="Add question"/>
            
        </form>
        
        

    </body>
</html>

