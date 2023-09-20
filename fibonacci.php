<?php
$first = 0;
$second = 1;

$count = 0;
while ($count < 10) {
    $next = $first + $second;
    if ($next > 100) {
        break;
    }
    echo $next . ", ";
    $first = $second;
    $second = $next;
    $count++;
}
    echo "<br>";
    echo "<br>";
?>


<?php
$first = 0;
$second = 1;
$count = 0;

while ($count < 10) {
    if ($count < 2) {
        echo $count . ", "; 
    } else {
        $next = $first + $second;
        
        if ($next > 100) {
            break; 
        }

        echo $next . ", ";
        
        $first = $second;
        $second = $next;
    }

    $count++;
}
?>

