<?php
 $Id = $_POST["txtId"];
 $Accion = $_POST["txtAccion"];
 
 require_once("Acciones.php");
 $acciones = new Acciones();
 $acciones->$this->Accion."()";
?>