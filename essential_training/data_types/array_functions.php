<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Array Functions</title>
    </head>
    <body>
        <!-- https://www.php.net/manual/en/ref.array.php
         array_push, array_pop, array_unshift, array_shift,
         array_search, array_filter, array_map, array_unique
        -->
        <?php $nums = array(1, -4, 12, 9, 3); ?>

        Count: <?php echo count($nums); ?><br />
        Min: <?php echo min($nums); ?><br />
        Max: <?php echo max($nums); ?><br />
        Sort: <?php sort($nums);  print_r($nums); ?><br />
        Reverse sort: <?php rsort($nums);  print_r($nums); ?><br />
        <!-- sort of like ' * '.join(nums) but this will work on non-string lists -->
        Implode: <?php echo $num_string = implode(" * ", $nums); ?><br />
        <!-- like num_string.split(' * ') -->
        Explode: <?php print_r(explode(' * ', $num_string)); ?><br />
        Membership, 12 in array?: <?php echo in_array(12, $nums); ?><br />
        <br />

    </body>
</html>


