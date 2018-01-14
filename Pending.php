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
<h2 style='text-align: center' >View All Pending Tasks</h2>
<table>
	<tr>
		<th>Task ID</th>
		<th>Name</th>
		<th>Comment</th>
		<th>Due Date</th>
		<th>Status</th>
	</tr>
	<?php
	$sql = "use test1";
	$connection->query($sql);
	$sql = "SELECT * FROM task, status, duedate WHERE task.taskID = status.taskID AND task.taskID = dueDate.taskID AND status = 'Pending' GROUP BY task.taskID";
	$result = $connection->query($sql);
	if($result)
	{
		while($row = mysqli_fetch_array($result))
		{
		$vTasks = new task();
		echo "<tr>";
		$vTasks->setId($row['taskID']);
		echo "<td>";
		echo $vTasks->getId();
		echo "</td>";
		$vTasks->setName($row['name']);
		echo "<td>";
		echo $vTasks->getName();
		echo "</td>";
		$vTasks->setComment($row['comment']);
		echo "<td>";
		echo $vTasks->getComment();
		echo "</td>";
		$vTasks->setDdate($row['ddate']);
		echo "<td>";
		echo $vTasks->getDdate();
		echo "</td>";
		$vTasks->setStatus($row['status']);
		echo "<td>";
		echo $vTasks->getStatus();
		echo "</td>";
		echo "</tr>";
	    }
	}
	$connection->close();
	?>
	
</table>

</main>
</body>
</div>
</html>