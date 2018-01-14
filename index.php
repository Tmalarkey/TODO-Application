<?php
include("class_Lib.php");
?>
<?php
$dbCon = new dbInfo;
// create connection
$connection = new mysqli($dbCon->getServer(), $dbCon->getUser(), $dbCon->getPass());
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
<h2 style='text-align: center' >Todo List Information</h2>
	<?php
	$sql = "SELECT * FROM task, status, dueDate WHERE task.taskID = status.taskID AND task.taskID = dueDate.taskID GROUP BY task.taskID";
	$result = $connection->query($sql);
	$row_count = mysqli_num_rows($result);
	echo"<div><br><h2 style='text-align: center'>Number Of Total Task:";
	echo $row_count;
	echo"</h2></div><br>";
	$sql = "SELECT * FROM status WHERE status = 'Pending'";
	$result = $connection->query($sql);
	$row_count = mysqli_num_rows($result);
	echo"<div><h2 style='text-align: center'><a href='Pending.php'>Pending: </a>";
	echo $row_count;
	$sql = "SELECT * FROM status WHERE status = 'Started'";
	$result = $connection->query($sql);
	$row_count = mysqli_num_rows($result);
	echo"&nbsp; <a href='Started.php'>Started: </a>";
	echo$row_count;
	$sql = "SELECT * FROM status WHERE status = 'Completed'";
	$result = $connection->query($sql);
	$row_count = mysqli_num_rows($result);
	echo"&nbsp; <a href='Completed.php'>Completed:  </a>";
	echo$row_count;
	$sql = "SELECT * FROM status WHERE status = 'Late'";
	$result = $connection->query($sql);
	$row_count = mysqli_num_rows($result);
	echo"&nbsp; <a href='Late.php'>Late:  </a>";
	echo$row_count;
	echo"</h2></div>";
		 
	?>
</div>
</main>
<footer>
</footer>
</body>
</html>