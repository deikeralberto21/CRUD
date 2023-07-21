<?php include("config/header.php");

$message="<span class=alert>Cedula no encontrada</span>"; 
if(isset($_POST["search"])){
    $a=1;
    $search=$_POST["buscador"];   
   if($search!=""){
        $sql="SELECT * FROM user";
        $query=$conn->prepare($sql);
        $query->execute();
        $result=$query->fetchAll();

        foreach($result as $ser){
            if($search == $ser["cedula"]){
                $nombre=$ser["nombre"];
                $apellido=$ser["apellido"];;
                $email=$ser["email"];
                $message2="<div class=resultado><strong>NOMBRE: </strong>$nombre<br>
                    <strong>APELLIDO: </strong>$apellido<br>
                    <strong>EMAIL: </strong>$email<br></div>";
            }
        }
    }
}
?>
    <div class="container container2">
        <div>
        <form action="select.php" method="post" class="form-horizon">
        <input type="text" name="buscador" placeholder="Buscar cedula">
        <input type="submit" name="search" value="Buscar" class="boton normal">
        </form>
        </div>

        <div class="resultado">
            <?php 
            if(isset($a)){
                if(!isset($message2)){
                    echo $message;
                }else{
                    echo $message2;
                }
            }
            ?>
        </div>
    </div>
<?php include("config/footer.php");?>