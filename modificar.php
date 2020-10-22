<?php
require_once ("conexion.php");
$conexion = mysqli_connect("localhost", "root", "", "pokedex-delgado-jessica");

if(isset($_GET['editar'])) {
    $editar_id = $_GET['editar'];

$result=$conexion->query("SELECT * FROM listado WHERE identificar='$editar_id'");
if($result->num_rows){
    $fila =$result->fetch_array();
    $imagen = $fila['imagen'];
    $nombre = $fila['nombre'];
    $numero = $fila['numero'];
    $tipo = $fila['tipo'];
    $descripcion = $fila['descripcion'];
}
?>
</header>

 <div class="container-fluid p-5 m-4 ">
 <h1 class="text-center">Modificar Pokémon</h1>
<form action="" enctype="multipart/form-data" method="POST" class="border border-info mx-auto p-5" style="width: 50%;">
    <input type="hidden"  name="idPokemon" style="width: 100%;"><br>
    <label  for="imagen">Imagen del Pokémon:</label>
    <input type="text"  name="imagenPokemon" style="width: 100%;" value="<?php echo $imagen;?>"</td>

     <label  for="nombrePokemon">Nombre del Pokémon: </label>
    <input type="text"  name="nombrePokemon" style="width: 100%;" value="<?php echo $nombre;?>"><br>
     <label  for="nroPokemon">Numero del Pokémon: </label>
    <input type="text"  name="nroPokemon" style="width: 100%;" value="<?php echo $numero;?>"><br>
    <label  for="tipo">Tipo de Pokémon:</label>
    <select  name="tipoPokemon" value="<?php echo $tipo;?>" style="width: 100%;">
    <option value="">Elija el tipo de Pokémon</option>
        <option value="Fuego">Fuego</option>
        <option value="Tierra">Tierra</option>
        <option value="Volador">Volador</option>
        <option value="Electrico">Electrico</option>
        <option value="Hada">Hada</option>
        <option value="Psiquico">Psiquico</option>
        <option value="Agua">Agua</option>
    </select><br>
    <label  for="descripcion">Descripción del Pokémon:</label><br>
    <textarea name="descripcion"  value="<?php echo $descripcion;?>"class="mh-100" style="width: 100%; height:50%;"></textarea>
    <button type="submit" name="actualizar" class="btn btn-success">Modificar Pokémon</button>
     <button type="submit" name="baja"  class="btn btn-danger">Cancelar</button>
</form>
</div>
<?php
if(isset($_POST['actualizar'])){
    $actualizar_imagen=$_POST['imagenPokemon'];
    $actualizar_nombre = $_POST['nombrePokemon'];
    $actualizar_numero = $_POST['nroPokemon'];
    $actualizar_tipo = $_POST['tipoPokemon'];
    $actualizar_descripcion = $_POST['descripPokemon'];
    $actualizar="UPDATE listado SET imagen='$actualizar_imagen', nombre='$actualizar_nombre', numero='$actualizar_numero',tipo='$actualizar_tipo'
,descripcion='$actualizar_descripcion'";
    $query=mysqli_query($conexion,$actualizar);

    if($query) {
        header("location:index.php");
    }
        else
            echo "fallo";
    }

}
?>
