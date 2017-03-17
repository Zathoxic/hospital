<?php
	require('../connection.php');

	$query = "SELECT * FROM patients";
	$result = $conn->query($query);

	$patients = $result->fetch_all(MYSQLI_ASSOC);
?>
