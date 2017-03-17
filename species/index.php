<?php
	include "../common/header.php";
?>
	<div id="container">
		<h1>Species</h1>
		<?php
		require('../connection.php');

		$query = "SELECT * FROM patients";

		$result = $conn->query($query);

		$patients = $result->fetch_all(MYSQLI_ASSOC);
			?>
			<table class="table">
				<th>Species</th>
				<?php
				foreach ($patients as $patient) {
					?>
				<tr>
					<td><?= $patient['species']?></td>
					<td class="center"><a href="edit.php?id=<?=$patient['id']?>">edit</a></td>
					<td class="center"><a href="delete.php?id=<?=$patient['id']?>">delete</a></td>
				</tr>
				<?php
			}
			?>
			</table>



		<?php
			include "../common/footer.php";
		?>
			</div>
