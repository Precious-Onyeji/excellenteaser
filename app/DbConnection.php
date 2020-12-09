<?php

class DbConnection {

	public $dbCon;

	public function __construct() {

		 $this->connect();
	}

	public function connect() {

		$this->dbCon = mysqli_connect("localhost","root","","excellent_easerdb"); 

		return $this->dbCon;
	}

}