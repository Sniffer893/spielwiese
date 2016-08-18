<?php
		include 'inc/kleiderkastenOberteil.php';
		include 'inc/kleiderkastenUnterteil.php';
		include 'inc/kleiderkastenSchuhe.php';
	
		session_start();
		
		$benutzer='prinzessin';
		$kennwort='prinzessin';
		
		if(isset($_POST['bn']) && $_POST['kw']){
			if ($_POST['bn']== $benutzer && $_POST['kw']==$kennwort){
				$_SESSION['log']=true; //schreibt in Seesionarray an der Stelle log
			}
		}
		
		if(isset($_GET['lo'])&& isset($_SESSION['log'])){
			session_unset($_SESSION['log']);
		}
	
?>