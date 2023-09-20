<!-- for loop -->
<?php
function EvenNumbers1($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        if($step %2==0){ 
            echo $i+1 . ", ";
        }
    }
}

$start = 1;
$end = 20;
$step = 2;

echo "\nfor loop: ";
EvenNumbers1($start, $end, $step);
echo "<br>";
echo "<br>";
?>

<!-- while loop -->
<?php 

function EvenNumbers2($start, $end, $step) {
    $i = $start;
    while ($i <= $end) {
        echo $i+1 . ", ";
        $i += $step;
    }
}

$start = 1;
$end = 20;
$step = 2;

echo "while loop: ";
EvenNumbers2($start, $end, $step);
echo "<br>";
echo "<br>";

 ?>

<!-- do-while loop -->
<?php 

function EvenNumbers3($start, $end, $step) {
    $i = $start;
    do {
        echo $i+1 . ", ";
        $i += $step;
    } while ($i <= $end);
}

$start = 1;
$end = 20;
$step = 2;

echo "\ndo-while loop: ";
EvenNumbers3($start, $end, $step);
echo "<br>";
echo "<br>";

 ?>
