<html>
 <input type="hidden" name="accion" value="Ver"/>
 <input type="hidden" name="accion" value="Eliminar"/>
 <input type="hidden" name="accion" value="Actualizar"/>
 <input typ="submit" name="Guardar" id="submit"/>
 <?php
  if ($accion=="Ver")
  {
   echo "Ver";
  }
  if ($accion=="Eliminar")
  {
   echo "Eliminar";
  }
 ?>
</html>