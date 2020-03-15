<?php
		$id=$_POST['idd'];
		$link = mysqli_connect("localhost", "root", "", "project"); 
					  
					if ($link ==false) { 
					    die("ERROR: Could not connect. "
					                .mysqli_connect_error()); 
					} 
		// sql to delete a record
		$sql = "DELETE FROM bloodbank where id ='$id'";

		if ($link->query($sql) == TRUE) {
		    echo "Record deleted successfully";
		    header("Location: delete.php");
		} else {
		    echo "Error deleting record: " . $link->error;
		}

		$link->close();
		?>