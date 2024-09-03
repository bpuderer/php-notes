<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Troubleshooting</title>
    </head>
    <body>
        <!--
            Turn on error reporting for dev use
            php.ini
            display_errors = On
            error_reporting = E_ALL
        -->
        <?php
        $my_arr = [1, 2, 3];
        $my_str = "blahblah";
        var_dump($my_arr); echo "<br />";
        var_dump($my_str); echo "<br />";
        ?>

        <pre>
            <?php print_r(get_defined_vars()); ?>
        </pre>

        <?php
            function say_hello($name) {
                echo "hello {$name}!<br />";
                var_dump(debug_backtrace());
            }
            say_hello("everybody");
        ?>

        <br />
    </body>
</html>
