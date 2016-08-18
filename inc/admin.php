<?php 	

?>

<div class="container">

	<div class="row">
		<div class="col-md-12">
			<h1>Administration</h1>
			<?php 
				if(isset($_SESSION['log'])){
					include 'inc/gewandformular.php';
				}
				else {
					include 'inc/loginformular.php';
				}
			?>
		</div>
	</div>
</div>
</div>
