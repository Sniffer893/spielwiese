<?php


?>
<div class="formular">
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<div class="row">
			<div class="col-md-3">ID</div>
			<div class="col-md-9">
				<input type="number" name="id" min=1 size="4">
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">Bezeichnung</div>
			<div class="col-md-9">
				<input type="text" name="bezeichnung" size="30">
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">Farbe</div>
			<div class="col-md-9">
				<input type="text" name="farbe" size="30">
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">Groesse</div>
			<div class="col-md-9">
				<input type="text" name="groesse" size="5">
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">Kategorie</div>
			<div class="col-md-9">
				<input type="radio" name="kategorie" value="freizeit">freizeit
				<input type="radio" name="kategorie" value="leger">leger 
				<input type="radio" name="kategorie" value="business">business 
				<input type="radio" name="kategorie" value="abendlich">abendlich
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">Tragekomfort</div>
			<div class="col-md-9">
				<input type="radio" name="kategorie" value="sb">sehr bequem
				<input type="radio" name="kategorie" value="b">bequem
				<input type="radio" name="kategorie" value="mb">mittelbequem 
				<input type="radio" name="kategorie" value="eng">eng
				<input type="radio" name="kategorie" value="seng">sehr eng
			</div>
		</div>
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-9">
			<input type="submit" value=" Kleiderkasten befuellen">
			</div>
		</div>
	</form>
</div>
<div class="col-md-3"></div>