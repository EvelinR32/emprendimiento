<?
$fecha=$_POST['fecha'];
$nombre=$_POST['nombre'];
include 'config/conexion.php';
if(empty($nombre) || empty($fecha))
{
echo '<br>Los campos Marcados con (*) son obligatorios';
} else{
include 'config/conexion.php';
if(!$con){
 die("Error en la conexión");
 }
$sql ="INSERT INTO tblautor(nombre,fecha_nacimiento,nacionalidad,cons)values('$nombre','$telefono','$fecha','$cons')";
echo '<br>'.$sql;
$consulta = mysqli_query($con,$sql)
or die("Fallo en la inserción".mysqli_error($con));
mysqli_close($con);
}

?>
<!DOCTYPE html>
<html lang="en">
<?include 'head.php'?>
<body>
<?include 'Presentacion.php'?>

<div class="container">
  <h2> Autores || <a href="index.php">
    Regresar</a> </h2>
  <div class="row">
  <div class="col">
  <form action="#" method="POST">
   <input type="text" 
          name="nombre" 
          maxlength="30"
          class="form control"
          placeholder="nombre del autor"
          title="Name autor, your length max of field is 30">
    <label for="fecha">birth date</label>
    <input type="date" name="fecha">
    <label for="nacinalidad">nacionality</label>
    <input type="text" name="nacionalidad">
    <label for="cons">cons</label>
    <input type="text" name="cons">
    <button type=="submit">Save</button>
  </form>
    
  </div>  
   <div class="col">
     Listado de autores
     <?
     $sql="SELECT nombre, fecha_nacimiento, nacionalidad, cons FROM tblautor";
     $registro=mysqli_query($con,$sql) or die('Error en sql');
  echo '<table><tr><td>nombre</td><td>fecha-nacimiento</td><td>nacionalidad</td><td>cons</td></tr>';
  while($r=mysqli_fetch_array($registro)){
    echo "<tr><td>" .$r['nombre']. "</td><td>" .$r['fecha_nacimiento'].  "</td><td>" .$r['nacionalidad'].  "</td><td>" .$r['cons'].  "</td>
     </tr>";
  }
  mysqli_close($con);
    ?>
  </div>  
  </div>

</div>
</body>
</html>
