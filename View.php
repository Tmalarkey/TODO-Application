<?php
include("class_Lib.php");
?>


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
<h2 style='text-align: center' >View All Tasks</h2>
<table>
	<tr>
		<th>Task ID</th>
		<th>Name</th>
		<th>Comment</th>
		<th>Due Date</th>
		<th>Status</th>
	</tr>
	
</table>

</main>
</body>
</div>
</html>