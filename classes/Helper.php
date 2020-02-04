<?php 

class Helper
	{ 
		private $db;
		
		
		 public function __construct()
		{
			$this->db = new Database();
			

		}

		public function validation($data)
		{
			$data = trim($data);
			$data = htmlspecialchars($data);
			$data = stripcslashes($data);

			return $data;

		}
	}


?>