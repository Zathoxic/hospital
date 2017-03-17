<?php
    include "../common/header.php";
?>
    <div id="container">

        <h1>New species</h1>
    	<form method="post" action="add.logic.php">
    		<div>
    			<label for="name">Species:</label>
    			<input type="text" id="species" name="species">
    		</div>
            <div>
    			<label></label>
    			<input type="submit" value="Save">
    		</div>
    	</form>
    <?php
    	include "../common/footer.php";
    ?>
</div>
