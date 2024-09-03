<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>While and Do-While Loops</title>
    </head>
    <body>

        <?php

        echo "<h3>While Loop</h3>";
        $a = 0;
        echo "Loop while a is less than 5<br />";
        while ($a < 5) {
            echo "a = " . $a . "<br />";
            $a++;
        }

        echo "<h3>Do While Loop</h3>";
        $b = 0;
        do {
            echo "b = " . $b . "<br />";
            $b++;
        }
        while ($b < 5);

        ?>
        <br />

    </body>
</html>


