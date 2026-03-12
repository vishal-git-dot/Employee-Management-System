<?php
include "db.php";

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM employees WHERE id=$id");

$row = mysqli_fetch_assoc($result);
?>

<link rel="stylesheet" href="style.css">

<div class="container">

<h2>Edit Employee</h2>

<form action="update.php" method="POST">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

<input type="text" name="name" value="<?php echo $row['name']; ?>">

<select name="department">

<option <?php if($row['department']=="HR") echo "selected"; ?>>HR</option>

<option <?php if($row['department']=="IT") echo "selected"; ?>>IT</option>

<option <?php if($row['department']=="Sales") echo "selected"; ?>>Sales</option>

</select>

<input type="number" name="salary" value="<?php echo $row['salary']; ?>">

<button type="submit">Update</button>

</form>

</div>
