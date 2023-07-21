<?php include("config/header.php"); 
session_start();
if(isset($_POST["editar"])){
    
    $sql='UPDATE user SET cedula ="'.$_POST["buscador"].'"  WHERE user . id ='. $_SESSION[id];
    $query=$conn->prepare($sql);
    $query->execute();
    session_destroy();
    header("location:modify.php");
}
?>
<div class="container">
<form action="edit.php" method="post" class="form-horizon">
    <input type="text" name="buscador" placeholder="Nueva cedula">
    <input type="submit" name="editar" value="Buscar" class="boton normal">
</form>
<?php include("config/footer.php");?>