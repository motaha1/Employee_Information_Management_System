<?php 

$storeIn = "/Images/";

$target_path = "Images/"; 

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

$storeIn = $storeIn . $_FILES['uploadedfile']['name'];
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) { 
    echo "upload done successfully"; 
} else{ 
    echo "upload error"; 
}

$username = "root";
$password = "";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
$conn = new mysqli('localhost', $username, $password , "net");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO images VALUES ('NULL' , '$storeIn')";

if ($conn->query($sql) === TRUE) {
  //echo "insert done";
} else {
  echo "insert err " . $sql . "\t" . $conn->error;
}

$conn->close();


?>