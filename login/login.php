<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ingresar | CDI</title>
    <link rel="stylesheet" href="master.css">
  </head>
  <body>

    <div class="login-box">
      <img src="cdi.jpg" class="avatar" alt="Avatar Image">
      <h1>Ingresar</h1>
      <form action="login.php" method="POST">
        <!-- USERNAME INPUT -->
        <label for="username">Usuario</label>
        <input type="text" placeholder="Ingresar Usuario" name="usuario">
        <!-- PASSWORD INPUT -->
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Ingresar Contraseña" name="contraseña">
        <input type="submit" value="Iniciar Sesion">
      </form>
    </div>
  </body>
  <?php
if ($_POST){
    session_start();
    require('conexion.php');
    $u=$_POST['usuario'];
    $c=$_POST['contraseña'];
    $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $conexion->prepare("SELECT * FROM usuarios where usuario= :u AND contraseña = :c");
    $query->bindparam(":u", $u);
    $query->bindparam(":c", $c);
    $query->execute();
    $usuario = $query->fetch(PDO::FETCH_ASSOC);
    if($usuario){
        $_SESSION['usuario'] = $usuario["usuario"];
        header("location:index.html");
    }else{ 
      echo '<link href="ESTILOPHP.css" type="text/css" rel="stylesheet">';
      $error = "Usuario o contraseña incorrecta";
      echo "<p class='error'>$error</p>";
    }

}
?>
</html>
