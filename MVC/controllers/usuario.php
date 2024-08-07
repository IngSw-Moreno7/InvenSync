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
            $tipo_documento_identidad=$_POST['tipo_documento_identidad'];
            $numero_documento_identidad=$_POST['numero_documento_identidad'];
            $nombres_completos=$_POST['nombres_completos'];
            $apellidos_completos=$_POST['apellidos_completos'];
            $direccion_residencia=$_POST['direccion_residencia'];
            $correo_electronico=$_POST['correo_electronico'];
            $telefono_contacto=$_POST['telefono_contacto'];
            
            Usuario::crear($tipo_de_persona,$tipo_documento_identidad,$numero_documento_identidad,$nombres_completos,
            $apellidos_completos,$direccion_residencia,$correo_electronico,$telefono_contacto);
            header("Location:./?controlador=usuario&accion=inicio");
        }
        include_once("views/usuario/create.php");
    }

    public function editar(){

        $id_persona=$_GET['id'];
        if($_POST){
            $tipo_de_persona=$_POST['tipo_de_persona'];
            $tipo_documento_identidad=$_POST['tipo_documento_identidad'];
            $numero_documento_identidad=$_POST['numero_documento_identidad'];
            $nombres_completos=$_POST['nombres_completos'];
            $apellidos_completos=$_POST['apellidos_completos'];
            $direccion_residencia=$_POST['direccion_residencia'];
            $correo_electronico=$_POST['correo_electronico'];
            $telefono_contacto=$_POST['telefono_contacto'];

            Usuario::editar(
                $id_persona,
                $tipo_de_persona,
                $tipo_documento_identidad,
                $numero_documento_identidad,
                $nombres_completos,
                $apellidos_completos,
                $direccion_residencia,
                $correo_electronico,
                $telefono_contacto
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