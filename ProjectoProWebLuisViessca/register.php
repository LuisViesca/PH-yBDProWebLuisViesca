<?php
include ('configBD.php');
session_start();

if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password= $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
    
    $query = $connection->prepare("SELECT*FROM users WHERE EMAIL=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
    
    if($query->rowCount()>0)
            {
                echo '<p class="error"> Correo ya existente. Intente con otro</p>';
            }
            if($query->rowCount()==0)
            {
               $query = $connection->prepare("INSERT INTO users(USERNAME,PASSWORD,EMAIL)"
                         . " VALUES(:username,:password_hash,:email)");
                $query->bindParam("username", $username, PDO::PARAM_STR);
                $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
                $query->bindParam("email", $email, PDO::PARAM_STR);
                $result=$query->execute();
                
                if($result)
                {
                    echo '<p class="sucess"> Usuario Registrado </p>';
                }
                else
                {
                    echo '<p class="error"> Usuario No Registrado </p>';
                }
                 
            }            
            
}

?>



 <h1>ViescaElectronics</h1>
 <h2>Ingresar datos</h2>
<form method="post" action name="singup-form">
    <div class="form-element">
        <label>Usuario:</label>
        <link rel="stylesheet" href="estilologin.css"> 
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required/>
    </div>
    <div class="form-element">
        <label>Email:</label>
        <input type="email" name="email" required/>
    </div>
    <div class="form-element">
        <label>Contraseña:</label>
        <input type="password" name="password" required/>
    </div>
    <button type="submit" name="register" value="register">Registrar</button>
</form>

