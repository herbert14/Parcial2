<?php
  $txtNombre = "";
  $txtApellido = "";
  $txtFinal = "";
  if (isset($_POST["btnprocesar"]))//isset= esta seteado, esta instaciado , existe
    {
  $txtNombre = $_POST["txtNombre"];
  $txtApellido = $_POST["txtApellido"];
  $txtFinal = $txtNombre . " " .  $txtApellido;
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf8"/>
  <title> forumulario PHP HTML</title>
</head>
<body>
  <h1> Primer Formulario</h1>
<form action="ej1.php" method="post">

<label for="txtNombre">Nombre</label>
<input type="text" id="textNombre"
        name="textNombre" placeholder="Nombre"/>
        <br/>


<label for="txtApellido">Apellido</label>
<input type="text" id="textApellido"
        name="textApellido" placeholder="Apellido"/>
        <br/>

    <input type="submit" value="procesar"
        name="btnProcesar"  id ="btnProcesar"  />



    <div>
      <?php
      echo $txtFinal;
      ?>
    </div>
  </form>
</body>
</html>
