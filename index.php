<?php
include_once "header.php";
include_once "funciones.php";

$base= new funciones("Recursos/config.ini");
if(!$base->conectarBD()){
    echo"<h1 class='text-center'>Error</h1>";
    exit();
}

$datos=$base->leer();
if(!$base->leer()){
    echo"<h1 class='text-center'>No hay pokemones</h1>";
    exit();
}

?>
</header>
<div class="text-center m-2 p-5">
    <form action="index.php" method="post" class="d-flex flex-row justify-content-center">
        <div class="input-group mb-3">
            <input type="text"  name="ingreso" class="form-control" placeholder="ingrese el nombre, numero o tipo de pokemon" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button name="buscar" class="btn btn-info" type="submit">Quien es ese pokémon?</button>
            </div>
        </div>
    </form>
</div>
<?php
if(isset($_POST['buscar'])){
    $info=$_POST['ingreso'];
    $buscar=$base->buscarEnBD($info);
    if(!$buscar)
        echo"<h1 class='text-center'>No se encuentra el pokemon solicitado</h1>";
    else $datos=$buscar;
}
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
                if($login) echo " <th class='text-center'>Acciones</th>";
                ?>

            </tr>
            </thead>
            <tbody>
            <?php
            foreach($datos as $dato){
            ?>
            }
            <tr>
                <td class='text-center aling-middle'><img src="<?php echo $dato['imagen']?>" width='50'></td>
                <td class='text-center aling-middle'><?php echo $dato['nombre']?></td>
                <td class='text-center aling-middle'><?php echo $dato['id']?></td>
                <td  class='text-center aling-middle'><img src='imagenes/<?php echo $dato['tipo']?>.png'  width='50' ></td>
                <?php
                 if($login)
                echo "
                <td  class='text-center aling-middle'>
                     <div class='d-flex justify-conter-center'>
                       <a href='modificar.php' class='btn btn-success text-black '>Modificar</a>
                       <a href='index.php' class='btn btn-danger text-black ml-1'>Eliminar</a>
                    </div>
                </td>";
               ?>
            </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
    <div class="container mx-auto">
        <?php
        if($login) echo"<a href='nuevoPokemon.php' class='btn btn-info btn-block mt-3'>Nuevo Pokemon</a>";
        ?>
    </div>
