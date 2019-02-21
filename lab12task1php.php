<?php
//task:1 	Loads data from a text file into a MYSQL database using LOAD DATA command.
$conn = mysqli_connect("localhost:3306","root","","employeedb");
if($conn)
{
	echo("connected successfully"); 
}
else { 
	echo("connection unsuccessfully"); 
}

$file="C:/xampp/htdocs/lab12task1.txt";
$sql = "LOAD DATA INFILE '".$file."' INTO TABLE data FIELDS TERMINATED BY ',';";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>


