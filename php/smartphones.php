<?php 
    $file_data = file("data/data.txt");
    foreach ($file_data as $item) {
        echo "<div class=\"content__result\">$item</div>";
    }
?>