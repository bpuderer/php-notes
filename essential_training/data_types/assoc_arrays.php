<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Associative Arrays</title>
    </head>
    <body>
        <?php
        $assoc = array("first_name" => "Linus", "last_name" => "Torvalds");
        echo $assoc["first_name"];
        ?>
        <br />

        <?php $assoc["first_name"] = "LINUS"; ?>
        <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?>
        <br />

    </body>
</html>


