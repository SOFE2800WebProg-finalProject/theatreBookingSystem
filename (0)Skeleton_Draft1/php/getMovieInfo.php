<?php
    include 'connection.php';

    //retreive movie details
    $mysql_movInf = "SELECT * FROM movieInformation";
    $result = $connection->query($mysql_movInf);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $availability = ($row['availability'] == 1) ? $availability="Currently Showing" : $availability="Coming Soon...";
        $threeD = ($row['3D'] == 1) ? $threeD="Yes" : $threeD="No";
        $cc = ($row['cc']) ? $cc="Yes" : $cc="No";
        $hour = date('h', strtotime($row['duration']));
        $min = date('m', strtotime($row['duration']));
        $duration = "$hour h $min m";

        
        // $title = ($row['title']);
        // $releaseDate = ($row['releaseDate']);
        // $rating = ($row['rating']);
        // $genre = ($row['genre']);
        // $description = ($row['description']);
        // $cc = ($row['cc']);
        // $surroundSound = ($row['surroundSound']);
        // $duration = ($row['duration']);
    } 
    
    $connection->close();
?>