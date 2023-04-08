<?php
include 'connect.php';

if($result = $mysqli->query("SELECT * FROM track")){
    foreach($result as $row){
         
        $title = $row["title"];
        $description = $row["descrip"];
        $ves= $row["ves"];
        $data = $row["data"];
        $country = $row["country"];

        echo "<div class='ratest_blok'>
        <div class='ratest_title'>
            <p> <span class='style'> $title </span> <br>
                $description</p>
        </div>
        <div class='ratest_title'>
            <p>$ves</p>
        </div>
        <div class='ratest_title'>
            <p>$data</p>
        </div>
        <div class='ratest_title'>
            <p>$country</p>
        </div>
    </div>";
    }
}
