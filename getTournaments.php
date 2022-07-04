<?php

$servername = "162.19.56.44";
$username = "u572789629_RFTM"; //ok
$password = "RogerFEDERER:08/08"; //ok
$dbname = "u572789629_RFTM"; //ok

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT TypeTournoi, Nom, Joue, DATE_FORMAT(DateDebut, '%b %e'), DATE_FORMAT(DateFin, '%b %e'),
       YEAR(DateDebut), YEAR(DateFin) FROM Tournaments"; //prendre les 5 prochains à partir d'ajrd
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["TypeTournoi"] . " - ";
        echo " " . $row["Nom"];
        if ($row["Joue"] == 1) //va jouer
        {
            echo " " . "&#9989";
        }
        else if ($row["Joue"] == 2) //on ne sait pas
        {
            echo " " . "&#10067";
        }
        else if ($row["Joue"] == 3) //ne vas pas jouer
        {
            echo " " . "&#10060";
        }

        if ($row["YEAR(DateDebut)"] != $row["YEAR(DateFin)"])
        {
            echo " : " . $row["DATE_FORMAT(DateDebut, '%b %e')"];
            echo " ". $row["YEAR(DateDebut)"];
            echo " - " . $row["DATE_FORMAT(DateFin, '%b %e')"];
            echo " ". $row["YEAR(DateFin)"];
        }
        else
        {
            echo " : " . $row["DATE_FORMAT(DateDebut, '%b %e')"];
            echo " - " . $row["DATE_FORMAT(DateFin, '%b %e')"];
        }
    }


} else {
    echo "0 results";
}

?>