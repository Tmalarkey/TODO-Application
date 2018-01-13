<?php

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
		<li><a href='View.php'>View</a></li><br></ul>"
		?>
		</div>
<main>
<div>
	<?php
	echo"<h2 style='text-align: center' >Todo Delete</h2>";
	echo"<div><br><h2 style='text-align: center'>Number Of Total Task: 21</h2></div><br>";
	echo"<div><h2 style='text-align: center'>Pending: 4 &nbsp; Started: 5&nbsp; Completed: 3 &nbsp; Late: 11 </h2></div>";
		 
	?>

</main>
</body>
</div>
</html>