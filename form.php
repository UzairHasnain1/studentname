<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<center>
    <form method="POST" id="my_form" action="process.php">
        <br>id:<br><br>
		<input type="number" name="id">
		<br><br>
        <br>Student_Name:<br><br>
		<input type="text" name="student_name">
		<br><br>
        <br>Student_Age:<br><br>
		<input type="number" name="student_age">
        <br>Student_Semester:<br><br>
		<input type="text" name="student_semester">
		<br><br>
		<input type="submit" name="save" value="submit">

    </form>
</center>

<script>
    const form = document.getElementById('my_form');

    form.reset();
</script>

</body>
</html>