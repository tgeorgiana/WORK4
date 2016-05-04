<!DOCTYPE html>
<html>
    <head>
        <title>Register!</title>

    </head>
    <body>
        <?php
        $file = json_decode(file_get_contents('tests.json'), true);

        foreach ($file as $data) {
            ?>
            <form method="post" action="../WORK4/index.php?handler=quiz&action=takeTest">
                <input type="submit" name="test" value= "<?= $data['title'] ?>"/>
            </form>


    <?php
}
?>
        <a href="view/profile.php">BACK</a> 
    </body>
</html>