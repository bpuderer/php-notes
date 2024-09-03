<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Floats</title>
    </head>
    <body>
        <?php echo $float = 3.14 ?><br />
        <?php echo $float + 7 ?><br />
        <?php echo 4/3 ?><br />
        <br />
        Round: <?php echo round(4/3, 2) ?><br />
        Ceiling: <?php echo ceil(4/3) ?><br />
        Floor: <?php echo floor(4/3) ?><br />
        <br />
        <?php $integer = 3; ?>
        <?php echo "Is {$integer} an integer?" . is_int($integer) ?><br />
        <?php echo "Is {$float} an integer?" . is_int($float) ?><br />
        <?php echo "Is {$integer} a float?" . is_float($integer) ?><br />
        <?php echo "Is {$float} a float?" . is_float($float) ?><br />
        <?php echo "Is {$integer} a numeric?" . is_numeric($integer) ?><br />
        <?php echo "Is {$float} a numeric?" . is_numeric($float) ?><br />
        <br />

    </body>
</html>


