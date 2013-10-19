<?php
  class conexion
  {
   $mysql;
   $Error;

   public function Abrir()
   {
     try
	 {
	  this->$mysql = new mysqli("localhost","root","","programacion");

	  if($this->mysql->connecterrno)
	  {
	    thow new Exception ("Fallo al conectar a MySql: (".$this->mysql->connect_errno.")".$this->mysql->connect_error;
	  }
	  return true;
	 }
	 catch (Exception $e)
	 {
	  $this->Error = $e->getMessage();
	  return false;
	 }
   }

   public MandarError()
   {
    return $this->Error;
   }
  
   public function Cerrar()
   {
     $mysql->close();
   }//no sirve aqui dentro
  }
?>