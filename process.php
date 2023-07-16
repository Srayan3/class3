<?php
$name = $_GET['name'];
$job = $_GET['job'];
$age = $_GET['age'];
include 'conn.php';
$insertQuery = "INSERT INTO `users`(`name`, `job`, `age`) VALUES ('$name', '$job', '$age')";
$injector = mysqli_query($connection, $insertQuery);
if($injector){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
</head>
<body>
    <h1 style="color: green; text-align: center;">Data inserted to the database successfully</h1>
</body>
</html>
<?php
}else { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="color: red; text-align: center;">The failed to go through the database</h1>
</body>
</html>
<?php
}
?>