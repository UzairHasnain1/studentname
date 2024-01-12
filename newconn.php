<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'today';

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    echo 'Work';
}
else{
    echo 'Error';
}

?>