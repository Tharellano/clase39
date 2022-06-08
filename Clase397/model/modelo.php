<?php
	class modelo{
		
		private $bd;
		private $encomienda;
	 
		public function __construct(){
			
			$this->bd = Conectar::conexion();
			$this->encomienda = array();
			
		}
		
		public function getEncomienda(){
			
			$sql = "SELECT * FROM table1";
			$consulta = $this->bd->query($sql);
			
			while($filas=$consulta->fetch_assoc()){
				$this->encomienda[]=$filas;
			}
			return $this->encomienda;
			
		}

	}
?>