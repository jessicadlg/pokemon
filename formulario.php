<?php
include_once "header.php";
?>

<div class="container">
 <h1 class="text-center">Nuevo Pokémon</h1>
<form  action="nuevoPokemon.php" method="POST" class="border border-info mx-auto p-3" >

    <label  for="imagen">Imagen del Pokémon:</label>
    <input type="text"  name="imagen" style="width: 100%;" placeholder="Ingrese el nombre de url de la imagen"><br>
     <label  for="nombre">Nombre del Pokémon: </label>
    <input type="text"  name="nombre" style="width: 100%;" placeholder="Ingrese el nombre del pokémon"><br>
     <label  for="nroPokemon">Numero del Pokémon: </label>
    <input type="text"  name="id" style="width: 100%;" placeholder="Ingrese el numero del pokémon"><br>
    <label  for="tipo">Tipo de Pokémon:</label>
    <select  name="tipo" style="width: 100%;">
    <option value="" disabled selected>Elija el tipo de Pokémon</option>
        <option value="Fuego">Fuego</option>
        <option value="Tierra">Tierra</option>
        <option value="Volador">Volador</option>
        <option value="Electrico">Electrico</option>
        <option value="Hada">Hada</option>
        <option value="Psiquico">Psiquico</option>
        <option value="Agua">Agua</option>
    </select><br>
    <label  for="descripcion">Descripción del Pokémon:</label><br>
    <textarea  name="descripcion"class="mh-100" style="width: 100%; height:50%;"></textarea>
      <button type="submit" name="insertar" class="btn btn-success">Crear Pokémon</button>
      <a href="index.php" type="submit" name="baja" class="btn btn-danger">Cancelar</a>
</form>
</div>
