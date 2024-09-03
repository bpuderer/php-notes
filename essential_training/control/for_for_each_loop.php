<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>For Loops</title>
    </head>
    <body>

        <?php

        echo "<h3>For Loop</h3>";
        for ($i = 0; $i < 5; $i++) {
            echo "i: " . $i . "<br />";
        }


        echo "<h3>For Each Loop - array</h3>";
        $nums = [1, 2, 3, 4];
        foreach ($nums as $num) {
            echo "num: " . $num . "<br />";
        }

        echo "<h3>For Each Loop - associative array</h3>";
        $doubled_nums = [
            0 => 0,
            1 => 2,
            2 => 4,
            3 => 6
        ];
        foreach ($doubled_nums as $num => $doubled_num) {
            echo "num: " . $num . " doubled: " . $doubled_num . "<br />";
        }

        ?>
        <br />

    </body>
</html>


