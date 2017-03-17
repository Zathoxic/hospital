<?php
	include "../common/header.php";
?>
	<div id="container">
		<h1>Clients</h1>
<?php
	require(index.logic.php);
	?>
	<table class="table">
		<th>First name</th>
		<th>Prefix</th>
		<th>Last name</th>
		<?php
		foreach ($clients as $client) {
			?>
		<tr>
			<td><?= $client['firstName']?></td>
			<td><?= $client['prefix']?></td>
			<td><?= $client['lastName']?></td>
		</tr>
		<?php
	}
	?>
	</table>



<?php
	include "../common/footer.php";
?>
	</div>
