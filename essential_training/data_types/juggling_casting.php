<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Type Juggling and Type Casting</title>
    </head>
    <body>
        <!--
            juggling: php implicitly converts a variable's type depending on context
            casting: done explicitly using a cast operator
            string, int, integer, float, array, bool, boolean
        -->
        <?php
        $var1 = "5";
        $var2 = "6";
        $var3 = "7 tacos";
        ?>

        <h4>Type Casting</h4>
        var1 type: <?php echo gettype($var1); ?><br />
        var1 temporary explicit type casting to int with variable var1_int <?php $var1_int = (int) $var1; ?><br />
        var1 type (unchanged): <?php echo gettype($var1); ?><br />
        var1_int type: <?php echo gettype($var1_int); ?><br />
        <br />

        var2 type: <?php echo gettype($var2); ?><br />
        var2 permanent explicit type casting to int <?php settype($var2, "integer"); ?><br />
        var2 type (changed): <?php echo gettype($var2); ?><br />
        <br />

        <h4>Type Juggling (use vary sparingly)</h4>
        var3: <?php echo $var3; ?><br />
        Add 3 to var3<br />
        <?php $var3 += 3; ?>  <!-- ugly, don't do this -->
        var3: <?php echo $var3; ?><br />
        var3 type: <?php echo gettype($var3); ?><br />

        Make a new string using var3<br />
        <?php $statement = "I ordered " . $var3 . " tacos"; ?>
        <?php echo $statement; ?><br />

        <br />

    </body>
</html>


