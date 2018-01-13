<?php

	class task
	{
		var $taskid;
		var $name;
		var $comment;
		var $status;
		var	$ddate;
		
		function __construct(){
			$this->taskid ="";
			$this->name ="";
			$this->comment ="";
			$this->status ="";
			$this->ddate ="";
			
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
		public $tasks = array();
	}
	
	class dbInfo
	{
		var $server = "localhost";
		var $username = "root";
		var $password = "";
		function getServer()
		{
			return $this->server;
		}
		function getUser()
		{
			return $this->username;
		}
		function getPass()
		{
			return $this->password;
		}
	}
		
?>