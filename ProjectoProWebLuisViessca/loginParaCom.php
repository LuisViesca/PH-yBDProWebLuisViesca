<?php
include ('configBD.php');
session_start();

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query=$connection->prepare("SELECT * FROM users WHERE USERNAME=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    
    $query->execute();
    
    $result=$query->fetch(PDO::FETCH_ASSOC);
   
if(!$result)
{
    echo '<p class="error">Datos erroenos</p>';
}
else 
{
   if(password_verify($password, $result['password']))
   {
       $_SESSION['user_id']=$result['id'];
       echo '<p class="sucess">Login Corecto</p>';
       
       if(isset($_SESSION['user_id']))
       {
           header('Location:inicio.php');
           exit;
       }
       else
       {
           header('Location:login.php');
           exit;
       }
  
   }
 else 
    {
      echo '<p class="error">Datos erroenos</p>';
    }
       
 }
   
}

    
 

?>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="estilologin.css"> 
    </head> 
    <body>
        <h2>Para continuar con la compra debe de inicair sesion, o crear una cuenta</h2>
        <h1>ViescaElectronics</h1>
        <h2>Ingresar datos</h2>
    <form method="post" action="" name="signin-form">
            <div class="form-element">
        <label>Usuario:</label>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required/>
    </div>
   
    <div class="form-element">
        <label>Contraseña:</label>
        <input type="password" name="password" required/>
    </div>
    <button type="submit" name="login" value="login">Inciar Sesion</button>
    <h3><a href="register.php">Registrarse</a><h3>
    </form>
    </body>
</html>