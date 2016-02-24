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
		public function error() {
			return "(" . mysqli_errno($this->conn) . ") " . mysqli_error($this->conn);
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
	function pwdrnd($len){
		$res = "";
		for($i = 0; $i < $len; $i++){
			$chrs = array(rand(65, 90), rand(97, 122), rand(48, 57));
			$res .= chr($chrs[rand(0, 2)]);
		}
		return $res;
	}
	session_start();
	function sess($name, $val=""){
		if($val != ""){
			$_SESSION[$name] = $val;
		}
		else{
			return $_SESSION[$name];
		}
	}
	if(sess("db") != null){
		sess("db", new DB("localhost", "iSete", "isete1", "isete"));
	}
?>