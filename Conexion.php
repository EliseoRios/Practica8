<?php
  class Conexion
  {
   public $mysql;
   private $Error;

   public function Abrir()
   {
     try
	 {
	  $this->mysql = new mysqli("localhost","root","","programacion");

	  if($this->mysql->connect_errno)
	  {
	    throw new Exception("Fallo al conectar a MySQL: (" . $this->mysql->connect_errno . ") " . $this->mysql->connect_error);//tal error por tal cosa
	  }
	  return true;
	 }
	 catch (Exception $e)
	 {
	  $this->Error = $e->getMessage();
	  return false;
	 }
   }

   public function MandarError()
   {
    return $this->Error;
   }//no sirve aqui
  
   public function Cerrar()
   {
     $this->mysql->close();
   }
  }
?>