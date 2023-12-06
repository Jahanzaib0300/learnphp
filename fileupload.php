<?php
 // for set variable
if(isset($_FILES['image'])){

    echo"<pre>";
    print_r($_FILES);
    echo"</pre>";

    // for check image size name and type
    $name = $_FILES['image']['name'];
    $size = $_FILES['image']['size'];
    $tmp = $_FILES['image']['tmp_name'];
    $type = $_FILES['image']['type'];

    // for upload images in folder

    if(move_uploaded_file($tmp,"upload-images/". $name)){
        echo" file uploaded successfully";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">

<input type="file" name="image"><br><br>
<input type="submit">


</form>    

</body>
</html>