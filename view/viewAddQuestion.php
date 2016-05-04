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
            <form method="post" action="../index.php?handler=edit&action=addQuestion">
                <table>
                    <tr>
                        <td>
                            <label>Write the question number:  </label>
                        </td>
                        <td>
                            <input type="text" name="id" autocomplete="off" value=""/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Write the question:  </label>
                        </td>
                        <td>
                            <input type="text" autocomplete="off" name="question" value=""/>  
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Write the answers:</label>
                        </td>
                        <td>
                            <input type="text" name="answers" value=""/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Write the correct answer index:</label>
                        </td>
                        <td>
                            <input type="text" name="correctAnswerIndex" value=""/>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="profileAdmin.php">BACK</a> 
                        </td>
                        <td>
                            <input type="submit" name="auth" value="Add Question"/>
                        </td>
                    </tr>
                </table>
            </form>

        </div>
    </body>
</html>
