<?php include("config/header.php");?>

<div class="container">
<form action="config/procesing.php" method="post">
    <input type="text" placeholder="Nombre" autofocus name="nombre">
    <input type="text" placeholder="Apellido" name="apellido">
    <input type="text" placeholder="Cedula" name="cedula">
    <input type="text" placeholder="Correo" name="correo">
    <input type="submit" value="Subir" class="boton normal" name="form_save">
</form>
</div>

<?php include("config/footer.php");?>