<?php

		$db = new PDO('sqlite:../backend/todolistDb_PDO.sqlite');
		$db->exec("DELETE FROM list WHERE Id='".$_GET['id']."'");
		
?>