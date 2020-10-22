<?php
include_once "header.php";
?>

<div class="container-fluid p-5 m-4 ">
 <h1 class="text-center">Nuevo Pokémon</h1>
<form enctype="multipart/form-data" action="nuevoPokemon.php" method="POST" class="border border-info mx-auto p-5" style="width: 50%;">
       <input type="hidden"  name="idPokemon" style="width: 100%;"><br>

    <label  for="imagen">Imagen del Pokémon:</label>
    <input type="text"  name="imagenPokemon" style="width: 100%;" placeholder="Ingrese el nombre de la imagen"><br>
     <label  for="nombrePokemon">Nombre del Pokémon: </label>
    <input type="text"  name="nombrePokemon" style="width: 100%;" placeholder="Ingrese el nombre del pokémon"><br>
     <label  for="nroPokemon">Numero del Pokémon: </label>
    <input type="text"  name="nroPokemon" style="width: 100%;" placeholder="Ingrese el numero del pokémon"><br>
    <label  for="tipo">Tipo de Pokémon:</label>
    <select  name="tipoPokemon" style="width: 100%;">
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
    <textarea  name="descripPokemon"class="mh-100" style="width: 100%; height:50%;"></textarea>
      <button type="submit" name="insertar" class="btn btn-success">Crear Pokémon</button>
      <button type="submit" name="baja"  class="btn btn-danger">Cancelar</button>
</form>
</div>
