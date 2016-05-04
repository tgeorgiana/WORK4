<!DOCTYPE html>
<html>
    <head>
        <title>Test!</title>

    </head>
    <body>

        <?php
        $file = json_decode(file_get_contents('questions.json'), true);
        $tFile = json_decode(file_get_contents('tests.json'), true);

        foreach ($tFile as $test) {
            if ($test['title'] === $_POST['test']) {


                foreach ($test['questions'] as $question) {
                    foreach ($file as $data) {
                        if ($question === $data['id']) {
                            ?>
                            <form method="post" action="../WORK4/index.php?handler=quiz&action=submitTest">
                                <label> <?php echo $data['question']; ?></label>
                            <?php
                            $answers = explode(',', $data['answers']);
                            foreach ($answers as $ans) {
                                ?>
                                    <input type="radio" name="<?= $data['id'] ?>" value="<?= $ans ?>"><label><?= $ans ?></label><br>
                                <?php } ?>



                                <?php
                            }
                        }
                    }
                }
            }
            ?>
            <input type="submit" name="mytests" value="Submit Test"/>
        </form>

        <form method="post" action="../WORK4/index.php?handler=quiz&action=showTests" >

            <input type="submit" name="mytests" value="BACK"/>

        </form>  
    </body>
</html>