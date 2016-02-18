<?php
	class DB {
		private $host;
		private $usr;
		private $pwd;
		private $db;
		private $conn;
		function __construct($host, $usr, $pwd, $db=''){
			$this->host = $host;
			$this->usr = $usr;
			$this->pwd = $pwd;
			$this->db = $db;
			$this->conn = null;
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
			return mysqli_query($this->conn, $query);
		}
		public static function fetch($result) {
			return mysqli_fetch_assoc($result);
		}
	}
	$db = new DB("127.0.0.1", "iSete", "isete1", "isete");
?>