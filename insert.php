<?php

include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$department = $_POST['department'];
$salary = $_POST['salary'];

$photo = $_FILES['photo']['name'];
$tmp = $_FILES['photo']['tmp_name'];

move_uploaded_file($tmp,"upload/".$photo);

mysqli_query($conn,"INSERT INTO employees(name,email,department,salary,photo)
VALUES('$name','$email','$department','$salary','$photo')");

header("Location:index.php");

?>
