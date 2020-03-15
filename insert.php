
<?php 
	



$firstname = filter_input(INPUT_POST,'firstname');
$lastname = filter_input(INPUT_POST,'lastname');
$Dateofbirth = filter_input(INPUT_POST,'Dateofbirth');
$bloodgroup = filter_input(INPUT_POST,'bloodgroup');
$Address = filter_input(INPUT_POST,'Address');
$Phonenumber = filter_input(INPUT_POST,'Phonenumber');
$gender = filter_input(INPUT_POST,'gender');
$Emailaddress = filter_input(INPUT_POST,'Emailaddress');


 	
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "project";
// Create connection
	$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		
		if (mysqli_connect_error()){
			die('Connect Error ('. mysqli_connect_errno() .') '
				. mysqli_connect_error());
		}else{
		
			$sql = "INSERT INTO bloodbank (firstname,lastname,Dateofbirth,bloodgroup,Address,Phonenumber,gender,Emailaddress)
			values ('$firstname','$lastname','$Dateofbirth','$bloodgroup','$Address','$Phonenumber','$gender','$Emailaddress')";

			if ($conn->query($sql)){
			
				echo "New record is inserted sucessfully";						
				header("Location: index.html?dbStatus=y");

			}else{
				echo "Error: ". $sql ."
				". $conn->error;
			}
			$conn->close();

			}
			
 ?>

