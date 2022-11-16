<div class="col-sm-8">

<?
$campo2=$_POST['campo2'];


if(strlen($campo2)>0){
$sql="SELECT Nombre,tipo,codigo,logo
FROM tbleditorial where nombre like '$campo2%'";
include 'config/conexion.php';
$registro=mysqli_query($con,$sql) or die('Error en sql');
echo '<center><table><tr><td>Nombre</td><td>codigo</td><td></td></tr>';
  while($r=mysqli_fetch_array($registro)){
    echo "<tr><td>" .$r['Nombre']. "</td><td>" .$r['tipo']."</td><td>" .$r['codigo']. "</td><td><img src=img/".$r['logo']."></td>
     </tr>";
  }
}
?>

</table>
  </center>
</div>