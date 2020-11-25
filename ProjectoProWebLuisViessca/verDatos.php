<?php
include 'configBD.php';
session_start();

if(isset($_POST['verDatos']))
{
  $id=$_POST['id'];
  $query=$connection->prepare ("SELECT * FROM clientes WHERE ID=:id");
  $query->bindParam("id",$id,PDO::PARAM_STR);
  $query->execute();
  
  while($row= $query->fetch(PDO::FETCH_ASSOC))
  {
      echo "Nombre: ".$row['IDNom']." ".$row['Apep']." ".$row['Apem']."<br>";
      echo "Telefono:".$row['Num']."<br>";
      echo "Direccion:".$row['Direccion']."<br>";
  }
 
}

?>
<h1>ViescaElectronics</h1>
 <h2>Ingresar datos</h2>
<form action="" method="post"  name="regisCliente">
<!--    <div class="form-element">
        <label>ID:</label>
        <link rel="stylesheet" href="estilologin.css"> 
        <input type="text" name="id" required/>
    </div>-->
    <div class="form-element">
        <label>Nombre:</label>
        <link rel="stylesheet" href="estilologin.css"> 
        <input type="text" name="id" pattern="[a-zA-Z0-9]+" required/>
    </div>
 <button type="submit" name="verDatos" value="verDatos">Buscar</button>
</form>
