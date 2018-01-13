
<! DOCTYPE html>
<html lang = "en">
<head>
	<link rel = "stylesheet" href = "style.css">
	<title> To Do List App </title>
	<meta charset = "utf-8">
</head>
<body>
<div id = "wrapper">
<header>
<?php
echo "<h1>TODO List Application</h1>";
?>
</header>
<div id = "nav">
		<?php
		echo"<ul>
		<li><a href='index.php'>Main</a></li><br>
		<li><a href='Add.php'>Add</a></li><br>
		<li><a href='Delete.php'>Delete</a></li><br>
		<li><a href='View.php'>View</a></li><br></ul>";
		?>
		</div>
<main>
<div>
<h2 style='text-align: center' >Add a Task</h2>

<form action="Main.php" method="post" >
Name: <input type="text" name="name"><br><br>
Comment: <input type="text" name="comment"><br><br>
Due Date: <input type="date" name="date"><br><br>
Status: <select name="recommend">
	<option value="Pending">Pending</option>
	<option value="Started">Started</option>
	<option value="Completed">Completed</option>
	<option value="Late">Late</option>
	</select>
	&nbsp;
<input type="submit" name="submit">
</form>
		 


</main>
</body>
</div>
</html>
<?php

?>