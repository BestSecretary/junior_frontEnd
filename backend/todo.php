<?php
  
	//open the database
    $db = new PDO('sqlite:../backend/todolistDb_PDO.sqlite');

    //create the database
    $db->exec("CREATE TABLE list (Id INTEGER PRIMARY KEY, task TEXT, already INTEGER)");    

	
    //now output the data to a simple html table...
	print "<tr><th></th><th class='besidered'></th><th style='color:#FFFFFF;'><p><b>ToDo List</b></p></th><th></th></tr>";
    $result = $db->query('SELECT * FROM list');
    foreach($result as $row)
    {
		if($row['already'] == 1){
			print "<tr id=".$row['Id']."><td><input onchange='ajax_check(".$row['Id'].",".$row['already'].")' type='checkbox' value=".$row['Id']." checked></td>";
			$styl = "style='color:#9eb2c0;text-decoration: line-through;'";
		}
		else{
			print "<tr id=".$row['Id']."><td><input onchange='ajax_check(".$row['Id'].",".$row['already'].")' type='checkbox' id=".$row['Id']." value=".$row['Id']."></td>";
			$styl = "style='color:#2e3641'";
		}
      print "<td class='besidered'></td>";
      print "<td ".$styl.">".$row['task']."</td>";
      print "<td><button onclick='ajax_del(".$row['Id'].")'><img src='../assets/trash.png'></button></td></tr>";
    }
	print "<tr><td><button onclick='ajax_add(document.getElementById(`title`).value)'>+</button></td><td class='besidered'></></td><td><input type='text' id='title' value=''/></td><td></td></tr>";
	
    // close the database connection
    $db = NULL;
  

?>
