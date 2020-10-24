<?php
  include 'action.php';
  include_once 'header.php';
?>
<div class="text-center m-2 p-5">
    <form action="index.php" method="post" class="d-flex flex-row justify-content-center">
        <div class="input-group mb-3">
            <input type="text"  name="ingreso" class="form-control" placeholder="Ingrese el nombre, numero o tipo de pokemon" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button name="buscar" class="btn btn-info" type="submit">Quien es ese pokémon?</button>
            </div>
        </div>
    </form>
</div>
        <!--<hr>-->
        <?php if (isset($_SESSION['response'])) { ?>
        <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <b><?= $_SESSION['response']; ?></b>
        </div>
        <?php } unset($_SESSION['response']); ?>
      </div>




        <?php
          $query = 'SELECT * FROM listado';
          $stmt = $conexion->prepare($query);
          $stmt->execute();
          $result = $stmt->get_result();
        ?>
     <div class='container'>
         <div class='table-responsive'>
             <table class='table' >
                 <thead>
            <tr>
                <th class='text-center'>Imagen</th>
                <th class='text-center'>Nombre</th>
                <th class='text-center'>Numero</th>
                <th class='text-center'>Tipo</th>

                <?php
                if($login) echo "
                 <th class='text-center'>Descripcion</th>
                 <th class='text-center'>Acciones</th>";
                ?>
            </tr>
          </thead>

                 <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>

              <td class='text-center aling-middle'><img src='<?= $row['imagen']; ?>' width='50'></td>

              <td class='text-center aling-middle'>
                  <a href="detalle.php?detalle=<?= $row['id']; ?>" ><?= $row['nombre']; ?></a>
              </td>

              <td class='text-center aling-middle'><?= $row['id']; ?></td>
              <td class='text-center aling-middle'><img src='recursos/imagenes/<?= $row['tipo']; ?>.png'width='50'</td>
                
              <td>
                <a href="action.php?borrar=<?= $row['id']; ?>" class="badge badge-danger p-2">Eliminar</a> 
                <a href="nuevoPokemon.php?editar=<?= $row['id']; ?>" class="badge badge-success p-2">Editar</a>
              </td>

            </tr>
            <?php } ?>
          </tbody>
             </table>
         </div>
     </div>
  <!--<script type="text/javascript">
  $(document).ready(function() {
    $('#data-table').DataTable({
      paging: true
    });
  });
  </script>-->
<div class="container mx-auto">
    <?php
    if($login) echo"<a href='nuevoPokemon.php' class='btn btn-info btn-block mt-3'>Nuevo Pokemon</a>";
    ?>
</div>
</body>

</html>