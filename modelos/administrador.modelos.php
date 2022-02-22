<?php

require_once "conexion.php";

class ModeloAdministrador {

    public static function mdlMostrarAdministrador($tabla, $item, $valor)
    {
        if ($item != null){
            $stmt = Conexion::conectar()->prepare ("SELECT * FROM $tabla Where $item = :item order by id Desc");

            $stmt->bindParam(":" .$item,$valor.PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();



        }else{
            $stmt = Conexion::conectar()->prepare ("SELECT * FROM $tabla order by id Desc");
            $stmt=execute();
            return $stmt->fetchAll();
        }
    }
}