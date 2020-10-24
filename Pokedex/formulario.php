<?php
include 'action.php';
include_once 'header.php';
?>

<div class="container">
    <?php if ($update == true) { ?>
    <h3 class="text-center text-info">Modificar Pokemon</h3>
    <?php } else { ?>
    <h3 class="text-center text-info">Nuevo Pokemon</h3>
    <?php } ?>

    <form action="action.php" method="post"  class="border border-info mx-auto p-3" enctype="multipart/form-data">
       <div class="form-group">
            <input type="text" name="imagen" value="<?= $imagen; ?>"class="form-control" placeholder="Ingrese la url " required>
          </div>
            <div class="form-group">
            <input type="text" name="nombre" value="<?= $nombre; ?>" class="form-control" placeholder="Ingrese el nombre" required>
          </div>
          <div class="form-group">
            <input type="text" name="id" value="<?= $id; ?>" class="form-control" placeholder="Ingrese el numero" required>
          </div>
          <div class="form-group">
              <select  name="tipo" value="<?= $tipo; ?>" class="form-control" >
                  <option value="" disabled selected>Elija el tipo </option>
                  <option value="Fuego">Fuego</option>
                  <option value="Planta">Planta</option>
                  <option value="Volador">Volador</option>
                  <option value="Electrico">Electrico</option>
                  <option value="Hada">Hada</option>
                  <option value="Psiquico">Psiquico</option>
                  <option value="Agua">Agua</option>
              </select>
          </div>
            <div class="form-group">
                <input type="text" name="descripcion" value="<?= $descripcion; ?>" class="form-control" placeholder="Ingrese la descripcion " required>
            </div>
       <!--   <div class="form-group">
            <input type="hidden" name="oldimage" value="<?/*= $imagen; */?>">
            <input type="file" name="imagen" class="custom-file">
          </div>-->
          <div class="form-group">
            <?php if ($update == true) { ?>
            <input type="submit" name="update" class="btn btn-success" value="Modificar pokemon">
            <?php } else { ?>
            <input type="submit" name="agregar" class="btn btn-success" value="Crear nuevo pokemon">
            <?php } ?>
              <a href="index.php" type="submit" name="cancelar" class="btn btn-danger">Cancelar</a>
          </div>
        </form>
</div>



