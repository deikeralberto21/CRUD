<?php
include("server.php");
//Recibir datos nuevos
if(isset($_POST["form_save"])){
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $cedula=$_POST["cedula"];
    $email=$_POST["correo"];
    if($nombre== "" || $apellido =="" || $cedula== "" || $email== ""){
        header("location:../index.php");
    
    }else{
        $sql="INSERT INTO user(nombre, apellido, cedula,  email) VALUES ('$nombre','$apellido','$cedula','$email')";
        $query= $conn->prepare($sql);
        $query->execute();
        header("location:../index.php");
    }
}

//Eliminar datos
if(isset($_GET["id"])){
    $id=$_GET["id"];
    $sql="DELETE FROM user WHERE id = $id";
    $query=$conn->prepare($sql);
    $query->execute();
    header("location:../delete.php");
}
//Modificador
if(isset($_GET["id2"])){
    session_start();
    $_SESSION["id"]=$_GET["id2"];
    header("location:../edit.php");
}
?>