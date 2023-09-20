<?php
$first = 0;
$second = 1;

$count = 0;
while ($count < 10) {
    $next = $first + $second;
    if ($next > 100) {
        break;
    }
    echo $next . " ";
    $first = $second;
    $second = $next;
    $count++;
}
?>
