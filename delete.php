<?php include("config/header.php");

$sql="SELECT * FROM user";
$query=$conn->prepare($sql);
$query->execute();
$result=$query->fetchAll();
?>

<div class="cont-table">
<form action="delete.php" method="post">
<table class="tabla">
    <tr><th>Nombre</th><th>Apellido</th><th>Cedula</th><th>Email</th><th>Accion</th><tr>
    <?php    
        foreach($result as $a){
            echo '<tr class="info"><td>'.$a["nombre"].
            '</td><td>'.$a["apellido"].'</td><td>'.
            $a["cedula"].'</td><td>'.$a["email"].
            '</td><td><a class="boton danger" href="config/procesing.php?id='. $a["id"].'">Eliminar</a></td></tr>';
        }
    ?>
</table>
</form>

</div>

<?php include("config/footer.php");?>