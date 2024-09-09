<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Learn PHP in Y Supplement</title>
    </head>
    <body>

        <?php
        $var1 = 'abc';
        // delete a variable
        unset($var1);

        // \ to escape characters inside double quotes
        echo "here is a newline character:\ntext after new line "; echo '<br />';
        echo 'single quotes does not escape: here is a tab:\ttext after tab'; echo '<br />';


        // combine with arrays.php
        $nums2 = [3, 4, 5];

        // add
        $nums2[] = 6;
        array_push($nums2, 7);
        array_unshift($nums2, 1, 2); // add to beginning
        array_splice($nums2, 1, 0, 1.5); // add at an index https://www.php.net/manual/en/function.array-splice.php
        print_r($nums2); echo '<br />';

        // remove
        $removed_via_pop = array_pop($nums2); // remove last element
        $removed_via_shift = array_shift($nums2);  // remove first element
        print_r($nums2); echo '<br />';
        array_splice($nums2, 3, 1); // https://www.php.net/manual/en/function.array-slice.php
        print_r($nums2); echo '<br />';

        // for associative arrays, remove key/value with unset($associative_array["key"]);

        // references
        $a = 1;
        $b = 2;
        $c = $a;  // a and c have the same value but they're separate
        $d = &$b; // b and d reference the same value. changing one changes the other
        echo "a={$a} b={$b} c={$c} d={$d}"; echo '<br />';
        $a = 100;
        $d = 200;
        echo "a={$a} b={$b} c={$c} d={$d}"; echo '<br />';
        $b = 222;
        echo "a={$a} b={$b} c={$c} d={$d}"; echo '<br />';

        assert(false);  // throws warning if argument is not true

        // spaceship operator. returns 0 if equal, 1 if left is greater, -1 if right is greater
        echo 100 <=> 100; echo '<br />';
        echo 200 <=> 100; echo '<br />';
        echo 100 <=> 200; echo '<br />';


        // converting to another type. combine with juggling_casting.php
        $an_int = intval('1234');
        $a_str = strval(5678);
        echo "an_int:{$an_int} a_str:{$a_str}"; echo '<br />';


        // ternary. combine with if_else_elseif.php
        // $variable = (condition) ? true_expression : false_expression;
        $age = 16;
        $can_vote = ($age >= 18) ? "Yes, you can vote." : "No, you are too young to vote.";
        echo $can_vote; echo '<br />';

        // ternary shortcut
        // $variable = $condition ?: false_expression;
        // equivalent to $result = ($name) ? $name : "Guest";
        //$name = '';
        $name = 'Rasmus';
        $result = $name ?: "Guest";
        echo $result; echo '<br />';

        // null coalescing
        // $value = $expression ?? $default_value;
        // $name = "Rasmus";
        $name = null;
        $default_name = "John Doe";
        $result = $name ?? $default_name;
        echo $result; echo '<br />';


        // lambda / anonymous function add to functions.php
        // https://www.php.net/manual/en/function.array-map.php
        // doubled = [num * 2 for num in numbers]
        $numbers = [1, 2, 3, 4, 5];
        $doubled_numbers = array_map(function ($number) {
            return $number * 2;
        }, $numbers);

        print_r($doubled_numbers); echo '<br />';
        ?>
        <br />

    </body>
</html>


