<?php

$servername = "localhost";
$username = "lalegua";
$password = "lalegua";
$db = "miembros";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully\n";

$name =  $_POST['name'];
$amount = $_POST['visitantes'];
 
// Attempt insert query execution
$sql = "INSERT INTO miembros (name, amount) VALUES ('$name', '$amount')";
echo "\nNew records created successfully";

if($conn->query($sql)  === TRUE){
    echo "Records added successfully.\n";
} else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>  