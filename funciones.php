<?php


class funciones
{
private $conexion;
private $parametros;

    public function __construct($archivo)
    {
        $this->parametros = parse_ini_file($archivo, true);
    }
    public function conectarBD(){
        $conexion = new mysqli($this->parametros['bd']['host'],$this->parametros['bd']['usuario'],
            $this->parametros['bd']['password'],$this->parametros['bd']['basededatos']);

        if($conexion->connect_error){
            return false;
        }
        $this->conexion=$conexion;
        return true;
    }
    public function leer(){
        $query= "SELECT * FROM listado";
        if(!$registros=$this->conexion->query($query))
            echo"La base no tiene registros";
        $result=[];
        while($reg=$registros->fetch_array()){
            array_push($result,$reg);
        }
    }

    public function buscarEnBD($info){
        $query = "SELECT *FROM listado";
        $registros = $this->conexion->query($query);
        $resultado=[];
        while ($reg = $registros->fetch_assoc()) {

            array_push($resultado,$reg);
        }
        return $resultado;
    }

    public function insertarPokemon($info){
        $sql= "INSERT INTO listado VALUES (?,?,?,?,?)";
        $stmt=$this->conexion-> prepare($sql);
        $stmt->bind_param("ssiss",$info['imagen'],
            $info['nombre'],$info['numero'],$info['tipo'], $info['descripcion']);
        return $stmt->execute();
    }

}