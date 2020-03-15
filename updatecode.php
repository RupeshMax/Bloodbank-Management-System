<?php  
    $id=$_POST['id'];
    $firstname=filter_input(INPUT_POST, "firstname");
    $lastname=filter_input(INPUT_POST, "lastname");
    $Dateofbirth=filter_input(INPUT_POST, "Dateofbirth");   $bloodgroup=filter_input(INPUT_POST, "bloodgroup");
    $Address=filter_input(INPUT_POST, "Address");
    $phonenumber=filter_input(INPUT_POST, "phonenumber");
    $gender=filter_input(INPUT_POST, "gender");
    $Emailaddress=filter_input(INPUT_POST, "Emailaddress");
                    $host="localhost";
            $dbusername="root";
            $dbpassword="";
            $dbname="project";

 //create connection
            $conn= new mysqli($host, $dbusername, $dbpassword, $dbname);

                    if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '
                . mysqli_connect_error());
        }else{
            $sql = "UPDATE bloodbank SET firstname = '$firstname',lastname = '$lastname',Dateofbirth ='$Dateofbirth',bloodgroup ='$bloodgroup', Address = '$Address',phonenumber = '$phonenumber',gender = '$gender', Emailaddress = '$Emailaddress',  where id = '$id' ";
            if ($conn->query($sql)){                    
                header("Location: select.php?dbStatus=y");

            }else{
                echo "Error: ". $sql ."
                ". $conn->error;
            }
            $conn->close();

            }           

?>
