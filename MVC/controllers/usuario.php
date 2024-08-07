<?php

include_once("models/usuario.php");
include_once("database/connectBD_I.php");

BD::conexion();

class ControladorUsuario{

    public function inicio(){

    $usuarios=Usuario::consultar();
    
    include_once("views/usuario/home.php");
    }

    public function crear(){

        if($_POST){
            print_r($_POST);
            $tipo_de_persona=$_POST['tipo_de_persona'];
            $nombre_completo=$_POST['nombre_completo'];
            $correo=$_POST['correo'];
            $telefono=$_POST['telefono'];
            
            Usuario::crear($tipo_de_persona,$nombre_completo,$correo,$telefono);
            header("Location:./?controlador=usuario&accion=inicio");
        }
        include_once("views/usuario/create.php");
    }

    public function editar(){

        $id_persona=$_GET['id'];
        if($_POST){
            $tipo_de_persona=$_POST['tipo_de_persona'];
            $nombre_completo=$_POST['nombre_completo'];
            $correo=$_POST['correo'];
            $telefono=$_POST['telefono'];

            Usuario::editar(
                $id_persona,
                $tipo_de_persona,
                $nombre_completo,
                $correo,
                $telefono
            );
            header("Location:./?controlador=usuario&accion=inicio");
        }
        $array_tipo_persona=[
            'CLTE'=> 'CLIENTE',
            'EMP'=> 'EMPLEADO', 
            'PRV'=> 'PROVEEDOR',   
        ];
        $usuario=(Usuario::buscar($id_persona));

        include_once("views/usuario/edit.php");
    }

    public function eliminar(){

        print_r($_GET);

        $id=$_GET['id'];

        Usuario::eliminar($id);
        header("Location:./?controlador=usuario&accion=inicio");
    }
}

?>