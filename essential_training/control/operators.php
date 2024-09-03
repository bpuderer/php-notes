<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Comparison and Logical Operators</title>
    </head>
    <body>
        <!--
            ==, ===  123 == "123" is true, 123 === "123" is false
            >, <, >=, <=, <>  (functionally equivalent to != and less common)
            !=, !==
            &&, ||, !
        -->

        <?php
        $a = 1;
        $b = 2;
        $c = 3;
        if (($a < $b) && ($b < $c)) {
            echo "a is less than b and b is less than c";
        }
        ?>
        <br />

    </body>
</html>


