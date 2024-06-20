<?php
    class clasedb{
		private$db;
		public function conectar(){
			$this->db= new mysqli("localhost","root","","guia_mnm","3306 ") or die ("No se pudo conectar con Mysql"); 
			return $this->db;
		}

        
	}
	
	$db=new clasedb();
	$conex=$db->conectar();
?>