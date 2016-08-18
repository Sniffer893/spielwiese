<?php
?>

<div class="formular">
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<div class="row">
			<div class="col-md-3">Benutzername</div>
			<div class="col-md-9">
				<input type="text" name="bn" size="30">
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">Kennwort</div>
			<div class="col-md-9">
				<input type="text" name="kw" size="30">
			</div>
		</div>

		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-9">
			<input type="submit" value="Submit">
			</div>
		</div>
	</form>
</div>
<div class="col-md-3"></div>