<?php

// json encode


$obj= array(

    "name" => "jahanzaib",
    "email" => "jaha@email.com",
    "age"   =>  30
);

$json= json_encode($obj)."<br><br>";
echo  " Json Encode" . $json;

// json decode

$jsonobj = '{"name":"jahanzaib","email":"jaha@email.com","age":30}';

$decode = json_decode($jsonobj);
print_r($decode);


?>