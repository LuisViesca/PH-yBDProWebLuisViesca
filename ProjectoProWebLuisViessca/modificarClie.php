<?php
include ('configBD.php');
session_start();

if(isset($_POST['regisCliente']))
{
    $id=$_POST['id'];
    $idnombre=$_POST['idnombre'];
    $apep=$_POST['apep'];
    $apem=$_POST['apem'];
     $direccion=$_POST['direccion'];
      $edad=$_POST['edad'];
       $num=$_POST['num'];
       $query=$connection->prepare ("UPDATE  clientes SET IDNOM='$idnombre',APEP='$apep',APEM='$apem',DIRECCION='$direccion',EDAD='$edad',NUM='$num' WHERE ID='$id'");
      $query->bindParam("id",$id,PDO::PARAM_STR);
     $query->bindParam("idnombre", $idnombre, PDO::PARAM_STR);
     $query->bindParam("apep", $apep, PDO::PARAM_STR);
     $query->bindParam("apem", $apem, PDO::PARAM_STR);
     $query->bindParam("direccion", $direccion, PDO::PARAM_STR);
     $query->bindParam("edad", $edad, PDO::PARAM_STR);
      $query->bindParam("num", $num, PDO::PARAM_STR);
       $result=$query->execute();
               
               if($result)
               {
               echo '<p class="sucees"> Se modifico </p>'; 
               }
               else
               {
                echo '<p class="error"> No se modifico </p>';
               }
                  
               
}
?>

<h1>ViescaElectronics</h1>
 <h2>Ingresar datos</h2>
<form action="" method="post"  name="regisCliente">
    <div class="form-element">
        <label>ID:</label>
        <link rel="stylesheet" href="estilologin.css"> 
        <input type="text" name="id" required/>
    </div>
    <div class="form-element">
        <label>Nombre:</label>
        <link rel="stylesheet" href="estilologin.css"> 
        <input type="text" name="idnombre" pattern="[a-zA-Z0-9]+" required/>
    </div>
    <div class="form-element">
        <label>Apellido paterno:</label>
        <link rel="stylesheet" href="estilologin.css"> 
        <input type="text" name="apep" pattern="[a-zA-Z0-9]+" required/>
    </div>
    <div class="form-element">
        <label>Apellido materno:</label>
        <link rel="stylesheet" href="estilologin.css"> 
        <input type="text" name="apem" pattern="[a-zA-Z0-9]+" required/>
    </div>
    <div class="form-element">
        <label>Direccion:</label>
        <link rel="stylesheet" href="estilologin.css"> 
        <input type="text" name="direccion"  required/>
    </div>
    <div class="form-element">
        <label>Edad:</label>
        <link rel="stylesheet" href="estilologin.css"> 
        <input type="text" name="edad" required/>
    </div>
<div class="form-element">
        <label>Numero:</label>
        <link rel="stylesheet" href="estilologin.css"> 
        <input type="tel" name="num" required/>
    </div>

    <button type="submit" name="regisCliente" value="regisCliente">Guardar datos</button>
</form>

