<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            echo "Hello World...!";
            echo "Second Hello World...!";
            echo "Third Hellow World...!";
            for($i=0; $i<20; $i++) {
                echo "<H" . ($i%6+1) . ">This is an examples $i</H" . ($i%6+1) . ">";
            }
        ?>
    </body>
</html>
