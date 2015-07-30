<?php
/**
 * Created by PhpStorm.
 * User: Wiwat
 * Date: 7/30/2015
 * Time: 5:03 PM
 */
$servername = "127.4.147.130";
$username = "adminfEG8GpS";
$password = "fyZ_cv3zSn9R";
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("failed: " . $conn->connect_error);
}

?>