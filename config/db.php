<?php
	class konek{
		//properties
		private $dbHost;
		private $dbUser;
		private $dbPass;
		private $dbName;
		
		//constructor
		function __construct($a,$b,$c,$d){
			$this->dbHost = $a;
			$this->dbUser = $b;
			$this->dbPass = $c;
			$this->dbName = $d;
		}
		// method koneksi mysql
		function connect(){
			mysql_connect($this->dbHost,$this->dbUser,$this->dbPass);
				
			mysql_select_db($this->dbName);
		}
	}