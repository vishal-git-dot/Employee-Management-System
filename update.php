<?php

include "db.php";

$id = $_POST['id'];
$name = $_POST['name'];
$department = $_POST['department'];
$salary = $_POST['salary'];

mysqli_query($conn,"UPDATE employees 
SET name='$name', department='$department', salary='$salary'
WHERE id='$id'");

header("Location:index.php");

?>
