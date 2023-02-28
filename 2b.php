<?php

    for ($i = 1; $i <= 10; $i++) {

        for ($j = 1; $j <= $i; $j++) {
            if ($j == 1) {
                echo $j;
            } else {
                echo "  " . $j;
            }
        }
        echo "<br>";
    }
    
?>
