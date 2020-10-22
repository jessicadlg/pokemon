<?php
require_once ("conexion.php");

if(isset($_POST['borrar'])){
    $id=$_POST['borrar'];
    $conexion->query("DELETE FROM crud WHERE identificador='$id'")or die($conexion->error());
   // $_SESSION['message']="Se ha eliminado exitosamente";
    //$_SESSION['msg_type']="danger";

    header("location:index.php");
}

if(isset($_POST['editar'])){
    $id=$_POST['editar'];


    $result=$conexion->query("SELECT * FROM crud WHERE id='$id'")or die($conexion->error());
    if($result->num_rows){
        $row =$result->fetch_array();
        $imagen = $row['imagenPokemon'];
        $nombre = $_POST['nombrePokemon'];
        $numero = $_POST['nroPokemon'];
        $tipo = $_POST['tipoPokemon'];
        $descripcion = $_POST['descripPokemon'];
    }

    header("location:form.php");
}