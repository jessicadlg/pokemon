<?php

session_start();
include 'config.php';

$update = false;
$id = "";
$imagen = "";
$nombre = "";
$tipo = "";
$descripcion = "";

if (isset($_POST['agregar'])) {
    $imagen=$_POST['imagen'];
    $nombre = $_POST['nombre'];
    $id = $_POST['id'];
    $tipo = $_POST['tipo'];
    $descripcion = $_POST['descripcion'];
    //$photo = $_FILES['image']['name'];
    //$upload = "uploads/" . $photo;

    $query = "INSERT INTO listado(imagen,nombre,id,tipo,descripcion) VALUES(?,?,?,?,?)";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("ssdss",$imagen , $nombre, $id, $tipo,$descripcion);
    $stmt->execute();
    //move_uploaded_file($_FILES['image']['tmp_name'], $upload);

    header('location:index.php');
    $_SESSION['response'] = "Se ha agregado un pokemon!";
    $_SESSION['res_type'] = "success";
}

if (isset($_GET['borrar'])) {
    $id = $_GET['borrar'];

    /*$sql = "SELECT * FROM listado WHERE id=?";
    $stmt2 = $conexion->prepare($sql);
    $stmt2->bind_param("d", $id);
    $stmt2->execute();
    $result2 = $stmt2->get_result();
    $row = $result2->fetch_assoc();

    //$imagepath = $row['photo'];
    //unlink($imagepath);*/

    $query = "DELETE FROM listado WHERE id=?";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    header('location:index.php');
    $_SESSION['response'] = "Se ha eliminado el pokemon!";
    $_SESSION['res_type'] = "danger";
}

if (isset($_GET['editar'])) {
    $id = $_GET['editar'];

    $query = "SELECT * FROM listado WHERE id=?";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("d", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $imagen=$row['imagen'];
    $nombre = $row['nombre'];
    $id = $row['id'];
    $tipo = $row['tipo'];
    $descripcion = $row['descripcion'];

    $update = true;
}

if (isset($_POST['update'])) {
    $imagen=$_POST['imagen'];
    $act_imagen=$imagen;
    $act_nombre = $_POST['nombre'];
    $act_id = $_POST['id'];
    $act_tipo = $_POST['tipo'];
    $act_tipo=$tipo;
    $act_descripcion = $_POST['descripcion'];

    /*if (isset($_FILES['image']['name']) && ($_FILES['image']['name'] != "")) {
        $newimage = "uploads/" . $_FILES['image']['name'];
        unlink($oldimage);
        move_uploaded_file($_FILES['image']['tmp_name'], $newimage);
    } else {
        $newimage = $oldimage;
    }*/
    $query = "UPDATE listado SET imagen=?,nombre=?,numero=?,tipo=?,descripcion=? WHERE id=?";
    //$stmt = $conexion->prepare($query);
    //$stmt->bind_param("ssdss",$act_imagen,$act_nombre,$act_id,$act_tipo, $act_descripcion);

 //   $stmt->execute();

    $_SESSION['response'] = "Se ha modificado correctamente!";
    $_SESSION['res_type'] = "primary";
    header('location:index.php');
}

if (isset($_GET['detalle'])) {
    $id = $_GET['detalle'];
    $query = "SELECT * FROM listado WHERE id=?";
    $stmt = $conexion->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $vimagen=$row['imagen'];
    $vnombre = $row['nombre'];
    $vid = $row['id'];
    $vtipo = $row['tipo'];
    $vdescripcion = $row['descripcion'];
}
