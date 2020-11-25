<!DOCTYPE html>
<?php
session_start();

if(!isset($_SESSION['user_id']))
{
    header('Location:login.php');
    exit;
}
else
{
    
}
?>
<head>
        <meta charset="UTF-8">
        <title>Viescaelectronics</title>
        <link rel="stylesheet" href="Estilo.css">
    </head>
<body>
    <h1>ViescaElectronics</h1>
    <br></br>
         <div id="menu">
             <ul>
                 <li id="item"><a href="#">Perfil</a>
                     <ul id="desple">
                         
                         <li><a href="regisCliente.php">Ingresar datos</a></li>
                         <li><a href="verDatos.php">Ver datos</a></li>
                         <li><a href="modificarClie.php">Modificar</a></li>
                         <li><a href="eliminarDatos.php">Eliminar</a></li>
                         <li><a href="index.php">Salir de la cuenta</a></li>
                         
                     </ul>
                 </li>
                 <li id="item"><a href="#">Carrito</a>
                     <ul id="desple">
                         <li><a href="cart.php">Favoritos</a></li>
                        
                         
                     </ul>
                     
                 </li>
                 
                 <li id="item"><a href="#">Productos</a>
                     <ul id="desple">
                         <li><a href="indexofertas.php">Descuentos 50% (Solo hoy)</a></li>
                         <li><a href="indexcelulares.php">Celulares</a></li>
                         <li><a href="indexcargadores.php">Cargadores</a></li>
                         <li><a href="indexaudifonos.php">Audifonos</a></li>
                         <li><a href="indexotros.php">Otros</a></li>
                            
                     </ul>
                 </li>
                 <li id="item"><a href="#">Politica</a>
                     <ul id="desple">
                         <li><a href="politicaseguridad.php">Politica de seguridad</a></li>
                         <li><a href="misionyvision.php">Misión y vision</a></li>
                            
                     </ul>
                     
                 </li>
                  </li>
                 <li id="item"><a href="index.php">Inicio</a>
                  </li>
                   <li id="item"><a href="busca.php">Buscar</a>
                  </li>
                 
             </ul>
             
         </div>
         <br></br>
         
         <div class="slider">
             <ul>
             <li><img src="Imagenes/imagen4.jpg"></li>
             <li><img src="Imagenes/imagen5.jpg"></li>
<!--             <li><img src="Imagenes/imagen4.jpg"></li>
             <li><img src="Imagenes/imagen5.jpg"></li>-->
             <li><img src="Imagenes/imagen6.jpg"></li>
             <li><img src="Imagenes/imagen7.jpg"></li>
             <li><img src="Imagenes/imagen8.jpg"></li>
<!--             <li><img src="Imagenes/imagen5.jpg"></li>-->
             <li><img src="Imagenes/imagen4.jpg"></li>
             <li><img src="Imagenes/imagen5.jpg"></li>
          
             </ul>
                
         </div> 
         <footer>
             <div class="container-footer-all">
             <div class="container-body">
                 <div class="column1">
                     <h2>Mas informacion de la empresa </h2>
                     <p>Venta de productos tecnologicos, al mejor precios, porductos de calidad y 100% segura</p>
                     
                 </div>
                 <div class="column2">
                     <h2>Visita nuestras redes socilaes:</h2>
                     <div class="row">
                         <img src="icon/icon facebook.png">
                         <label>Viesca-electronics</label>
                     </div>
                      <div class="row">
                          <img src="icon/twitter.png">
                         <label>ViescaElectronics</label>
                     </div>
                      <div class="row">
                          <img src="icon/instagram.png">
                         <label>ViescaElectronics15</label>
                     </div>
                 </div>
                 <div class="column3">
                     <h2>Contactanos:</h2>
                     <div class="row2">
                         <img src="icon/house.png">
                         <label>Italia #503, Fama 3, Santa Catarina, NL</label>
                         
                     </div>
                      <div class="row2">
                          <img src="icon/smartphone.png">
                         <label>81825772589</label>
                         
                     </div>
                      <div class="row2">
                          <img src="icon/contact.png">
                         <label>viescaelectronics@gmail.com</label>
                         
                     </div>
                 </div>
             </div>
             
             </div>    
             <div class="container-footer">
                 <div class="footer">
                 <div class="copyright">
                     ©2020 Todos Los Derechos Reservados|<a href="">ViescaElectrinics</a>
                 </div>
                 <div class="Information">
                     <a href="Informacioncompania.php">Informacion Compañia</a>|<a href="">Privacion y Politica</a>|<a href="terminosycondiciones.php">Terminos y Condiciones</a>
                 </div>
                 </div>
             </div>
         </footer>

         
</body>

</html>