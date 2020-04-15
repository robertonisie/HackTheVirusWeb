<?php 
	class DbConnect {
		private $host = '193.226.29.22';
		private $dbName = 'hackthevirus';
		private $user = 'htv';
		private $pass = 'HTVpass1@';

		public function connect() {
			try {
				$conn = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->dbName, $this->user, $this->pass);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $conn;
			} catch( PDOException $e) {
				echo 'Database Error: ' . $e->getMessage();
			}
		}
	}
 ?>