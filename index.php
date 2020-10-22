<?php

require_once("conexion.php");
include_once("header.php");
require_once ("procesar.php");
?>
</header>
<div class="text-center mt-3 p-5">
    <form action="index.php" method="post" class="d-flex flex-row justify-content-center">
        <input style="width: 60%"  name="codigo" type="search" placeholder="Ingrese el numero de Pokémon..." aria-label="Search">
        <button class="btn btn-outline-info" name="btn" type="submit">Quien es ese pokémon?</button>
    </form>
</div>

<?php
echo"
<div class='container'>
 <div class='table-responsive'>

                  <table class='table' >
                      <thead>
                      <tr>
                        <th class='text-center'>Imagen</th>
                        <th class='text-center'>Nombre</th>
                        <th class='text-center'>Numero</th>
                        <th class='text-center'>Tipo</th>
                        <th class='text-center'>Acciones</th>
                      </tr>
                      </thead>
                      <tbody>
                      </div>
                      ";

if(isset($_POST['btn']) && $_POST['codigo']!=""){
    $buscar = $_POST['codigo'];
    $sql = "SELECT * FROM listado  WHERE numero = '".$buscar."' OR nombre = '".$buscar."' OR
 tipo = '".$buscar."' ";
}else
    $sql = "SELECT * FROM listado";

$result = $conexion->query($sql) or die(mysqli_error($conexion));

if($result ->num_rows ==0){
    $sql = "SELECT * FROM listado";
    $result = $conexion->query($sql) or die(mysqli_error($conexion));
    echo "<h2 class='text-center mt-3 p-5'>Pokemon no encontrado</h2>";

}
while ($fila = $result->fetch_assoc()) {?>
    <tr>
        <td  class='text-center'><img src='Recursos/imagenes/<?= $fila['imagen']?>.png' width='50'></td>
        <td  class='text-center'><?= $fila['nombre']?></td>
        <td  class='text-center'><?= $fila['numero']?></td>
        <td  class='text-center'><img src='Recursos/imagenes/<?= $fila['tipo']?>.png' width='50' ></td>
        <td  class='text-center'><a href=modificar.php?editar=<?=$fila['identificador']?>' class='btn btn-success text-black'>Modificar</a>
        <a href='index.php?borrar=<?=$fila['identificador']?>' class='btn btn-danger text-black'>Eliminar</a></td>
    </tr>
<?php }?>
<t/body>
</table>
</div>
