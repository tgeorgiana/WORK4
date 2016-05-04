<!DOCTYPE html>
<html>
    <head>
        <title>Register!</title>

    </head>
    <body>

<?php

$file = json_decode(file_get_contents('questions.json'),true);
$tFile = json_decode(file_get_contents('tests.json'),true);

foreach($tFile as $test)
{
    if($test['title']===$_POST['test'])
    {
        
    
        foreach($test['questions'] as $question)
        {foreach ($file as $data)
            {
                if($question ===$data['id'])
                {
    
            ?>
            <form method="post">
                <label> <?php echo $data['question'];?></label>
                <?php $answers = explode(',',$data['answers']);
                    foreach ($answers as $ans)
                    {
                    
                ?>
                <input type="radio" name="ans" value="<?=$ans?>"><label><?=$ans?></label><br>
                <?php }?>
        </form>

<?php
                }
}
}
}
}
?>
    <form method="post" action="../WORK4/index.php?handler=edit&action=loadTest" >
            
        <input type="submit" name="mytests" value="BACK"/>
            
    </form>  
    </body>
</html>