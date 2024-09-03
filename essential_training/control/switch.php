<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Switch</title>
    </head>
    <body>

        <?php
        $a = 2;
        switch ($a) {
            case 0:
                echo "a is 0<br />";
                break;
            case 1:
                echo "a is 1<br />";
                break;
            case 2:
            case 3:
                echo "a is 2 or 3<br />";
                break;
            default:
                echo "not one of these<br />";
        }
        ?>
        <br />

    </body>
</html>


