<div role="group">

<?php
	foreach ($kleiderkastenOberteil as $menupunkt){
		echo '<button style="margin-left: 5px; margin-bottom: 5px;" type="button" class="btn btn-info">'.$menupunkt->bezeichnung." ".$menupunkt->farbe.'</button>';
	}
?>


</div>