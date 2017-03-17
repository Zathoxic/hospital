<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$patient = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			require('../connection.php');
			$id = $conn->escape_string($_GET["id"]);

			$query = "SELECT * FROM patients WHERE id=$id";
			$result = $conn->query($query);

			$patient = $result->fetch_assoc();
		endif;
		if ($patient == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		require('../connection.php');

		// Prepare data for update
		$id = $conn->escape_string($_POST["id"]);
		$name = $conn->escape_string($_POST["name"]);
		$species = $conn->escape_string($_POST["species"]);
		$status = $conn->escape_string($_POST["status"]);
		$owner = $conn->escape_string($_POST["owner"]);

		// Prepare query and execute
		$query = "UPDATE patients SET name='$name', species='$species', status='$status', owner='$owner' WHERE id=$id";
		$result = $conn->query($query);

    // Tell the browser to go back to the index page.
    header("Location: ./");
    exit();
	endif;

?>
