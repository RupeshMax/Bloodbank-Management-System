<!doctype html>
<html>
<head>
    <title>blood bank</title>
    <link rel="stylesheet" href="bb.css">
    </head>
    <body>
        
<!----header---->        
<div class="header">
    <h2>blood bank</h2>
    <p> donate for life<br> save for life</p>
</div>
        
<!---menu--->
<ul>
    <li><a href="index.html">Home</a> </li>
    <li><a href="donors.php">Donors</a> </li>
    <li><a href="admin.html">admin</a> </li>
    <li><a href="contact.html">Contact</a> </li>
</ul>
   
        <div class="des"><br><br>
        		<center>
        			
					<?php  
					$link = mysqli_connect("localhost", "root","", "project"); 
					  
					if ($link ==false) { 
					    die("ERROR: Could not connect. "
					                .mysqli_connect_error()); 
					} 
					  
					$sql = "SELECT * FROM bloodbank"; 
					if ($res = mysqli_query($link, $sql)) { 
					    if (mysqli_num_rows($res) > 0) { 
					        echo "<table>"; 
					        echo "<tr>"; 
					        echo "<th>Id";
							echo "<th>Firstname</th>"; 
							echo "<th>Lastname</th>"; 
							echo "<th>Date of birth</th>"; 
							echo "<th>bloodgroup</th>";
							echo "<th>Address</th>";
							echo "<th>Phone number</th>";
							echo "<th>Gender</th>";
                            echo "<th>Email address</th>";
							echo "</tr>"; 

					while ($row = mysqli_fetch_array($res)) { 
						echo "<tr><td>".$row['id']."</td>";   
						echo "<td>".$row['firstname']."</td>";
						echo "<td>".$row['lastname']."</td>"; 
						echo "<td>".$row['Dateofbirth']."</td>"; 
						echo "<td>".$row['bloodgroup']."</td>";
						echo "<td>".$row['Address']."</td>";
						echo "<td>".$row['Phonenumber']."</td>";
						echo "<td>".$row['gender']."</td>"; 
                        echo "<td>".$row['Emailaddress']."</td>";
						echo "</tr>"; 
					        } 
					        echo "</table>"; 
					      // mysqli_free_res($res); 
					    } 
					    else { 
					        echo "No matching records are found."; 
					    } 
					} 
					else { 
					    echo "ERROR: Could not able to execute $sql. "
					                                .mysqli_error($link); 
					} 
					mysqli_close($link); 
					?> 
				</center>
			</div>
			  </body>
</html>
