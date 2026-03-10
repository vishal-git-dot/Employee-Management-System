<?php include "db.php"; ?>

<link rel="stylesheet" href="style.css">

<div class="container">

<h2>Employee Management</h2>

<a href="add.php">Add Employee</a>

<form method="GET" action="">
<br>
<select name="department">
<option value="">All Departments</option>
<option value="HR">HR</option>
<option value="IT">IT</option>
<option value="Sales">Sales</option>
</select>

<button type="submit">Search</button>
</form>

<?php

$limit = 5;

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$start = ($page-1) * $limit;

$where = "";

if(isset($_GET['department']) && $_GET['department']!=""){
    $dept = $_GET['department'];
    $where = "WHERE department='$dept'";
}

$result = mysqli_query($conn,"SELECT * FROM employees $where LIMIT $start,$limit");

?>

<table>

<tr>
<th>ID</th>
<th>Photo</th>
<th>Name</th>
<th>Email</th>
<th>Department</th>
<th>Salary</th>
<th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<tr>

<td><?php echo $row['id']; ?></td>

<td>
<img src="upload/<?php echo $row['photo']; ?>" width="50">
</td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['department']; ?></td>

<td><?php echo $row['salary']; ?></td>

<td>

<a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>

<a class="delete" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>

</td>

</tr>

<?php } ?>

</table>

</div>
