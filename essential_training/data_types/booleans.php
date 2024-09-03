<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Booleans</title>
    </head>
    <body>
        <!--
            case insensitive.  true, TRUE, false, FALSE
        -->
        <?php
        $result1 = true;
        $result2 = false;
        ?>

        Result1: <?php echo $result1; ?><br />
        Result2: <?php echo $result2; ?><br />
        <?php
        $num = 3.14;
        if ( is_float($num) ) {
            echo "A float it is.";
        }
        ?>

        <br />

    </body>
</html>


