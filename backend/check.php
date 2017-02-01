<?php

		if($_GET['already']==0){
			$db = new PDO('sqlite:../backend/todolistDb_PDO.sqlite');
			$db->exec("UPDATE list SET already='1' WHERE Id='".$_GET['id']."'");
		}
		else{
			$db = new PDO('sqlite:../backend/todolistDb_PDO.sqlite');
			$db->exec("UPDATE list SET already='0' WHERE Id='".$_GET['id']."'");
		}
?>