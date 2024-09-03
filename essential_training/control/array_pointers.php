<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Array Pointers</title>
    </head>
    <body>

        <?php

        $things = ["first", "second", "third", "fourth", "fifth", "last"];
        echo current($things) . "<br />";
        next($things);
        next($things);
        echo current($things) . "<br />";
        prev($things);
        echo current($things) . "<br />";
        end($things);
        echo current($things) . "<br />";
        reset($things);
        echo current($things) . "<br />";
        ?>
        <br />


        <!--
        https://www.php.net/manual/en/language.operators.assignment.php
        The value of an assignment expression is the value assigned. That is, the value of "$a = 3" is 3.

        -->
        <?php

        while($thing = current($things)) {
            echo $thing . ", ";
            next($things);
        }

        ?>

    </body>
</html>


