<?php
$conn = new mysqli("localhost", "root", "", "hospital");
if(!$conn){
    die('No connection: ' . mysqli_connect_error());
}
