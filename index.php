<?php include '../inc/header.php' ?>
<form action="" class="formulario" method="POST">
<h2 style="text-align: center;">LOGIN</h2>
  <div class="form-group">
    <label for="email">Email :</label>
    <input type="email" class="form-control" id="email"
    name="correo" placeholder="Email">
    
  </div>
  <div class="validacion">
						
  </div>
  <div class="form-group">
    <label for="pass1">Contraseña</label>
    <input type="password" class="form-control" id="pass1" name="pass" placeholder="Contraseña">
  </div>

   <input type="submit" name="submit" value="Registrar">
  
  <!-- <button type="submit" class="btn btn-primary">Ingresar</button>
  <a href="registro.php">link</a> -->

 <a href="registro.php"><button type="submit" class="btn btn-primary">No tienes cuenta?</button></a>

 <?php
        if(isset($_POST['submit'])){
          include_once ("ingreso_usuario.php");
        }


      ?>
  
</form>	

<?php include '../inc/script.php'; ?>
<script src="../js/validar.js"></script>