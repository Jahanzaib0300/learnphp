<?php
// For Get and Post show Data

if($_SERVER['REQUEST_METHOD']=='GET'){
$name = $_GET['name'];
$email = $_GET['email'];
$password = $_GET['pswd'];

echo "Name: $name<br>";
echo "Email: $email<br>";
echo "Password: $password<br>";

echo '<strong>Success!</strong> Your Name Email and Password Submited Successfully';

//  For Session 

}
?>