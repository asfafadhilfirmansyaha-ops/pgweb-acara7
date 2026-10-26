<?php
    $i = 1; // Initialize counter
    while ($i < 5) { // Check condition
        echo $i."<br>"; // Execute code
        $i = $i + 1; // Increment counter
    }

    
    for($i=1; $i<5; $i++){
        echo $i."<br>";
    }

    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
        echo "$value <br>";
    }

    for ($i=0;$i<=3;$i++){
        echo $colors[$i]."<br>";
    }
?>