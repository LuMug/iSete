<?php
	class DB {
		private $host;
		private $usr;
		private $pwd;
		private $db;
		private $conn;
		private $res;
		function __construct($host, $usr, $pwd, $db=''){
			$this->host = $host;
			$this->usr = $usr;
			$this->pwd = $pwd;
			$this->db = $db;
			$this->conn = null;
			$this->res = null;
		}
		public function start() {
			if($this->conn != null){
				$this->stop();
			}
			$this->conn = mysqli_connect($this->host, $this->usr, $this->pwd, $this->db);
			return $this->conn;
		}
		public function stop(){
			mysqli_close($this->conn);
			$this->conn = null;
		}
		public function query($query){
			$this->res = mysqli_query($this->conn, $query);
			return $this->res;
		}
		public function fetch() {
			return mysqli_fetch_assoc($this->res);
		}
		public function rows(){
			return mysqli_num_rows($this->res);
		}
	}
	$db = new DB("127.0.0.1", "iSete", "isete1", "isete");
	session_start();
?>