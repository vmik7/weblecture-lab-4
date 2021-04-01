<?php 
    $data = file_get_contents("data/data.json");
    $data = json_decode($data, true);
    foreach ($data as $item) {
        echo "<div class=\"content__result\">" . $item["model"] . ", " . $item["inch"] . "', " . $item["ram"] . "Гб" . "</div>";
    }
?>