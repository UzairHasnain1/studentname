<?php
include_once 'newconn.php';
if(isset($_POST['save']))
{
    $id = $_POST['id'];
    $student_name = $_POST['student_name'];
    $student_age = $_POST['student_age'];
    $student_semester = $_POST['student_semester'];
    $sql = "INSERT INTO student (id,student_name,student_age,student_semester)
    VALUES ('$id','$student_name','$student_age','$student_semester')";
    if(mysqli_query($conn,$sql))  {
        echo "New record created  successfully !";
        header('Location:show.php');
    }

}




?>