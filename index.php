<?php
$sever = "localhost";
$username = "root";
$password = "";
// create connection
$connection = new mysqli($sever, $username, $password);
//test the connection
if ($connection->connect_error)
{
	die("Failed to connect" . $connect->connect_error);
}
//Create the Database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS test1";
if($connection->query($sql) === FALSE)
{
	echo "ERROR: Database not created"  . $connection->error;
}
$sql = "use test1";
$connection->query($sql);

$sql = "CREATE TABLE IF NOT EXISTS task(taskID INT AUTO_INCREMENT, name VARCHAR(25), comment VARCHAR(100), PRIMARY KEY(taskID))";
if($connection->query($sql) === FALSE)
{
	echo "ERROR: Table not created"  . $connection->error;
}

$sql = "CREATE TABLE IF NOT EXISTS status(taskID INT, status VARCHAR(25), PRIMARY KEY(taskID), FOREIGN KEY(taskID) references task(taskID))";
if($connection->query($sql) === FALSE)
{
	echo "ERROR: Table not created"  . $connection->error;
}

$sql = "CREATE TABLE IF NOT EXISTS dueDate(taskID INT, ddate VARCHAR(20), PRIMARY KEY(taskID), FOREIGN KEY(taskID) references task(taskID))";
if($connection->query($sql) === FALSE)
{
	echo "ERROR: Table not created"  . $connection->error;
}
$connection->close();

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
	<?php
	echo"<h2 style='text-align: center' >Todo List Information</h2>";
	echo"<div><br><h2 style='text-align: center'>Number Of Total Task: 21</h2></div><br>";
	echo"<div><h2 style='text-align: center'>Pending: 4 &nbsp; Started: 5&nbsp; Completed: 3 &nbsp; Late: 11 </h2></div>";
		 
	?>

</main>
</body>
</div>
</html>