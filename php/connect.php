<?php
$servername = "landmaps.htl-perg.ac.at";
$username = "mabs";
$password = "/%kf3)3jf0";
$dbname = "mabs_schoolList";

$query = $_REQUEST["q"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
if ($conn->connect_error) {
    die("Connection failed. Database server may be offline.");
}