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
$sql = "use test1";
$connection->query($sql);
$sql = "SELECT * FROM task, status, dueDate WHERE task.taskID = status.taskID AND task.taskID = dueDate.taskID GROUP BY task.taskID";
$result = $connection->query($sql);
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
<h2 style='text-align: center' >Delete a Task</h2>
<h3 style='text-align: center' >Select the task id to delete.</h2>
<form method="post" >
Task Id: <?php
	if($result)
	{
		echo "<select name='taskId'>";
		while($row = mysqli_fetch_array($result))
		{
			echo"<option>";
			echo $row['taskID'];
			echo"</option>";
		}
		echo "</select>";
	}
	else
	{
		echo "<br><h2>No Tasks currently</h2>";
	}
?>
<br><br>
<input type="submit" name="submit">
</form>
</main>
</body>
</div>
</html>
<?php
if(!empty($_POST["taskId"]))
{
	$sql = "DELETE FROM task WHERE taskID = '$_POST[taskId]'";
	if($connection->query($sql) === FALSE)
	{
		echo "ERROR: Deletion Error "  . $connection->error;
	}
	$sql = "DELETE FROM status WHERE taskID = '$_POST[taskId]'";
	if($connection->query($sql) === FALSE)
	{
		echo "ERROR: Deletion Error "  . $connection->error;
	}
	$sql = "DELETE FROM duedate WHERE taskID = '$_POST[taskId]'";
	if($connection->query($sql) === FALSE)
	{
		echo "ERROR: Deletion Error "  . $connection->error;
	}
	header("refresh:0; url=Delete.php");
}
$connection->close();
?>