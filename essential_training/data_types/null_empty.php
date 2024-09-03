<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Null and empty</title>
    </head>
    <body>
        <!--
            case insensitive.  null, NULL
            empty: "", null, 0, 0.0, "0", false, array()
            like falsy on python
            In training "empty is the leading cause of bugs in php code"
        -->
        <?php
        $var1 = null;
        $var2 = "";
        ?>

        var1 null?: <?php echo is_null($var1); ?><br />
        var2 null?: <?php echo is_null($var2); ?><br />
        var3 null?: <?php echo is_null($var3); ?><br />
        <br />
        var1 set?: <?php echo isset($var1); ?><br />
        var2 set?: <?php echo isset($var2); ?><br />
        var3 set?: <?php echo isset($var3); ?><br />
        <br />
        <?php $var3 = "blah"; ?>
        var1 empty?: <?php echo empty($var1); ?><br />
        var2 empty?: <?php echo empty($var2); ?><br />
        var3 empty?: <?php echo empty($var3); ?><br />

        <br />

    </body>
</html>


