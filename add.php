<link rel="stylesheet" href="style.css">

<div class="container">

<h2>Add Employee</h2>

<form action="insert.php" method="POST" enctype="multipart/form-data">

<input type="text" name="name" placeholder="Name" required>

<input type="email" name="email" placeholder="Email">

<select name="department">
<option>HR</option>
<option>IT</option>
<option>Sales</option>
</select>

<input type="number" name="salary" placeholder="Salary">

<input type="file" name="photo">

<button type="submit">Save</button>

</form>

</div>
