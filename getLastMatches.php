<?php

$servername = "162.19.56.44";
$username = "u572789629_RFTM"; //ok
$password = "RogerFEDERER:08/08"; //ok
$dbname = "u572789629_RFTM"; //ok

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Opponent, Tournament, Win, Score, DateMatch FROM LastMatches ORDER BY DateMatch DESC LIMIT 3";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        if ($row["Win"] == 1)
        {
            echo "<li><strong>" . $row["Tournament"] . ":</strong> R. Federer defeated " . $row["Opponent"] . " " . $row["Score"] . " &#9989";
        }
        else
        {
            echo "<li><strong>" . $row["Tournament"] . ":</strong> " . $row["Opponent"] . " defeated R. Federer " . $row["Score"] . " &#10060";
        }
    }


} else {
    echo "0 results";
}

?>