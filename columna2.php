<div class="col-sm-6">
  
     <?
   $campo1=trim($_POST['campo1']);

 
if(strlen($campo1)>0){
   $sql="SELECT codigo,nombre,tema,editoria,nombreautor,caratula
          FROM tbllibro where nombre like '$campo1%'";
include 'config/conexion.php';
  $registro=mysqli_query($con,$sql) or die('Error en sql');
  echo '<table><tr><td>codigo</td><td>Nombre</td><td></td></tr>';
  while($r=mysqli_fetch_array($registro)){
    echo "<tr><td>" .$r['codigo']. "</td><td>" .$r['nombre']. "</td><td><img src=img/".$r['caratula']."></td>
     </tr>";
  }
}
?>
</table>
  </div>