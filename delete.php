<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js

<body>
    
</body>
</html>


<?php

include('conn.php');

$a = $_GET['id'];
$sql = "DELETE FROM 'student' WHERE id = '$id'";
$result=mysqli_query($conn,$sql);
if($result){
    header('locatiom: retrieve.php');
    echo '<div class="alert alert-danger" role="alert">
    A simple danger alert-check it out!
    </div>';
}
else{
    echo 'Error';
}


?>