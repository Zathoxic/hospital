<?php

require('../connection.php');

$query = "SELECT * FROM clients";

$result = $conn->query($query);

$clients = $result->fetch_all(MYSQLI_ASSOC);

?>
