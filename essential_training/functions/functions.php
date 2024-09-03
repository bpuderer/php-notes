<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Functions</title>
    </head>
    <body>

        <?php

        function add_em($val1, $val2) {
            return $val1 + $val2;
        }

        function add_and_subtract($val1, $val2) {
            $added = $val1 + $val2;
            $subtracted = $val1 - $val2;
            return [$added, $subtracted];  // better, more modern usage
            // return array($added, $subtracted);
        }


        function append_a_four(&$arr) {
            array_push($arr, 4);
        }

        function append_a_five($arr) {
            array_push($arr, 5);
            // did not mutate the passed in array
        }

        function scope() {
            global $bar;
            echo $bar . "<br />";
            $bar = "inside";
        }


        // single return value
        echo "4 + 3: " . add_em(4, 3) . "<br />";


        // multiple return values
        //$result_array = add_and_subtract(4, 3);
        //echo "Added: " . $result_array[0] . " subtracted: " . $result_array[1] . "<br />";

        list($add_result, $subt_result) = add_and_subtract(27, 5);
        echo "Added: " . $add_result . " subtracted: " . $subt_result . "<br />";


        $myarr = [1, 2];
        append_a_four($myarr);
        append_a_five($myarr);
        print_r($myarr);
        echo "<br />";


        $bar = "outside";
        scope();
        echo $bar . "<br />";

        ?>
        <br />

    </body>
</html>


