<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"):
		$species = NULL;
		if (isset($_GET['id'])):
			// Get Patient for id
			require('../connection.php');
			$id = $conn->escape_string($_GET["id"]);

			$query = "SELECT * FROM patients WHERE id=$id";
			$result = $conn->query($query);

			$species = $result->fetch_assoc();
		endif;
		if ($species == NULL):
			// No patient found
			http_response_code(404);
			include("../common/not_found.php");
			exit();
		endif;
	elseif ($_SERVER["REQUEST_METHOD"] == "POST"):
		if (isset($_POST['confirmed'])):
			require('../connection.php');

			// Prepare data for delete
			$id = $conn->escape_string($_POST["id"]);

			// Prepare query and execute
			$query = "DELETE FROM patients WHERE id=$id";
			$result = $conn->query($query);
		endif;

		// Tell the browser to go back to the index page.
		header("Location: ./");
		exit();
	endif;

?>
