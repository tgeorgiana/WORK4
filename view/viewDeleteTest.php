<!DOCTYPE html>
<html>
    <head>
        <title>Register!</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="register.css" />
    </head>
    <body>
        <div class="register">
            <form method="post" action="../index.php?handler=edit&action=deleteTest">
             <table>
                 <tr>
                     <td>
                         <label>Write the test number:  </label>
                     </td>
                     <td>
                     <input type="text" name="testId" autocomplete="off" value=""/>
                     </td>
                 </tr>
                 
                 <tr>
                     <td>
                        <a href="profileAdmin.php">BACK</a> 
                     </td>
                     <td>
                        <input type="submit" name="auth" value="Delete test"/>
                     </td>
                 </tr>
            </table>
            </form>

        </div>
    </body>
</html>
