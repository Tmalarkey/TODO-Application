<?php

	class task
	{
		var $taskid 
		var $name
		var $comment
		var $status
		var	$ddate
		function __construct($tId,$tName,$tComment,$tComment,$tStatus,$tDate)
		{
			$this->taskid =$tId;
			$this->name =$tName;
			$this->comment =$tComment;
			$this->status =$tStatus;
			$this->ddate =$tDate;
		}
		function setId($newId)
		{
			$this->taskid = $newId;
		}
		function setName($newName)
		{
			$this->name = $newName;
		}
		function setComment($newComment)
		{
			$this->comment = $newComment;
		}
		function setStatus($newStatus)
		{
			$this->status = $newStatus;
		}
		function setDdate($newDate)
		{
			$this->ddate = $newDate;
		}
		function getId()
		{
			return $this->taskid;
		}
		function getName()
		{
			return $this->name;
		}
		function getComment()
		{
			return $this->comment;
		}
		function getStatus()
		{
			return $this->status;
		}
		function getDdate()
		{
			return $this->ddate;
		}
	}
	
	class toDoList
	{
		
	}
	
	class dbInfo
	{
		$server = "localhost";
		$username = "root";
		$password = "";
		function getServer()
		{
			return $server;
		}
		function getUser()
		{
			return $username;
		}
		function getPass()
		{
			return $password;
		}
	}
		
?>