<?php

    require_once __DIR__."/database/conectar.php";

    class M_Minijuegos extends Conectar{

        public function mostrarJuegos(){
            $sql="SELECT id,nombre FROM minijuegos;";
            $resultado=Conectar::$conexion->prepare($sql);
            $resultado->execute();
            return $resultado->fetchAll(PDO::FETCH_ASSOC);
        }

        public function mostrarJuego($id){
            $sql="SELECT id,nombre FROM minijuegos WHERE id=".$id.";";
            $resultado=Conectar::$conexion->prepare($sql);
            $resultado->execute();
            return $resultado->fetch(PDO::FETCH_ASSOC);
        }
    }

?>