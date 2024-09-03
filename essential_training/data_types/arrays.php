<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Arrays</title>
    </head>
    <body>
        <?php
        $nums = array(1, 4, 12, 9);
        $nums2 = [3, 4, 5];
        echo $nums2[2];
        ?>
        <br />

        <?php $mixed = array(1, "blah", array("a", "b")); ?>
        <?php echo $mixed[2][0]; ?>
        <?php $mixed[3] = "add me"; ?>
        <?php $mixed[] = "add me too"; ?>
        <br />

        <pre>
        <?php print_r($mixed); ?> <!-- for debugging not users -->
        </pre>

        <br />

    </body>
</html>


