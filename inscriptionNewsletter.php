<?php

$servername = "162.19.56.44";
$username = "u572789629_RFTM"; //ok
$password = "RogerFEDERER:08/08"; //ok
$dbname = "u572789629_RFTM"; //ok

$email = $_POST["Email"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO Emails VALUES('$email')";

if (true) {
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php?newsletter=1');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
else
{
    header('Location: index.php?newsletter=1');
}

