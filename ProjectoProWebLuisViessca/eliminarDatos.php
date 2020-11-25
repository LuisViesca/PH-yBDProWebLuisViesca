<?php
include ('configBD.php');
session_start();

if(isset($_POST['eliminarDatos']))
{
    $id=$_POST['id'];
  
       $query=$connection->prepare ("DELETE FROM clientes WHERE ID='$id'");
      $query->bindParam("id",$id,PDO::PARAM_STR);
     
       $result=$query->execute();
               
               if($result)
               {
               echo '<p class="sucees"> Eliminado </p>'; 
               }
               else
               {
                echo '<p class="error"> No Eliminado</p>';
               }
                  
               
}
?>

<h1>ViescaElectronics</h1>
 <h2>Ingresar datos</h2>
<form action="" method="post"  name="eliminarDatos">
    <div class="form-element">
        <label>ID:</label>
        <link rel="stylesheet" href="estilologin.css"> 
        <input type="text" name="id" required/>
    </div>

    <button type="submit" name="eliminarDatos" value="eliminarDatos">Eliminar</button>
</form>

