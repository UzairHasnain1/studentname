<?php

include 'newconn.php';

$id = $_GET['id'];

$showquery = "SELECT * from student where id = '$id'";

$showdata = mysqli_query($conn,$showquery);

$arrdata = mysqli_fetch_array($showdata);

if(isset($_POST['btn'])){


    $student_name = $_POST['student_name'];
    $student_age = $_POST['student_age'];
    $student_semester = $_POST['student_semester'];

$query = "UPDATE student set student_name='$student_name', student_age='$student_age', student_semester='$student_semester' where id = '$id' ";

$res = mysqli_query($conn,$query);

header('location:show.php');


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    
<center>
    <form method="post" id="myform">
		
		Student_name:<br><br>
		<input type="text" name="student_name" value="<?php echo $arrdata['student_name']; ?>"/>
		<br><br>
		Student_age:<br><br>
		<input type="text"  name="student_age" value="<?php echo $arrdata['student_age']; ?>"/>
		<br><br>
		Student_semester:<br><br>
		<input type="text"  name="student_semester" value="<?php echo $arrdata['student_semester']; ?>"/>
		<br><br>
		<input type="submit" name="btn" value="submit">
	</form>
</center>

</body>
</html>