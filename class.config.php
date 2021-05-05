<?php 
	class DbConfig{
		private $host;
		private $user;
		private $pass;
		private $database;

		protected function connect(){
			$this->host ='localhost';
			$this->user ='root';
			$this->pass ='';
			$this->database ='chatapp';

			// connect
			$conn =new mysqli($this->host, $this->user, $this->pass, $this->database);
			return $conn;
		}
	}
	
?>