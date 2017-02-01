<?php
		if($_GET['title']!=''){
			$db = new PDO('sqlite:../backend/todolistDb_PDO.sqlite');
			$db->exec("INSERT INTO list (task, already) VALUES ('".$_GET['title']."', 0);");
		}
		else
			print "Nie udało się dodać zadania";

?>