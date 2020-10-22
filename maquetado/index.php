<?php
include_once "header.php";
?>
</header>
<div class="text-center mt-3 p-5">
    <form action="index.php" method="post" class="d-flex flex-row justify-content-center">
        <input style="width: 60%"  name="codigo" type="search" placeholder="Ingrese el numero de Pokémon..." aria-label="Search">
        <button class="btn btn-outline-info" name="btn" type="submit">Quien es ese pokémon?</button>
    </form>
</div>
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

            <tr>
                <td  class='text-center'><img src="imagenes/Bulbasaur.png" width='50'></td>
                <td  class='text-center'>Bulbasaur</td>
                <td  class='text-center'>2</td>
                <td  class='text-center'><img src="imagenes/planta.png"  width='50' ></td>
                <td  class='text-center'><a href='modificar.php' class='btn btn-success text-black'>Modificar</a>
                    <a href='index.php?borrar=<?=$fila['identificador']?>' class='btn btn-danger text-black'>Eliminar</a></td>
            </tr>
    </div>
