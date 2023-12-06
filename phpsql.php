<?php
// connect from mysql

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "youtube";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// insert data from table
$sql = "insert into test (name, email, age, dob) VALUES ('ali2', 'ali@email.com', 21, '2010-10-20')";

if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully";
  } else {
    echo "Data insertion failed: " . mysqli_error($conn);
  }

  // insert data with pdo


  
  

?>