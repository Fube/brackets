<?php

    require'./arrayHelpers.php';

?>
<!--#########PROBLEMS###########-->
<?php//################################?>
<hr>
<?php
    echo "<h3>array_walk()</h3>";

    $a = range(0, 10);
    echo myToString($a) . '<br>';

    array_walk($a, create_function('$n', 'echo "The number $n " . ($n % 2 == 0 ? "Even" : "Odd") . "<br>";'))
?>

<?php//################################?>
<hr>
<?php
    echo "<h3>array_reduce()</h3>";
    $a = array(5, 20, 10, 15);
    echo myToString($a) . '<br>';
    echo "The recursive sum is: " . array_reduce($a, create_function('$a, $n', 'return $a + $n;'));
?>


<?php//################################?>
<hr>
<?php
    echo "<h3>array_reduce()</h3>";
    $z = array(1, 2, 3, 4, 5);
    echo myToString($z) . '<br>';
    echo "The recursive multiplication is: " . array_reduce($z, create_function('$x, $n', 'return $x * $n;'), 1);
?>


<?php//################################?>
<hr>
<?php
    echo "<h3>Set Operations</h3>";
    $a = [1, 2, 3, 4, 5];
    echo 'A=' . myToString($a) . '<br>';
    $b = [4, 5, 6, 7, 8];
    echo 'B=' . myToString($b) . '<br>';

    echo 'A + B: ' . myToString(array_merge($a, $b)) . '<br>';
    echo 'A - B: ' . myToString(array_diff($a, $b)) . '<br>';
    echo 'B - A: ' . myToString(array_diff($b, $a)) . '<br>';
    echo 'A intersect B: ' . myToString(array_intersect($a, $b)) . '<br>';
    echo 'A + B: ' . myToString(array_unique(array_merge($a, $b))) . "<br>";
?>