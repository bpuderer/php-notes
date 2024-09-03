<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Function Defaults</title>
    </head>
    <body>

        <?php

        function add_em($val1, $val2=100) {
            // as expected, defaults go after required args
            return $val1 + $val2;
        }

        echo add_em(5, 6) . "<br />";
        echo add_em(5) . "<br />";

        ?>
        <br />

    </body>
</html>


