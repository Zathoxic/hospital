<?php

require('../connection.php');

$species = $_POST['species'];

$query = "INSERT INTO species ($species) VALUES ('hond')";

$sql = "SELECT * FROM species";

$conn->query($sql);

var_dump($sql);

if(!$sql['species'] == $species){
    $conn->query($query);
}
