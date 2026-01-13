<?php

    require_once __DIR__."/../model/M_Minijuegos.php";

    class C_Minijuegos{
        private $model;
        public $vista;

        function __construct(){
            $this->model= new M_Minijuegos();
        }

        public function mostrarJuegos(){
            $juegos=$this->model->mostrarJuegos();

            $this->vista="V_Juegos";
            return ['juegos' => $juegos];
        }

        public function mostrarJuego(){
            $idJuego=$_GET['id'] ?? null;

            $juego=$this->model->mostrarJuego($idJuego);

            //Leer últimos juegos desde cookie
            if(isset($_COOKIE['ultimosJuegos'])){
                $cookie=json_decode($_COOKIE['ultimosJuegos'], true);
            } else {
                $cookie=[];
            }

            $this->vista='V_Juego';
            return [
                'juego' => $juego,
                'cookies' => $cookie
            ];
        }

        public function guardarCookie(){
            $idJuego=$_GET['id'] ?? null;

            $juego=$this->model->mostrarJuego($idJuego);

            //Crear un array con los últimos juegos desde la cookie
            if(isset($_COOKIE['ultimosJuegos'])){
                $ultimosJuegos=json_decode($_COOKIE['ultimosJuegos'], true);
            }else{
                $ultimosJuegos=[];  //Si no hay cookie, empezamos vacío
            }

            //Añadir el juego actual al principio, si existe
            if($juego){
                //Primero, quitamos el juego si ya estaba para no repetirlo
                $nuevaCookie=[];
                foreach($ultimosJuegos as $juegoCookie){
                    if($juegoCookie!=$juego['nombre']){
                        $nuevaCookie[]=$juegoCookie;
                    }
                }

                //Ponemos el juego actual al principio
                array_unshift($nuevaCookie, $juego['nombre']);

                //Solo guardamos los últimos 3
                $cookieFinal=array_slice($nuevaCookie, 0, 3);

                //Guardamos la cookie
                setcookie('ultimosJuegos', json_encode($cookieFinal), time() + 86400, "/");
            }

            $this->vista='V_Juego';
            return [
                'juego' => $juego,
                'cookies' => $cookieFinal ?? []
            ];
        }
    }

?>