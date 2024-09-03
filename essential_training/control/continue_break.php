<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Continue and Break</title>
    </head>
    <body>
        <!--
            https://www.php.net/manual/en/control-structures.continue.php
            "continue accepts an optional numeric argument which tells it how many levels of enclosing loops
            it should skip to the end of. The default value is 1, thus skipping to the end of the current loop."

            https://www.php.net/manual/en/control-structures.break.php
            "break accepts an optional numeric argument which tells it how many nested enclosing structures
            are to be broken out of. The default value is 1, only the immediate enclosing structure is broken out of."
        -->

        <?php

        $nums = [1, 12, -34, 19, -4, 11];
        $target = 19;
        $found_it = false;
        foreach ($nums as $num) {
            if ($num == $target) {
                echo "Found " . $target . " in the array!!!<br />";
                $found_it = true;
                break;
            }
        }
        if (!$found_it) {
            echo "Did NOT find " . $target . " in the array<br />";
        }
        echo "<br />";


        foreach ($nums as $num) {
            if ($num % 2 == 0) {
                echo "{$num} is even!<br />";
                continue;
            }
            echo "{$num} is odd!<br />";
        }

        ?>
        <br />

    </body>
</html>


