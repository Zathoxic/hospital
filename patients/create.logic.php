<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		require('../connection.php');

		// Prepare data for insertion
		$name = $conn->escape_string($_POST["name"]);
		$species = $conn->escape_string($_POST["species"]);
		$status = $conn->escape_string($_POST["status"]);

		// Prepare query and execute
		$query = "INSERT INTO patients (name, species, status) VALUES ('$name','$species','$status')";
		$result = $conn->query($query);

    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>
