<?php
// Deschide o conexiune la baza de date

// 4 variabile sa conectam cu baza de date
$host = "localhost";
$username="root";
$user_pass="usbw";
$database_in_use="test";

// creeaza o instanta de conactare la baza de date
$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);

//echo $mysqli->host_info . "<br>"; //-> pentru verificare
//<br>=/n
?>